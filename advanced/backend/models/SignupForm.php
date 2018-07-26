<?php
/**
*Team: XKAY
*coding by liuying 1613754
*/
namespace backend\models;

use yii\base\Model;
use backend\models\WcupAdmin;

/**
 * Signup form
 */
class SignupForm extends Model
{public $admin_id;
    public $admin_name;
    public $admin_email;
    public $admin_password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['admin_name', 'trim'],
            ['admin_name', 'required'],
            
            ['admin_name', 'string', 'min' => 2, 'max' => 255],
            ['admin_id', 'trim'],
            ['admin_id', 'required'],
            ['admin_id', 'unique', 'targetClass' => 'backend\models\WcupAdmin', 'message' => 'This username has already been taken.'],
            ['admin_id', 'string', 'min' => 2, 'max' => 255],

            ['admin_email', 'trim'],
            ['admin_email', 'required'],
            ['admin_email', 'email'],
            ['admin_email', 'string', 'max' => 255],
            ['admin_email', 'unique', 'targetClass' => 'backend\models\WcupAdmin', 'message' => 'This email address has already been taken.'],

            ['admin_password', 'required'],
            ['admin_password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $admin = new WcupAdmin();
        $admin->admin_id=$this->admin_id;
        $admin->admin_name = $this->admin_name;
        $admin->admin_email = $this->admin_email;
        $admin->setPassword($this->admin_password);
        //$user->userpassword=$this->userpassword;
       $admin->generateAuthKey();
        
        return $admin->save() ? $admin : null;
    }
}
