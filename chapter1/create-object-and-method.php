<?php 

   class Basket{
       public $itemsTotal;
       public $shippingCost;
       public $discount;

       public function calculateTotal(){
           return $this->itemsTotal + $this->shippingCost - $this->discount;
       }
   }

   $basket = new Basket();
   $basket->itemsTotal = 22;
   $basket->shippingCost = 250;
   $basket->discount = 25;

   $subtotal = $basket->calculateTotal();

   var_dump($subtotal);

?>