<?php

namespace App\Services;

use App\Order\Cart\Cart;
use App\Reposotories\Menu\MenuRepository;

class CartService
{
    private $cart;
    private $menus;

    public function __construct(Cart $cart, MenuRepository $menus)
    {
        $this->cart = $cart;
        $this->menus = $menus;
    }

    public function getCart(): Cart
    {
        return $this->cart;
    }

    public function add($menu_id, $quantity): void
    {
        $menu = $this->menus->first($menu_id);

        var_dump($menu); die();
    }
}