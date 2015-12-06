<?php

namespace App\MyBlog\Services;

class OrderService
{
    /**
     * @param $qty
     * @return float|int
     */
    public function getDiscount($qty)
    {
        if ($qty == 1) {
            return 1;
        } elseif ($qty == 2) {
            return 0.9;
        } elseif ($qty == 3) {
            return 0.8;
        } else {
            return 0.7;
        }
    }

    /**
     * @param $qty
     * @param $discount
     * @return int
     */
    public function getTotal($qty, $discount)
    {
        $total = 500 * $qty * $discount;
        return $total;
    }

}