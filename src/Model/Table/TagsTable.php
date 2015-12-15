<?php
namespace App\Model\Table;

use App\Model\Entity\Tag;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tags Model
 *
 */
class TagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tags');

        $this->addBehavior('Timestamp');

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
            ->add('tagID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tagID', 'create')
            ->notEmpty('tagID');

        $validator
            ->requirePresence('tagName', 'create')
            ->notEmpty('tagName');

        $validator
            ->add('articleID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('articleID', 'create')
            ->notEmpty('articleID');

        $validator
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->requirePresence('userID', 'create')
            ->notEmpty('userID');

        return $validator;
    }
}
