<?php

	class CartClass extends Transaqt_Module_Class {
	
		public function __construct(){
			parent::__construct();
		}
		
		public function addTo($product_id){
			
			if(Transaqt::product::exists($product_id) && Transaqt::product::isSaleable($product_id)){
				if(!Transaqt::cart::in($product_id)){
					Transaqt::session::append('cart.products', Transaqt::product::get($product_id));
				} else {
					Transaqt::session::update('cart.products', $product_id, 'qty', function($current){ return $current + 1; });
				}
			} else {
				return false;
			}
		}
	
	}