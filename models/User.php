<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $USER_ID
 * @property int $KOTA_ID
 * @property string $NAMA_USER
 * @property string $NO_KTP
 * @property string $NO_HP
 * @property string $EMAIL
 * @property string $PASSWORD
 *
 * @property Projectdeveloper[] $projectdevelopers
 * @property Projectowner[] $projectowners
 * @property Kota $kOTA
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['KOTA_ID'], 'integer'],
            [['NAMA_USER', 'NO_HP'], 'string', 'max' => 128],
            [['NO_KTP', 'EMAIL', 'PASSWORD'], 'string', 'max' => 256],
            [['KOTA_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Kota::className(), 'targetAttribute' => ['KOTA_ID' => 'KOTA_ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'USER_ID' => 'User ID',
            'KOTA_ID' => 'Kota ID',
            'NAMA_USER' => 'Nama User',
            'NO_KTP' => 'No Ktp',
            'NO_HP' => 'No Hp',
            'EMAIL' => 'Email',
            'PASSWORD' => 'Password',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectdevelopers()
    {
        return $this->hasMany(Projectdeveloper::className(), ['USER_ID' => 'USER_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectowners()
    {
        return $this->hasMany(Projectowner::className(), ['USER_ID' => 'USER_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKOTA()
    {
        return $this->hasOne(Kota::className(), ['KOTA_ID' => 'KOTA_ID']);
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['EMAIL' => $email]);
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->PASSWORD === sha1($password);
    }
    
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}
