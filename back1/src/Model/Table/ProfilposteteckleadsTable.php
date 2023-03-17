<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilposteteckleads Model
 *
 * @method \App\Model\Entity\Profilpostetecklead newEmptyEntity()
 * @method \App\Model\Entity\Profilpostetecklead newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostetecklead get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostetecklead|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostetecklead[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilposteteckleadsTable extends Table
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

        $this->setTable('profilposteteckleads');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('comptechdt')
            ->maxLength('comptechdt', 255)
            ->requirePresence('comptechdt', 'create')
            ->notEmptyString('comptechdt');

        $validator
            ->scalar('contenucomptechdt')
            ->maxLength('contenucomptechdt', 255)
            ->requirePresence('contenucomptechdt', 'create')
            ->notEmptyString('contenucomptechdt');

        $validator
            ->scalar('comporgandt')
            ->maxLength('comporgandt', 255)
            ->requirePresence('comporgandt', 'create')
            ->notEmptyString('comporgandt');

        $validator
            ->scalar('gestempsdt')
            ->maxLength('gestempsdt', 255)
            ->requirePresence('gestempsdt', 'create')
            ->notEmptyString('gestempsdt');

        $validator
            ->scalar('nvisegestempdt')
            ->maxLength('nvisegestempdt', 255)
            ->requirePresence('nvisegestempdt', 'create')
            ->notEmptyString('nvisegestempdt');

        $validator
            ->scalar('isuivigestempdt')
            ->maxLength('isuivigestempdt', 255)
            ->requirePresence('isuivigestempdt', 'create')
            ->notEmptyString('isuivigestempdt');

        $validator
            ->scalar('compcompordt')
            ->maxLength('compcompordt', 255)
            ->requirePresence('compcompordt', 'create')
            ->notEmptyString('compcompordt');

        $validator
            ->scalar('comminteradt')
            ->maxLength('comminteradt', 255)
            ->requirePresence('comminteradt', 'create')
            ->notEmptyString('comminteradt');

        $validator
            ->scalar('nvisecomminteradt')
            ->maxLength('nvisecomminteradt', 255)
            ->requirePresence('nvisecomminteradt', 'create')
            ->notEmptyString('nvisecomminteradt');

        $validator
            ->scalar('isuivicomminteradt')
            ->maxLength('isuivicomminteradt', 255)
            ->requirePresence('isuivicomminteradt', 'create')
            ->notEmptyString('isuivicomminteradt');

        $validator
            ->scalar('tracolldt')
            ->maxLength('tracolldt', 255)
            ->requirePresence('tracolldt', 'create')
            ->notEmptyString('tracolldt');

        $validator
            ->scalar('nvisetracolldt')
            ->maxLength('nvisetracolldt', 255)
            ->requirePresence('nvisetracolldt', 'create')
            ->notEmptyString('nvisetracolldt');

        $validator
            ->scalar('isuivitracolldt')
            ->maxLength('isuivitracolldt', 255)
            ->requirePresence('isuivitracolldt', 'create')
            ->notEmptyString('isuivitracolldt');

        $validator
            ->scalar('resprobdt')
            ->maxLength('resprobdt', 255)
            ->requirePresence('resprobdt', 'create')
            ->notEmptyString('resprobdt');

        $validator
            ->scalar('nviseresprobdt')
            ->maxLength('nviseresprobdt', 255)
            ->requirePresence('nviseresprobdt', 'create')
            ->notEmptyString('nviseresprobdt');

        $validator
            ->scalar('isuiviresprobdt')
            ->maxLength('isuiviresprobdt', 255)
            ->requirePresence('isuiviresprobdt', 'create')
            ->notEmptyString('isuiviresprobdt');

        $validator
            ->scalar('raisanaldt')
            ->maxLength('raisanaldt', 255)
            ->requirePresence('raisanaldt', 'create')
            ->notEmptyString('raisanaldt');

        $validator
            ->scalar('nviseraisanaldt')
            ->maxLength('nviseraisanaldt', 255)
            ->requirePresence('nviseraisanaldt', 'create')
            ->notEmptyString('nviseraisanaldt');

        $validator
            ->scalar('isuiviraisanaldt')
            ->maxLength('isuiviraisanaldt', 255)
            ->requirePresence('isuiviraisanaldt', 'create')
            ->notEmptyString('isuiviraisanaldt');

        $validator
            ->scalar('leadershipdt')
            ->maxLength('leadershipdt', 255)
            ->requirePresence('leadershipdt', 'create')
            ->notEmptyString('leadershipdt');

        $validator
            ->scalar('nviseleadershipdt')
            ->maxLength('nviseleadershipdt', 255)
            ->requirePresence('nviseleadershipdt', 'create')
            ->notEmptyString('nviseleadershipdt');

        $validator
            ->scalar('isuivileadershipdt')
            ->maxLength('isuivileadershipdt', 255)
            ->requirePresence('isuivileadershipdt', 'create')
            ->notEmptyString('isuivileadershipdt');

        $validator
            ->scalar('soudevdt')
            ->maxLength('soudevdt', 255)
            ->requirePresence('soudevdt', 'create')
            ->notEmptyString('soudevdt');

        $validator
            ->scalar('nvisesoudevdt')
            ->maxLength('nvisesoudevdt', 2555)
            ->requirePresence('nvisesoudevdt', 'create')
            ->notEmptyString('nvisesoudevdt');

        $validator
            ->scalar('isuivisoudevdt')
            ->maxLength('isuivisoudevdt', 255)
            ->requirePresence('isuivisoudevdt', 'create')
            ->notEmptyString('isuivisoudevdt');

        $validator
            ->scalar('droitdt')
            ->maxLength('droitdt', 255)
            ->requirePresence('droitdt', 'create')
            ->notEmptyString('droitdt');

        $validator
            ->scalar('contenudroitdt')
            ->maxLength('contenudroitdt', 255)
            ->requirePresence('contenudroitdt', 'create')
            ->notEmptyString('contenudroitdt');

        $validator
            ->scalar('devoirdt')
            ->maxLength('devoirdt', 255)
            ->requirePresence('devoirdt', 'create')
            ->notEmptyString('devoirdt');

        $validator
            ->scalar('contenudevoirdt')
            ->maxLength('contenudevoirdt', 255)
            ->requirePresence('contenudevoirdt', 'create')
            ->notEmptyString('contenudevoirdt');

        $validator
            ->scalar('validationdt')
            ->maxLength('validationdt', 255)
            ->requirePresence('validationdt', 'create')
            ->notEmptyString('validationdt');

        $validator
            ->scalar('contenuvaliddt')
            ->maxLength('contenuvaliddt', 255)
            ->requirePresence('contenuvaliddt', 'create')
            ->notEmptyString('contenuvaliddt');

        $validator
            ->scalar('fonctiondt')
            ->maxLength('fonctiondt', 255)
            ->requirePresence('fonctiondt', 'create')
            ->notEmptyString('fonctiondt');

        $validator
            ->scalar('nompredt')
            ->maxLength('nompredt', 255)
            ->requirePresence('nompredt', 'create')
            ->notEmptyString('nompredt');

        $validator
            ->scalar('fonctiondt1')
            ->maxLength('fonctiondt1', 255)
            ->requirePresence('fonctiondt1', 'create')
            ->notEmptyString('fonctiondt1');

        $validator
            ->scalar('nompredt1')
            ->maxLength('nompredt1', 255)
            ->requirePresence('nompredt1', 'create')
            ->notEmptyString('nompredt1');

        $validator
            ->scalar('fonctiondt2')
            ->maxLength('fonctiondt2', 255)
            ->requirePresence('fonctiondt2', 'create')
            ->notEmptyString('fonctiondt2');

        $validator
            ->scalar('nompredt2')
            ->maxLength('nompredt2', 255)
            ->requirePresence('nompredt2', 'create')
            ->notEmptyString('nompredt2');

        return $validator;
    }
}
