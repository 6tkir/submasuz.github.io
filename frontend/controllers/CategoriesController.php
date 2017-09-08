<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 08.09.2017
 * Time: 12:32
 */

namespace frontend\controllers;


use frontend\models\Products;
use yii\web\Controller;

class CategoriesController extends Controller
{
    public function actionIndex($id)
    {
        $id=\Yii::$app->request->get('id');
        $products=Products::find()->where(['parent'=>$id])->all();

        return $this->render('index',compact('products'));

    }

}