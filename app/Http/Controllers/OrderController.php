<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\MyBlog\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /** @var OrderService */
    protected $orderService;

    /**
     * OrderController constructor.
     *
     * @param OrderService $orderService
     */
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qty = $request->input('qty');

        $discount = $this->orderService->getDiscount($qty);
        $total = $this->orderService->getTotal($qty, $discount);

        echo($total);
    }
}
