<?php session_start();
class Cart {
    protected $cart_contents = array();
    
    public function __construct(){
        // get the shopping cart array from the session
        $this->cart_contents = !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;
        if ($this->cart_contents === NULL){
            // set some base values
            $this->cart_contents = array('cart_total' => 0, 'total_items' => 0);
        }
    }
	
	
	public function contents(){
        
        $cart = array_reverse($this->cart_contents);
		
        unset($cart['total_items']);
        unset($cart['cart_total']);

        return $cart;
    }
	
	