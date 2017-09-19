<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/10
 * Time: 21:11
 */

function pr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function prd($data)
{
    pr($data);
    die;
}

function vd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function vdd($data)
{
    vd($data);
    die;
}