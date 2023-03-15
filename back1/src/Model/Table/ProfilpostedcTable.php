<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilpostedc Model
 *
 * @method \App\Model\Entity\Profilpostedc newEmptyEntity()
 * @method \App\Model\Entity\Profilpostedc newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostedc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostedc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profilpostedc findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profilpostedc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostedc[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostedc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostedc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostedc[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostedc[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostedc[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostedc[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilpostedcTable extends Table
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

        $this->setTable('profilpostedc');
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
            ->scalar('comptechdc')
            ->maxLength('comptechdc', 255)
            ->requirePresence('comptechdc', 'create')
            ->notEmptyString('comptechdc');

        $validator
            ->scalar('contenucomptechdc')
            ->maxLength('contenucomptechdc', 255)
            ->requirePresence('contenucomptechdc', 'create')
            ->notEmptyString('contenucomptechdc');

        $validator
            ->scalar('comporgandc')
            ->maxLength('comporgandc', 255)
            ->requirePresence('comporgandc', 'create')
            ->notEmptyString('comporgandc');

        $validator
            ->scalar('gestempsdc')
            ->maxLength('gestempsdc', 255)
            ->requirePresence('gestempsdc', 'create')
            ->notEmptyString('gestempsdc');

        $validator
            ->scalar('nvisegestempdc')
            ->maxLength('nvisegestempdc', 255)
            ->requirePresence('nvisegestempdc', 'create')
            ->notEmptyString('nvisegestempdc');

        $validator
            ->scalar('isuivigestempdc')
            ->maxLength('isuivigestempdc', 255)
            ->requirePresence('isuivigestempdc', 'create')
            ->notEmptyString('isuivigestempdc');

        $validator
            ->scalar('compcompordc')
            ->maxLength('compcompordc', 255)
            ->requirePresence('compcompordc', 'create')
            ->notEmptyString('compcompordc');

        $validator
            ->scalar('autonomiedc')
            ->maxLength('autonomiedc', 255)
            ->requirePresence('autonomiedc', 'create')
            ->notEmptyString('autonomiedc');

        $validator
            ->scalar('comminteradc')
            ->maxLength('comminteradc', 255)
            ->requirePresence('comminteradc', 'create')
            ->notEmptyString('comminteradc');

        $validator
            ->scalar('nvisecomminteradc')
            ->maxLength('nvisecomminteradc', 255)
            ->requirePresence('nvisecomminteradc', 'create')
            ->notEmptyString('nvisecomminteradc');

        $validator
            ->scalar('isuivicomminteradc')
            ->maxLength('isuivicomminteradc', 255)
            ->requirePresence('isuivicomminteradc', 'create')
            ->notEmptyString('isuivicomminteradc');

        $validator
            ->scalar('tracolldc')
            ->maxLength('tracolldc', 255)
            ->requirePresence('tracolldc', 'create')
            ->notEmptyString('tracolldc');

        $validator
            ->scalar('nvisetracolldc')
            ->maxLength('nvisetracolldc', 255)
            ->requirePresence('nvisetracolldc', 'create')
            ->notEmptyString('nvisetracolldc');

        $validator
            ->scalar('isuivitracolldc')
            ->maxLength('isuivitracolldc', 255)
            ->requirePresence('isuivitracolldc', 'create')
            ->notEmptyString('isuivitracolldc');

        $validator
            ->scalar('resprobdc')
            ->maxLength('resprobdc', 255)
            ->requirePresence('resprobdc', 'create')
            ->notEmptyString('resprobdc');

        $validator
            ->scalar('nviseresprobdc')
            ->maxLength('nviseresprobdc', 255)
            ->requirePresence('nviseresprobdc', 'create')
            ->notEmptyString('nviseresprobdc');

        $validator
            ->scalar('isuiviresprobdc')
            ->maxLength('isuiviresprobdc', 255)
            ->requirePresence('isuiviresprobdc', 'create')
            ->notEmptyString('isuiviresprobdc');

        $validator
            ->scalar('servexcelldc')
            ->maxLength('servexcelldc', 255)
            ->requirePresence('servexcelldc', 'create')
            ->notEmptyString('servexcelldc');

        $validator
            ->scalar('nviseservexcelldc')
            ->maxLength('nviseservexcelldc', 255)
            ->requirePresence('nviseservexcelldc', 'create')
            ->notEmptyString('nviseservexcelldc');

        $validator
            ->scalar('isuiviservexcelldc')
            ->maxLength('isuiviservexcelldc', 255)
            ->requirePresence('isuiviservexcelldc', 'create')
            ->notEmptyString('isuiviservexcelldc');

        $validator
            ->scalar('raisconcepdc')
            ->maxLength('raisconcepdc', 255)
            ->requirePresence('raisconcepdc', 'create')
            ->notEmptyString('raisconcepdc');

        $validator
            ->scalar('nviseraisconcepdc')
            ->maxLength('nviseraisconcepdc', 255)
            ->requirePresence('nviseraisconcepdc', 'create')
            ->notEmptyString('nviseraisconcepdc');

        $validator
            ->scalar('isuiviraisconcepdc')
            ->maxLength('isuiviraisconcepdc', 255)
            ->requirePresence('isuiviraisconcepdc', 'create')
            ->notEmptyString('isuiviraisconcepdc');

        $validator
            ->scalar('droitdc')
            ->maxLength('droitdc', 255)
            ->requirePresence('droitdc', 'create')
            ->notEmptyString('droitdc');

        $validator
            ->scalar('contenudroitdc')
            ->maxLength('contenudroitdc', 255)
            ->requirePresence('contenudroitdc', 'create')
            ->notEmptyString('contenudroitdc');

        $validator
            ->scalar('devoirdc')
            ->maxLength('devoirdc', 255)
            ->requirePresence('devoirdc', 'create')
            ->notEmptyString('devoirdc');

        $validator
            ->scalar('contenudevoirdc')
            ->maxLength('contenudevoirdc', 255)
            ->requirePresence('contenudevoirdc', 'create')
            ->notEmptyString('contenudevoirdc');

        $validator
            ->scalar('validationdc')
            ->maxLength('validationdc', 255)
            ->requirePresence('validationdc', 'create')
            ->notEmptyString('validationdc');

        $validator
            ->scalar('contenuvaliddc')
            ->maxLength('contenuvaliddc', 255)
            ->requirePresence('contenuvaliddc', 'create')
            ->notEmptyString('contenuvaliddc');

        $validator
            ->scalar('fonctiondc')
            ->maxLength('fonctiondc', 255)
            ->requirePresence('fonctiondc', 'create')
            ->notEmptyString('fonctiondc');

        $validator
            ->scalar('nompredc')
            ->maxLength('nompredc', 255)
            ->requirePresence('nompredc', 'create')
            ->notEmptyString('nompredc');

        $validator
            ->scalar('fonctiondc1')
            ->maxLength('fonctiondc1', 255)
            ->requirePresence('fonctiondc1', 'create')
            ->notEmptyString('fonctiondc1');

        $validator
            ->scalar('nompredc1')
            ->maxLength('nompredc1', 255)
            ->requirePresence('nompredc1', 'create')
            ->notEmptyString('nompredc1');

        $validator
            ->scalar('fonctiondc2')
            ->maxLength('fonctiondc2', 255)
            ->requirePresence('fonctiondc2', 'create')
            ->notEmptyString('fonctiondc2');

        $validator
            ->scalar('nompredc2')
            ->maxLength('nompredc2', 255)
            ->requirePresence('nompredc2', 'create')
            ->notEmptyString('nompredc2');

        return $validator;
    }
}
