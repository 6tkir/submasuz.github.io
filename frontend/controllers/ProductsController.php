<?php

namespace frontend\controllers;

use frontend\models\Products;
use yii\data\Pagination;
use Yii;


class ProductsController extends \yii\web\Controller
{


    public function actionIndex()
    {

            /*// выполняем запрос
            $query = Products::find()->all();
            // делаем копию выборки
            $countQuery = clone $query;
            // подключаем класс Pagination, выводим по 10 пунктов на страницу
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
            // приводим параметры в ссылке к ЧПУ
            $pages->pageSizeParam = false;
            $models = $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all();*/

       /* $pages=new Pagination(['totalCount'=>$query->count(),'pagesize'=>1,'forcePageParam'=>false,'pageSizeParam'=>false]);

        $products=$query->offset($pages->offset)->limit($pages->limit)->all();*/

      /*  $query =Products::find()->all();
        $countQuery = clone $query;

        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();*/



        $products = Products::find()->all();
        return $this->render('index',compact(['products']));

    }

    public function actionModal($id){

        $id=Yii::$app->request->get('id');
         $ModalProduct=Products::findOne($id);
         $this->layout=false;

        return $this->render('modal',compact('ModalProduct'));
    }


}
