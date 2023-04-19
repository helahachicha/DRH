<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Performances Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Performance newEmptyEntity()
 * @method \App\Model\Entity\Performance newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Performance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Performance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Performance findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Performance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Performance[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Performance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Performance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Performance[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Performance[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Performance[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Performance[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PerformancesTable extends Table
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

        $this->setTable('performances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Informationprofessionnelles', [
            'foreignKey' => 'informationprofessionnelle_id',
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
            ->scalar('pointsforce')
            ->requirePresence('pointsforce', 'create')
            ->notEmptyString('pointsforce');

        $validator
            ->scalar('pointsameliore')
            ->requirePresence('pointsameliore', 'create')
            ->notEmptyString('pointsameliore');

        $validator
            ->integer('informationprofessionnelle_id')
            ->notEmptyString('informationprofessionnelle_id');

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
        $rules->add($rules->existsIn('informationprofessionnelle_id', 'Informationprofessionnelles'), ['errorField' => 'informationprofessionnelle_id']);

        return $rules;
    }
}
