<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property integer $station_id
 * @property string $station_name
 * @property string $station_lat
 * @property string $station_lon
 * @property integer $station_zoom
 * @property string $station_type
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['station_name', 'station_lat', 'station_lon', 'station_zoom', 'station_type'], 'required'],
            [['station_zoom'], 'integer'],
            [['station_name', 'station_lat', 'station_lon', 'station_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'station_id' => 'Station ID',
            'station_name' => 'Station Name',
            'station_lat' => 'Station Lat',
            'station_lon' => 'Station Lon',
            'station_zoom' => 'Station Zoom',
            'station_type' => 'Station Type',
        ];
    }
}
