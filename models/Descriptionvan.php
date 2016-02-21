<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "descriptionvan".
 *
 * @property string $v_tion
 * @property integer $Id
 */
class Descriptionvan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'descriptionvan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['v_tion', 'Id'], 'required'],
            [['Id'], 'integer'],
            [['v_tion'], 'string', 'max' => 500],
            [['Id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'v_tion' => 'V Tion',
            'Id' => 'ID',
        ];
    }
}
