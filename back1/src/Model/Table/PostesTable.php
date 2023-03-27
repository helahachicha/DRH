<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Postes Model
 *
 * @property \App\Model\Table\DepartementsTable&\Cake\ORM\Association\BelongsTo $Departements
 * @property \App\Model\Table\ProfilpostesTable&\Cake\ORM\Association\HasMany $Profilpostes
 * @property \App\Model\Table\TesttechniquesTable&\Cake\ORM\Association\HasMany $Testtechniques
 *
 * @method \App\Model\Entity\Poste newEmptyEntity()
 * @method \App\Model\Entity\Poste newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Poste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Poste get($primaryKey, $options = [])
 * @method \App\Model\Entity\Poste findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Poste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Poste[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Poste|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poste saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poste[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostesTable extends Table
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

        $this->setTable('postes');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departements', [
            'foreignKey' => 'departement_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Profilpostes', [
            'foreignKey' => 'poste_id',
        ]);
        $this->hasMany('Testtechniques', [
            'foreignKey' => 'poste_id',
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

        $validator
            ->integer('departement_id')
            ->notEmptyString('departement_id');

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

        return $rules;
    }
}
