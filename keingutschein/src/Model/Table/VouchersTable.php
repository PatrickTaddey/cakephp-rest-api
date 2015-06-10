<?php
namespace App\Model\Table;

use App\Model\Entity\Voucher;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vouchers Model
 *
 */
class VouchersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('vouchers');
        $this->displayField('name');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');
            
        $validator
            ->add('active', 'valid', ['rule' => 'numeric'])
            ->requirePresence('active', 'create')
            ->notEmpty('active');
            
        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');
            
        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');
            
        $validator
            ->requirePresence('css_icon_class', 'create')
            ->notEmpty('css_icon_class');
            
        $validator
            ->add('date_valid_until', 'valid', ['rule' => 'datetime'])
            ->requirePresence('date_valid_until', 'create')
            ->notEmpty('date_valid_until');
            
        $validator
            ->add('date_to_redeem', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_to_redeem');

        return $validator;
    }
}
