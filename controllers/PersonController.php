<?php
/**
 * Created by PhpStorm.
 * User: tanya
 * Date: 31.10.18
 * Time: 10:47
 */

namespace app\controllers;

use app\models\Person;
use yii\rest\ActiveController;
use Yii;


class PersonController extends ActiveController
{
    public $modelClass = 'app\models\Person';
    public $scenario = 'create';

    public function actions()
    {
        // переопределяем стандартные actions
        $actions = parent::actions();
        unset($actions['create']);
        return $actions;
    }

    public function actionCreate() {

        /* @var $model \yii\db\ActiveRecord */
        $model = new $this->modelClass([
            'scenario' => $this->scenario,
        ]);

        try {
            $model->load(Yii::$app->getRequest()->getBodyParams(), '');

            if($model->save()) {
                return [
                    'success' => true,
                    'data'   => $model,
                ];
            } else {
                return [
                    'success' => false,
                    'errors' => $model->getErrors()
                ];
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}