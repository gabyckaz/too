<?php

namespace app\models;

use yii\base\Model;
use app\models\UserForm;

class UserForm extends Model
{
	public $name;
	public $email;

	public function rules()
	{
		return [
		         [['name','email'],'required'],//nombre y correo son los requeridos
		         ['email','email']
		        ];
	}
}