<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointindicasous Model
 *
 * @property \App\Model\Table\IndicasoucompasTable&\Cake\ORM\Association\BelongsTo $Indicasoucompas
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\BelongsTo $Souscompetences
 * @property \App\Model\Table\CompetencesTable&\Cake\ORM\Association\BelongsTo $Competences
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 *
 * @method \App\Model\Entity\Pointindicasous newEmptyEntity()
 * @method \App\Model\Entity\Pointindicasous newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicasous[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicasous get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pointindicasous findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pointindicasous patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicasous[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicasous|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointindicasous saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointindicasous[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicasous[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicasous[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicasous[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PointindicasousTable extends Table
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

        $this->setTable('pointindicasous');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Indicasoucompas', [
            'foreignKey' => 'indicasoucompa_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Souscompetences', [
            'foreignKey' => 'souscompetence_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Competences', [
            'foreignKey' => 'competence_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
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
            ->integer('label')
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

        $validator
            ->integer('indicasoucompa_id')
            ->notEmptyString('indicasoucompa_id');

        $validator
            ->integer('souscompetence_id')
            ->notEmptyString('souscompetence_id');

        $validator
            ->integer('competence_id')
            ->notEmptyString('competence_id');

        $validator
            ->integer('employe_id')
            ->notEmptyString('employe_id');

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
        $rules->add($rules->existsIn('indicasoucompa_id', 'Indicasoucompas'), ['errorField' => 'indicasoucompa_id']);
        $rules->add($rules->existsIn('souscompetence_id', 'Souscompetences'), ['errorField' => 'souscompetence_id']);
        $rules->add($rules->existsIn('competence_id', 'Competences'), ['errorField' => 'competence_id']);
        $rules->add($rules->existsIn('employe_id', 'Employes'), ['errorField' => 'employe_id']);

        return $rules;
    }
}
