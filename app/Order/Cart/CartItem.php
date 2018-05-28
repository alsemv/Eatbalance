<?php

namespace App\Order\Cart;

use App\Models\Menu;

class CartItem
{
    private $menu;
    private $quantity;

    public function __construct(Menu $menu, $quantity)
    {
        $this->menu = $menu;
        $this->quantity = $quantity;
    }


}