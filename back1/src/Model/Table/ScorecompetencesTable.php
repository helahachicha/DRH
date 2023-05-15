<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scorecompetences Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\CompetencesTable&\Cake\ORM\Association\BelongsTo $Competences
 *
 * @method \App\Model\Entity\Scorecompetence newEmptyEntity()
 * @method \App\Model\Entity\Scorecompetence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Scorecompetence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scorecompetence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scorecompetence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Scorecompetence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scorecompetence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scorecompetence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scorecompetence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scorecompetence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scorecompetence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scorecompetence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scorecompetence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ScorecompetencesTable extends Table
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

        $this->setTable('scorecompetences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Competences', [
            'foreignKey' => 'competence_id',
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
            ->integer('employe_id')
            ->notEmptyString('employe_id');

        $validator
            ->integer('competence_id')
            ->notEmptyString('competence_id');

        $validator
            ->numeric('score')
            ->requirePresence('score', 'create')
            ->notEmptyString('score');

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
        $rules->add($rules->existsIn('competence_id', 'Competences'), ['errorField' => 'competence_id']);

        return $rules;
    }
}
