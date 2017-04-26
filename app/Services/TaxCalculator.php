<?php
/**
 * Created by PhpStorm.
 * User: rfreites
 * Date: 4/25/2017
 * Time: 6:53 PM
 */

namespace App\Services;


class TaxCalculator
{
    public function multiply($amount)
    {
        return $amount * 2.5;
    }
}