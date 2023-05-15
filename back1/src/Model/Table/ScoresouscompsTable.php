<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scoresouscomps Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\BelongsTo $Souscompetences
 *
 * @method \App\Model\Entity\Scoresouscomp newEmptyEntity()
 * @method \App\Model\Entity\Scoresouscomp newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Scoresouscomp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scoresouscomp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scoresouscomp findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Scoresouscomp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scoresouscomp[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scoresouscomp|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scoresouscomp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scoresouscomp[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scoresouscomp[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scoresouscomp[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Scoresouscomp[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ScoresouscompsTable extends Table
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

        $this->setTable('scoresouscomps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Souscompetences', [
            'foreignKey' => 'souscompetence_id',
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
            ->integer('souscompetence_id')
            ->notEmptyString('souscompetence_id');

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
        $rules->add($rules->existsIn('souscompetence_id', 'Souscompetences'), ['errorField' => 'souscompetence_id']);

        return $rules;
    }
}
