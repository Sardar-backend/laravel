<?php

namespace App\Helpers\Cart;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;

class CartService
{
    protected $cart;

    public function __construct()
    {
        $this->cart = session()->get('cart') ?? collect([]);
    }

    protected function withRelationshipIfExists($item){
        if (isset($item['subject_id']) && isset($item['subject_type'])) {
            $class = $item['subject_type'];
            $subject =(new $class())->find($item['subject_id']);
            $item[strtolower(class_basename($class))] = $subject;

            unset($item['subject_id']);
            unset($item['subject_type']);

            return $item;

        }
    }



    public function get($key,$withRelationshipIfExists=true){
        $item = $key instanceof Model
                    ? $this->cart->where('subject_id', $key->id)->where('subject_type',get_class($key))->first()
                    : $this->cart->firstWhere('id' , $key);
        return $withRelationshipIfExists ? $this->withRelationshipIfExists($item) : $item;
    }

    public function all(){

        $cart = $this->cart;
        $cart =  $cart->map(function ($item) {
            return $this->withRelationshipIfExists($item);
        });

        return $cart;
    }

    public function put(array $value , $obj=null)
    {

        $id=Cart::all()->count() + 1;
        if(! is_null($obj) && $obj instanceof Product) {
            $value = array_merge($value , [
               'id' => $id,
                'subject_id' => $obj->id ,
                'subject_type' => get_class($obj)
            ]);
        } elseif( ! isset($value['id'])) {
            $value = array_merge($value , [
                'id' => $id
            ]);
        }

        $this->cart->put($value['id'] , $value);
        session()->put('cart' , $this->cart);

        return $this;
    }

    public function has($key)
    {
        if($key instanceof Model) {
            return ! is_null(
                $this->cart->where('subject_id' , $key->id)->where('subject_type' , get_class($key))->first()
            );
        }

        return ! is_null(
            $this->cart->firstWhere('id' , $key)
        );
    }


    public function delete ($key){
        if ($this->has($key)) {
            $this->cart = $this->cart->filter(function ($item) use ($key) {

                if ($key instanceof Model) {
                    return  $item['subject_id'] !== $key->id && $item['subject_type'] = get_class($key);
                }

                return $item['id'] != $key;
            });
            // dd($this->cart);
            session()->put('cart', $this->cart);

            return true;
        }

        return false;
    }


    public function update ($key,$options){
        if (Cart::has($key)) {
            $item = collect($this->get($key , false));
            if (is_numeric($options)) {
                $item = $item->merge([
                    'quantity' => $item['quantity']  + $options
                ]);
            }
            $this->put($item->toArray());
            return $this;
        }
    }
}
