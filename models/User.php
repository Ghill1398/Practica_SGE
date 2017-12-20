<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $idUser
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $enable
 * @property integer $role
 * @property string $apellido
 * @property string $nombre
 * @property string $CI
 * @property string $telefono
 * @property string $email2
 * @property double $salario
 * @property string $fechaRegistro
 * @property string $fechaUltimoAcceso
 * @property string $fechaAcceso
 * @property integer $fk_idUser
 * @property integer $fk_idSucursal
 *
 * @property Movimientocaja[] $movimientocajas
 * @property Movimientostock[] $movimientostocks
 * @property Ordenctp[] $ordenctps
 * @property Ordenctp[] $ordenctps0
 * @property Ordenctp[] $ordenctps1
 * @property Recibo[] $recibos
 * @property Sucursal $fkIdSucursal
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['username', 'password', 'auth_key', 'password_hash', 'created_at', 'updated_at', 'enable', 'role', 'apellido', 'CI', 'telefono', 'fechaRegistro', 'fechaAcceso'], 'required'],
            [['status', 'created_at', 'updated_at', 'enable', 'role', 'fk_idUser', 'fk_idSucursal'], 'integer'],
            [['salario'], 'number'],
            [['fechaRegistro', 'fechaUltimoAcceso', 'fechaAcceso'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 150],
            [['auth_key'], 'string', 'max' => 32],
            [['apellido', 'nombre'], 'string', 'max' => 30],
            [['CI'], 'string', 'max' => 10],
            [['telefono'], 'string', 'max' => 15],
            [['email2'], 'string', 'max' => 50],
            [['fk_idSucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['fk_idSucursal' => 'idSucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'enable' => 'Enable',
            'role' => 'Role',
            'apellido' => 'Apellido',
            'nombre' => 'Nombre',
            'CI' => 'Ci',
            'telefono' => 'Telefono',
            'email2' => 'Email2',
            'salario' => 'Salario',
            'fechaRegistro' => 'Fecha Registro',
            'fechaUltimoAcceso' => 'Fecha Ultimo Acceso',
            'fechaAcceso' => 'Fecha Acceso',
            'fk_idUser' => 'Fk Id User',
            'fk_idSucursal' => 'Fk Id Sucursal',
        ];
    }
    
     /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['idUser' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
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

    public function getPosts(){
        return $this->hasMany(Post::className(), ['idUser'=>'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientocajas()
    {
        return $this->hasMany(Movimientocaja::className(), ['fk_idUser' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientostocks()
    {
        return $this->hasMany(Movimientostock::className(), ['fk_idUser' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenctps()
    {
        return $this->hasMany(Ordenctp::className(), ['fk_idUserD' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenctps0()
    {
        return $this->hasMany(Ordenctp::className(), ['fk_idUserV' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenctps1()
    {
        return $this->hasMany(Ordenctp::className(), ['fk_idUserD2' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecibos()
    {
        return $this->hasMany(Recibo::className(), ['fk_idUser' => 'idUser']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkIdSucursal()
    {
        return $this->hasOne(Sucursal::className(), ['idSucursal' => 'fk_idSucursal']);
    }
}
