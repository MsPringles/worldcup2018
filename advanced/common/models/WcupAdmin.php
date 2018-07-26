<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wcup_admin".
 *
 * @property integer $admin_id
 * @property string $admin_password
 * @property string $admin_name
 * @property string $auth_key
 * @property string $admin_email
 */
class WcupAdmin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wcup_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'admin_password', 'admin_name', 'auth_key', 'admin_email'], 'required'],
            [['admin_id'], 'integer'],
            [['admin_password', 'auth_key'], 'string', 'max' => 255],
            [['admin_name'], 'string', 'max' => 5],
            [['admin_email'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'admin_id' => 'Admin ID',
            'admin_password' => 'Admin Password',
            'admin_name' => 'Admin Name',
            'auth_key' => 'Auth Key',
            'admin_email' => 'Admin Email',
        ];
    }
}
