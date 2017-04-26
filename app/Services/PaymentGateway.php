<?php
/**
 * Created by PhpStorm.
 * User: rfreites
 * Date: 4/25/2017
 * Time: 6:52 PM
 */

namespace App\Services;


class PaymentGateway
{
    protected $tax;

    /**
     * Create a new payment gateway instance.
     *
     * @param  TaxCalculator  $tax
     * @return void
     */
    public function __construct(TaxCalculator $tax)
    {
        $this->tax = $tax;
    }

    /**
     * Pay the given amount.
     *
     * @param  int  $amount
     * @return void
     */
    public function pay($amount)
    {
        var_dump($this->tax->multiply($amount));
    }
}