<?php

/**
 * Created by PhpStorm.
 * User: rfreites
 * Date: 4/25/2017
 * Time: 6:36 PM
 */

namespace App\Services;

class Twitter
{
    protected $curl;

    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function publish($status)
    {
        $this->curl->post($status);
    }
}