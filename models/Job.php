<?php
/**
 * Created by PhpStorm.
 * User: tanya
 * Date: 31.10.18
 * Time: 16:42
 */

namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "job".
 *
 * @property integer     $id
 * @property string      $name
 */

class Job extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%job}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 256],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'   => 'ID',
            'name' => 'Наименование должности',
        ];
    }

    public static function getJobIds()
    {
        $jobObjects = self::find()->all();
        return ArrayHelper::map($jobObjects, 'id', 'id');
    }
}