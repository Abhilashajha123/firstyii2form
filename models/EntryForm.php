<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            [['email','phone'], 'required'],
            ['email', 'email'],
            ['name','required','message'=>'User name must be filled'],
            [['phone'],'number','min'=>3],
        ];
    }
}