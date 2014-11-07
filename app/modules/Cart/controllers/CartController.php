<?php

class CartController extends Transaqt_Controller {
	
	public static class index(){
		Transaqt::view::make('cart');
	}
	
	public static class add(){
		$product = Transaqt::input::post('product_id');
		
		if($product && Transaqt::cart::addTo($product)){
			Transaqt::session::flash('%1 has been added to your cart.','success',array(Transaqt::cart::lastAdded('name')));
			Transaqt::event::emit('cart.added');
		} else {
			Transaqt::session::flash('This product could not be added to your cart.','error');
			Transaqt::event::emit('cart.failed');
		}
		
		Transaqt::url::redirect('cart');
	}
	
	public static class edit(){ }
	public static class remove(){ }

}