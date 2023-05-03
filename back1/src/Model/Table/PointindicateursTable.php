<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pointindicateurs Model
 *
 * @property \App\Model\Table\IndicateursuivisTable&\Cake\ORM\Association\BelongsTo $Indicateursuivis
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 *
 * @method \App\Model\Entity\Pointindicateur newEmptyEntity()
 * @method \App\Model\Entity\Pointindicateur newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pointindicateur findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pointindicateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicateur[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pointindicateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointindicateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pointindicateur[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicateur[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicateur[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pointindicateur[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PointindicateursTable extends Table
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

        $this->setTable('pointindicateurs');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Indicateursuivis', [
            'foreignKey' => 'indicateursuivi_id',
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
            ->integer('indicateursuivi_id')
            ->notEmptyString('indicateursuivi_id');

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
        $rules->add($rules->existsIn('indicateursuivi_id', 'Indicateursuivis'), ['errorField' => 'indicateursuivi_id']);
        $rules->add($rules->existsIn('employe_id', 'Employes'), ['errorField' => 'employe_id']);

        return $rules;
    }
}
