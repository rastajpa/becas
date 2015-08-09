<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\rest\ActiveController;

class CarrerasController extends ActiveController
{
    public $modelClass = 'app\models\Carreras';

     public function prepareDataProvider() {

        $searchModel = new \app\models\CarrerasSearch();    
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}