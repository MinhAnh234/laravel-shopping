<?php
namespace App;
class Cart{
    public $products    =null;
    public $totalPrice  = 0;
    public $totalQuanty =0;
    public function __construct($Cart) {
        if($Cart) {
            $this->products=$Cart->products;
            $this->totalPrice=$Cart->totalPrice;
            $this->totalQuanty=$Cart->totalQuanty;
        }
    }
    public function addCart($product,$id){
        $newProduct =['productInfo' =>$product,
                      'Price'  =>0,
                      'quanty' =>0];
        if($this->products){
            if(array_key_exists($id,$this->products)){
                $newProduct=$this->products[$id];
            }
        }
        $newProduct['quanty']++;
        $newProduct['Price']= $newProduct['quanty']*$product->price;
        $this->products[$id]= $newProduct;
        $this->totalPrice+=$product->price;
        $this->totalQuanty++;
    }
    public function destroyCart($id){
        $this->totalPrice   = $this->totalPrice -$this->products[$id]['Price'];
        $this->totalQuanty  = $this->totalQuanty-$this->products[$id]['quanty'];
        unset($this->products[$id]);
    }
    public function updateCart($id,$count,$totalPrice) {
        $this->totalQuanty  = $this->totalQuanty- $this->products[$id]['quanty'];
        $this->totalPrice   = $this->totalPrice -$this->products[$id]['Price'];
        $this->products[$id]['quanty']= $this->totalPrice -$this->products[$id]['quanty'];
        $this->products[$id]['quanty']=$count;
        $this->products[$id]['Price']=$totalPrice;
        $this->totalPrice   = $this->totalPrice +$this->products[$id]['Price'];
        $this->totalQuanty  = $this->totalQuanty+$this->products[$id]['quanty'];
    }

    
        
    
}
?>