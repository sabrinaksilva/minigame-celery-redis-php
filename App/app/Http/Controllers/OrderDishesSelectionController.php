<?php
declare(strict_types=1);

namespace App\Http\Controllers;

class OrderDishesSelectionController extends Controller
{
    public function index() {
        // recebe o número do pedido

        return view('order-dishes-selection');
    }
}
