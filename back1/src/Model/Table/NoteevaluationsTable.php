<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noteevaluations Model
 *
 * @property \App\Model\Table\PointsTable&\Cake\ORM\Association\BelongsTo $Points
 * @property \App\Model\Table\FormcompetencesTable&\Cake\ORM\Association\BelongsTo $Formcompetences
 *
 * @method \App\Model\Entity\Noteevaluation newEmptyEntity()
 * @method \App\Model\Entity\Noteevaluation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Noteevaluation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Noteevaluation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Noteevaluation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Noteevaluation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Noteevaluation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Noteevaluation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noteevaluation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Noteevaluation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noteevaluation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noteevaluation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Noteevaluation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NoteevaluationsTable extends Table
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

        $this->setTable('noteevaluations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Points', [
            'foreignKey' => 'point_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Formcompetences', [
            'foreignKey' => 'formcompetence_id',
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
            ->integer('point_id')
            ->notEmptyString('point_id');

        $validator
            ->integer('formcompetence_id')
            ->notEmptyString('formcompetence_id');

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
        $rules->add($rules->existsIn('point_id', 'Points'), ['errorField' => 'point_id']);
        $rules->add($rules->existsIn('formcompetence_id', 'Formcompetences'), ['errorField' => 'formcompetence_id']);

        return $rules;
    }
}
