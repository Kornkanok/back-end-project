<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "van".
 *
 * @property integer $v_id
 * @property string $v_name
 */
class Van extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'van';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['v_name'], 'required'],
            [['v_name'], 'string', 'max' => 60]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'v_id' => 'V ID',
            'v_name' => 'V Name',
        ];
    }
}
