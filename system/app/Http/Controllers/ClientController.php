<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{

    function showHome()
    {
        return view('template-shop.home');
    }
    function showStore()
    {
        return view('template-shop.store');
    }

    function showProduct()
    {
        return view('template-shop.product');
    }

    function showCheckout()
    {
        return view('template-shop.checkout');
    }

    function showContact()
    {
        return view('template-shop.contact');
    }


    function showLogin()
    {
    }
}
