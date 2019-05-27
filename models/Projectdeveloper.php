<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projectdeveloper".
 *
 * @property int $DEVELOPER_ID
 * @property int $USER_ID
 * @property int $ID_FILE
 * @property double $RATING_DEVELOPER
 *
 * @property Projectapplicants[] $projectapplicants
 * @property File $fILE
 * @property User $uSER
 * @property ProjectsOngoing[] $projectsOngoings
 */
class Projectdeveloper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projectdeveloper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['USER_ID', 'ID_FILE'], 'integer'],
            [['RATING_DEVELOPER'], 'number'],
            [['ID_FILE'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['ID_FILE' => 'ID_FILE']],
            [['USER_ID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['USER_ID' => 'USER_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'DEVELOPER_ID' => 'Developer ID',
            'USER_ID' => 'User ID',
            'ID_FILE' => 'Id File',
            'RATING_DEVELOPER' => 'Rating Developer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectapplicants()
    {
        return $this->hasMany(Projectapplicants::className(), ['DEVELOPER_ID' => 'DEVELOPER_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFILE()
    {
        return $this->hasOne(File::className(), ['ID_FILE' => 'ID_FILE']);
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
    public function getProjectsOngoings()
    {
        return $this->hasMany(ProjectsOngoing::className(), ['DEVELOPER_ID' => 'DEVELOPER_ID']);
    }
}
