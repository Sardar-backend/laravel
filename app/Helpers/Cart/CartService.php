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

    public function get($id){
        return $id ;
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

