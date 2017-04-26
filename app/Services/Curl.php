<?php
/**
 * Created by PhpStorm.
 * User: rfreites
 * Date: 4/25/2017
 * Time: 6:39 PM
 */

namespace App\Services;


class Curl
{
    public function __construct()
    {

    }

    public function post($status)
    {
        var_dump('Using curl to post: ' . $status);
    }
}