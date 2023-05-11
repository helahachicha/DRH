<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formcompetences Model
 *
 * @property \App\Model\Table\CompetencesTable&\Cake\ORM\Association\BelongsTo $Competences
 * @property \App\Model\Table\DetailprofilpostesTable&\Cake\ORM\Association\BelongsTo $Detailprofilpostes
 * @property \App\Model\Table\IndicateursuivisTable&\Cake\ORM\Association\HasMany $Indicateursuivis
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\HasMany $Souscompetences
 *
 * @method \App\Model\Entity\Formcompetence newEmptyEntity()
 * @method \App\Model\Entity\Formcompetence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formcompetence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formcompetence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formcompetence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formcompetence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formcompetence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formcompetence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formcompetence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formcompetence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormcompetencesTable extends Table
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

        $this->setTable('formcompetences');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Competences', [
            'foreignKey' => 'competence_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Detailprofilpostes', [
            'foreignKey' => 'detailprofilposte_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Indicateursuivis', [
            'foreignKey' => 'formcompetence_id',
        ]);
        $this->hasMany('Souscompetences', [
            'foreignKey' => 'formcompetence_id',
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
            ->integer('competence_id')
            ->notEmptyString('competence_id');

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
        $rules->add($rules->existsIn('competence_id', 'Competences'), ['errorField' => 'competence_id']);
        $rules->add($rules->existsIn('detailprofilposte_id', 'Detailprofilpostes'), ['errorField' => 'detailprofilposte_id']);

        return $rules;
    }
}
