<?php

namespace App\Helpers\Cart;

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



    public function get($key){
        $item = $key instanceof Model ? $this->cart->where('subject_id', $key->id)->where('subject_type',get_class($key))->first()
        : $this->cart->firstWhere('id' , $key);
        return $this->withRelationshipIfExists($item);
    }

    public function all(){

        $cart = $this->cart;
        $cart =  $cart->map(function ($item) {
            return $this->withRelationshipIfExists($item);
        });

        return $cart;
    }

    public function put(array $value , $obj = null)
    {
        if(! is_null($obj) && $obj instanceof Model) {
            $value = array_merge($value , [
               'id' => 1,
                'subject_id' => $obj->id,
                'subject_type' => get_class($obj)
            ]);
        } else {
            $value = array_merge($value , [
                'id' => 1
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
}
