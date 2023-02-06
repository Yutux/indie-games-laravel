<?php

namespace App\Models;

class cart
{

    public $items = null; 
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart != null){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        
        }
    }

    public function additem($item, $id)
    {
        $storeItem = ['qty'=> 0, 'price' => $item->price, 'item' =>$item];
        $price = (int) str_replace("$", "", $item->price);

        //si les articles existent déja.
        if($this->items){
            if(array_key_exists($id, $this->items)){

                $storeItem = $this->items[$id];

                //première ajout
            }
        }

        $storeItem['qty']++;
        $storeItem['price'] = $item->price * $storeItem['qty'];
        $this->items[$id] = $storeItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

}
