<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Informationpersonnelles Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Informationpersonnelle newEmptyEntity()
 * @method \App\Model\Entity\Informationpersonnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Informationpersonnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Informationpersonnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationpersonnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InformationpersonnellesTable extends Table
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

        $this->setTable('informationpersonnelles');
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
            ->date('datenaissance')
            ->requirePresence('datenaissance', 'create')
            ->notEmptyDate('datenaissance');

        $validator
            ->scalar('lieunaissance')
            ->maxLength('lieunaissance', 255)
            ->requirePresence('lieunaissance', 'create')
            ->notEmptyString('lieunaissance');

        $validator
            ->scalar('nationalite')
            ->maxLength('nationalite', 255)
            ->requirePresence('nationalite', 'create')
            ->notEmptyString('nationalite');

        $validator
            ->integer('ncin')
            ->requirePresence('ncin', 'create')
            ->notEmptyString('ncin');

        $validator
            ->scalar('lieucin')
            ->maxLength('lieucin', 255)
            ->requirePresence('lieucin', 'create')
            ->notEmptyString('lieucin');

        $validator
            ->date('datecin')
            ->requirePresence('datecin', 'create')
            ->notEmptyDate('datecin');

        $validator
            ->scalar('permis')
            ->maxLength('permis', 255)
            ->requirePresence('permis', 'create')
            ->notEmptyString('permis');

        $validator
            ->date('datepermis')
            ->requirePresence('datepermis', 'create')
            ->notEmptyDate('datepermis');

        $validator
            ->scalar('logement')
            ->maxLength('logement', 255)
            ->requirePresence('logement', 'create')
            ->notEmptyString('logement');

        $validator
            ->scalar('moyentransport')
            ->maxLength('moyentransport', 255)
            ->requirePresence('moyentransport', 'create')
            ->notEmptyString('moyentransport');

        $validator
            ->integer('minutetrajet')
            ->requirePresence('minutetrajet', 'create')
            ->notEmptyString('minutetrajet');

        $validator
            ->integer('heuretrajet')
            ->requirePresence('heuretrajet', 'create')
            ->notEmptyString('heuretrajet');

        $validator
            ->scalar('situationfamiliale')
            ->maxLength('situationfamiliale', 255)
            ->requirePresence('situationfamiliale', 'create')
            ->notEmptyString('situationfamiliale');

        $validator
            ->date('datesituation')
            ->requirePresence('datesituation', 'create')
            ->notEmptyDate('datesituation');

        $validator
            ->scalar('critereenfance')
            ->maxLength('critereenfance', 255)
            ->requirePresence('critereenfance', 'create')
            ->notEmptyString('critereenfance');

        $validator
            ->scalar('beaumoment')
            ->maxLength('beaumoment', 255)
            ->requirePresence('beaumoment', 'create')
            ->notEmptyString('beaumoment');

        $validator
            ->scalar('mauvaismoment')
            ->maxLength('mauvaismoment', 255)
            ->requirePresence('mauvaismoment', 'create')
            ->notEmptyString('mauvaismoment');

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
