<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employes Model
 *
 * @property \App\Model\Table\DetailprofilpostesTable&\Cake\ORM\Association\BelongsTo $Detailprofilpostes
 * @property \App\Model\Table\InfoficheevaluationsTable&\Cake\ORM\Association\HasMany $Infoficheevaluations
 *
 * @method \App\Model\Entity\Employe newEmptyEntity()
 * @method \App\Model\Entity\Employe newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employe findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employe[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employe|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employe[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployesTable extends Table
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

        $this->setTable('employes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Detailprofilpostes', [
            'foreignKey' => 'detailprofilposte_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Infoficheevaluations', [
            'foreignKey' => 'employe_id',
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
            ->scalar('nomprenom')
            ->maxLength('nomprenom', 255)
            ->requirePresence('nomprenom', 'create')
            ->notEmptyString('nomprenom');

        $validator
            ->integer('detailprofilposte_id')
            ->notEmptyString('detailprofilposte_id');

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
        $rules->add($rules->existsIn('detailprofilposte_id', 'Detailprofilpostes'), ['errorField' => 'detailprofilposte_id']);

        return $rules;
    }
}
