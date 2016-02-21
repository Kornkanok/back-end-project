<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bus".
 *
 * @property integer $b_id
 * @property string $b_name
 */
class Bus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'b_id' => 'B ID',
            'b_name' => 'B Name',
        ];
    }
}
