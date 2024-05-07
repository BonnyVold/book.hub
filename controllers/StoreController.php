<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Books;

class StoreController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}
