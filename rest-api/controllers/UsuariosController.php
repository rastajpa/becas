<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\rest\ActiveController;

class UsuariosController extends ActiveController
{
    public $modelClass = 'app\models\Usuarios';


public function actions() {

        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

        return $actions;
    }

    public function prepareDataProvider() {

        $searchModel = new \app\models\UsuariosSearch();    
        return $searchModel->search(\Yii::$app->request->queryParams);
    }
}