<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province_th".
 *
 * @property integer $province_id
 * @property string $province_name
 * @property string $province_lat
 * @property string $province_lon
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province_th';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_name', 'province_lat', 'province_lon'], 'required'],
            [['province_name', 'province_lat', 'province_lon'], 'string', 'max' => 120]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'province_lat' => 'Province Lat',
            'province_lon' => 'Province Lon',
        ];
    }
}
