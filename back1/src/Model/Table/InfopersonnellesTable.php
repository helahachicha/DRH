<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infopersonnelles Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Infopersonnelle newEmptyEntity()
 * @method \App\Model\Entity\Infopersonnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infopersonnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infopersonnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infopersonnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infopersonnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infopersonnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infopersonnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infopersonnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infopersonnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infopersonnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infopersonnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infopersonnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfopersonnellesTable extends Table
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

        $this->setTable('infopersonnelles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Infoprofessionnelles', [
            'foreignKey' => 'infoprofessionnelle_id',
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
            ->date('daten')
            ->requirePresence('daten', 'create')
            ->notEmptyDate('daten');

        $validator
            ->scalar('lieu')
            ->maxLength('lieu', 255)
            ->requirePresence('lieu', 'create')
            ->notEmptyString('lieu');

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
            ->scalar('delivreecin')
            ->maxLength('delivreecin', 255)
            ->requirePresence('delivreecin', 'create')
            ->notEmptyString('delivreecin');

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
            ->integer('heure')
            ->requirePresence('heure', 'create')
            ->notEmptyString('heure');

        $validator
            ->integer('minute')
            ->requirePresence('minute', 'create')
            ->notEmptyString('minute');

        $validator
            ->scalar('situationfamiliale')
            ->maxLength('situationfamiliale', 255)
            ->requirePresence('situationfamiliale', 'create')
            ->notEmptyString('situationfamiliale');

        $validator
            ->date('datemariedivorce')
            ->requirePresence('datemariedivorce', 'create')
            ->notEmptyDate('datemariedivorce');

        $validator
            ->integer('infoprofessionnelle_id')
            ->notEmptyString('infoprofessionnelle_id');

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
        $rules->add($rules->existsIn('infoprofessionnelle_id', 'Infoprofessionnelles'), ['errorField' => 'infoprofessionnelle_id']);

        return $rules;
    }
}
