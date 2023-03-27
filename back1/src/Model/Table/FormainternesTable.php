<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formainternes Model
 *
 * @property \App\Model\Table\ThemeformationsTable&\Cake\ORM\Association\BelongsTo $Themeformations
 *
 * @method \App\Model\Entity\Formainterne newEmptyEntity()
 * @method \App\Model\Entity\Formainterne newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formainterne findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formainterne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formainterne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formainterne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formainterne[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormainternesTable extends Table
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

        $this->setTable('formainternes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Themeformations', [
            'foreignKey' => 'themeformation_id',
            'joinType' => 'INNER',
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
            ->scalar('tycomp')
            ->maxLength('tycomp', 255)
            ->requirePresence('tycomp', 'create')
            ->notEmptyString('tycomp');

        $validator
            ->integer('themeformation_id')
            ->notEmptyString('themeformation_id');

        $validator
            ->scalar('animateur')
            ->maxLength('animateur', 255)
            ->requirePresence('animateur', 'create')
            ->notEmptyString('animateur');

        $validator
            ->scalar('poste')
            ->maxLength('poste', 255)
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->time('hentrer')
            ->requirePresence('hentrer', 'create')
            ->notEmptyTime('hentrer');

        $validator
            ->time('hsortie')
            ->requirePresence('hsortie', 'create')
            ->notEmptyTime('hsortie');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('themeformation_id', 'Themeformations'), ['errorField' => 'themeformation_id']);

        return $rules;
    }
}
