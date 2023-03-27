<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Themeformations Model
 *
 * @method \App\Model\Entity\Themeformation newEmptyEntity()
 * @method \App\Model\Entity\Themeformation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Themeformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Themeformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Themeformation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Themeformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Themeformation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Themeformation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Themeformation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Themeformation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Themeformation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Themeformation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Themeformation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ThemeformationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('themeformations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Formaexternes', [
            'foreignKey' => 'themeformation_id',
        ]);
        $this->hasMany('Formainternes', [
            'foreignKey' => 'themeformation_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('label')
            ->maxLength('label', 255)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        return $validator;
    }
}
