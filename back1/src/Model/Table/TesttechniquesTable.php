<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testtechniques Model
 *
 * @property \App\Model\Table\DepartementsTable&\Cake\ORM\Association\BelongsTo $Departements
 * @property \App\Model\Table\PostesTable&\Cake\ORM\Association\BelongsTo $Postes
 * @property \App\Model\Table\ComptechniquesTable&\Cake\ORM\Association\HasMany $Comptechniques
 *
 * @method \App\Model\Entity\Testtechnique newEmptyEntity()
 * @method \App\Model\Entity\Testtechnique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Testtechnique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testtechnique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testtechnique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Testtechnique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testtechnique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testtechnique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testtechnique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Testtechnique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TesttechniquesTable extends Table
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

        $this->setTable('testtechniques');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departements', [
            'foreignKey' => 'departement_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Postes', [
            'foreignKey' => 'poste_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Comptechniques', [
            'foreignKey' => 'testtechnique_id',
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
            ->scalar('duree')
            ->maxLength('duree', 255)
            ->requirePresence('duree', 'create')
            ->notEmptyString('duree');

        $validator
            ->integer('departement_id')
            ->notEmptyString('departement_id');

        $validator
            ->integer('poste_id')
            ->notEmptyString('poste_id');

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
        $rules->add($rules->existsIn('departement_id', 'Departements'), ['errorField' => 'departement_id']);
        $rules->add($rules->existsIn('poste_id', 'Postes'), ['errorField' => 'poste_id']);

        return $rules;
    }
}
