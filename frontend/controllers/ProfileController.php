<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Profile;

class ProfileController extends Controller
{

    public function actionIndex()
    {
        $model = new Profile();
        return $this->render('index');
    }

    public function actionEdituser()
    {

        $model = new Profile();
        $getUser;
    }
}