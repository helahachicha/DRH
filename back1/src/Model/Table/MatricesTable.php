<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matrices Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\MatricecompetencesTable&\Cake\ORM\Association\BelongsTo $Matricecompetences
 *
 * @method \App\Model\Entity\Matrix newEmptyEntity()
 * @method \App\Model\Entity\Matrix newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Matrix[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matrix get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matrix findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Matrix patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matrix[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matrix|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matrix saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matrix[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatricesTable extends Table
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

        $this->setTable('matrices');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Matricecompetences', [
            'foreignKey' => 'matricecompetence_id',
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
            ->scalar('note')
            ->maxLength('note', 255)
            ->requirePresence('note', 'create')
            ->notEmptyString('note');

        $validator
            ->integer('employe_id')
            ->notEmptyString('employe_id');

        $validator
            ->integer('matricecompetence_id')
            ->notEmptyString('matricecompetence_id');

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
        $rules->add($rules->existsIn('employe_id', 'Employes'), ['errorField' => 'employe_id']);
        $rules->add($rules->existsIn('matricecompetence_id', 'Matricecompetences'), ['errorField' => 'matricecompetence_id']);

        return $rules;
    }
}
