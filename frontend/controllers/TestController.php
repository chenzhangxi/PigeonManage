<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/10
 * Time: 21:15
 */

namespace frontend\controllers;


use yii\web\Controller;

class TestController extends Controller
{

    public function actionTest()
    {
        $data = [
            'name' => 'zhangxi',
            'age' => '20'
        ];
        pr($data);
    }

}