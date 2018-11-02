<?php
/**
 * Created by PhpStorm.
 * User: tanya
 * Date: 01.11.18
 * Time: 9:58
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "education".
 *
 * @property integer     $id
 * @property string      $profession
 * @property string      $facility
 * @property integer     $person_id
 */

class Education extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%education}}';
    }

    public function rules()
    {
        return [
            [['facility', 'profession'], 'required'],
            [['facility', 'profession'], 'string', 'max' => 256],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id'         => 'ID',
            'facility'   => 'Учебное заведение',
            'profession' => 'Специальность'
        ];
    }

}