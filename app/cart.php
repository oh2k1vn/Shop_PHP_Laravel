<?php 
 
 namespace App;

 class cart{
     public $product = null;
     public $totalPrice = 0;
     public $totalQuanty = 0;

     public function constant($cart){
         if($cart){
             $this->product = $cart->product;
             $this->totalPrice = $cart->totalPrice;
             $this->totalQuanty = $cart->totalQuanty;
         }
     }

     public function addCart( $product, $id){
         $newProduct = ['qty' => 0, 'price' => $product->price, ' productInfo' => $product];
         if($this->product){
             if (array_key_exists($id, $product)){
                 $newProduct = $product[$id];
             }
         }

         $newProduct['qty']++;
         $newProduct['price'] = $newProduct['qty'] * $product->price;
         $this->product[$id] = $newProduct;
         $this->totalPrice += $product->price;
         $this->totalQuanty++;
     }
 }
?>