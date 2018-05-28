<?php

namespace App\Order\Calculator;

use App\Order\Cost\Cost;

interface CalculatorInterface
{
    public function  getCost(array $items): Cost;
}