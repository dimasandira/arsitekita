<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Kota".
 *
 * @property int $KOTA_ID
 * @property string $NAMA_KOTA
 */
class Kota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAMA_KOTA'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'KOTA_ID' => 'Kota ID',
            'NAMA_KOTA' => 'Nama Kota',
        ];
    }
}
