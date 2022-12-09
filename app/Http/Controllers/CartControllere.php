<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use Jackiedo\Cart\Cart;

class CartController extends Controller
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function content()
    {
        $variable = $this->cart->doSomething();
    }

    public function addItem()
    {
        $variable = $this->cart->doSomething();
    }
}