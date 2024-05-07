<?php

namespace app\models;

use Yii;
use yii\base\Model;

class TestModel extends Model
{
    public const SCENARIO_TEST = 'test';

    public $name;
    public $email;
    public $about;
    public $photo;


    public function scenarios()
    {
        $scenario = parent::scenarios();
        $scenario[self::SCENARIO_TEST] = ['name', 'email', 'about', 'photo'];
        return $scenario;
    }

    // public function attributes()
    // {
    //     return [
    //       'name',
    //       'email',
    //       'about',
    //       'photo',
    //     ];
    // }

    public function rules()
    {
        return [
          [['name', 'email', 'about'], 'required' , 'on' => self::SCENARIO_TEST],
          ['email', 'email'],
        ];

    }

    public function testFunctionFromModel()
    {
        return "Test testFunctionFromModel";
    }

}
