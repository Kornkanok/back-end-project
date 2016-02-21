<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "descriptions".
 *
 * @property integer $Id
 * @property string $d_tion
 */
class Descriptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'descriptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'd_tion'], 'required'],
            [['Id'], 'integer'],
            [['d_tion'], 'string', 'max' => 500],
            [['Id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'd_tion' => 'D Tion',
        ];
    }
}
