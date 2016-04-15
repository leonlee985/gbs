<?php
/**
 * Created by PhpStorm.
 * User: Leon
 * Date: 16/3/7
 * Time: 下午4:30
 */

namespace backend\controllers;


use yii\web\Controller;

class RbacController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }
}