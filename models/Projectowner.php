<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projectowner".
 *
 * @property int $OWNER_ID
 * @property int $USER_ID
 *
 * @property User $uSER
 * @property Projects[] $projects
 * @property Testimoni[] $testimonis
 */
class Projectowner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projectowner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USER_ID'], 'integer'],
            [['USER_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['USER_ID' => 'USER_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'OWNER_ID' => 'Owner ID',
            'USER_ID' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUSER()
    {
        return $this->hasOne(User::className(), ['USER_ID' => 'USER_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['OWNER_ID' => 'OWNER_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestimonis()
    {
        return $this->hasMany(Testimoni::className(), ['OWNER_ID' => 'OWNER_ID']);
    }
}
