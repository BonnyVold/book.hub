<?php

namespace app\modules\forum\controllers;

use yii\web\Controller;
use app\modules\forum\Forum;

class MainController extends Controller
{
    public function actionTestMain(): void
    {
        echo "Mock!";
        die();
    }
}
