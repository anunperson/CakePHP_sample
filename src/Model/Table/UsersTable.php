<?php
namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('name')
            ->notEmpty('name', 'このフィールドは入力必須です')
            ->add('name', [
                'length' => [
                    'rule' => ['lengthBetween', 2, 30],
                    'message' => '名前は2文字以上、30文字までです',
                ]])
            ->allowEmptyDateTime('data1')
            ->add('data1', [
                'length' => [
                    'rule' => ['maxLength', 30],
                    'message' => 'data1は30文字までです',
                ]])
           ->allowEmptyDateTime('data2')
            ->add('data2', [
                'length' => [
                    'rule' => ['maxLength', 30],
                    'message' => 'data2は30文字までです',
                ]]);
        return $validator;
    }
    
    
}

