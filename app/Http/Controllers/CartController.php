<?php

namespace App\Http\Controllers;

use App\Reposotories\Menu\MenuRepository;
use App\Services\CartService;

class CartController extends Controller
{
    private $service;
    private $menus;

    public function __construct(CartService $service, MenuRepository $menus)
    {
        $this->service = $service;
        $this->menus = $menus;
    }


    public function index()
    {
        $cart = $this->service->getCart();

        return view('cart.index');
    }

    public function add($menu_id, $quantity)
    {
        $this->service->add($menu_id, $quantity);
    }
}