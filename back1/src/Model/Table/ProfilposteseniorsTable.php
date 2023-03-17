<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilposteseniors Model
 *
 * @method \App\Model\Entity\Profilpostesenior newEmptyEntity()
 * @method \App\Model\Entity\Profilpostesenior newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostesenior[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostesenior get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profilpostesenior findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profilpostesenior patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostesenior[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostesenior|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostesenior saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostesenior[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostesenior[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostesenior[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostesenior[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilposteseniorsTable extends Table
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

        $this->setTable('profilposteseniors');
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
            ->scalar('comptechds')
            ->maxLength('comptechds', 255)
            ->requirePresence('comptechds', 'create')
            ->notEmptyString('comptechds');

        $validator
            ->scalar('contenucomptechds')
            ->maxLength('contenucomptechds', 255)
            ->requirePresence('contenucomptechds', 'create')
            ->notEmptyString('contenucomptechds');

        $validator
            ->scalar('comporgands')
            ->maxLength('comporgands', 255)
            ->requirePresence('comporgands', 'create')
            ->notEmptyString('comporgands');

        $validator
            ->scalar('gestempsds')
            ->maxLength('gestempsds', 255)
            ->requirePresence('gestempsds', 'create')
            ->notEmptyString('gestempsds');

        $validator
            ->scalar('nvisegestempds')
            ->maxLength('nvisegestempds', 255)
            ->requirePresence('nvisegestempds', 'create')
            ->notEmptyString('nvisegestempds');

        $validator
            ->scalar('isuivigestempds')
            ->maxLength('isuivigestempds', 255)
            ->requirePresence('isuivigestempds', 'create')
            ->notEmptyString('isuivigestempds');

        $validator
            ->scalar('compcompords')
            ->maxLength('compcompords', 255)
            ->requirePresence('compcompords', 'create')
            ->notEmptyString('compcompords');

        $validator
            ->scalar('comminterads')
            ->maxLength('comminterads', 255)
            ->requirePresence('comminterads', 'create')
            ->notEmptyString('comminterads');

        $validator
            ->scalar('nvisecomminterads')
            ->maxLength('nvisecomminterads', 255)
            ->requirePresence('nvisecomminterads', 'create')
            ->notEmptyString('nvisecomminterads');

        $validator
            ->scalar('isuivicomminterads')
            ->maxLength('isuivicomminterads', 255)
            ->requirePresence('isuivicomminterads', 'create')
            ->notEmptyString('isuivicomminterads');

        $validator
            ->scalar('tracollds')
            ->maxLength('tracollds', 255)
            ->requirePresence('tracollds', 'create')
            ->notEmptyString('tracollds');

        $validator
            ->scalar('nvisetracollds')
            ->maxLength('nvisetracollds', 255)
            ->requirePresence('nvisetracollds', 'create')
            ->notEmptyString('nvisetracollds');

        $validator
            ->scalar('isuivitracollds')
            ->maxLength('isuivitracollds', 255)
            ->requirePresence('isuivitracollds', 'create')
            ->notEmptyString('isuivitracollds');

        $validator
            ->scalar('resprobds')
            ->maxLength('resprobds', 255)
            ->requirePresence('resprobds', 'create')
            ->notEmptyString('resprobds');

        $validator
            ->scalar('nviseresprobds')
            ->maxLength('nviseresprobds', 255)
            ->requirePresence('nviseresprobds', 'create')
            ->notEmptyString('nviseresprobds');

        $validator
            ->scalar('isuiviresprobds')
            ->maxLength('isuiviresprobds', 255)
            ->requirePresence('isuiviresprobds', 'create')
            ->notEmptyString('isuiviresprobds');

        $validator
            ->scalar('servexcellds')
            ->maxLength('servexcellds', 255)
            ->requirePresence('servexcellds', 'create')
            ->notEmptyString('servexcellds');

        $validator
            ->scalar('nviseservexcellds')
            ->maxLength('nviseservexcellds', 255)
            ->requirePresence('nviseservexcellds', 'create')
            ->notEmptyString('nviseservexcellds');

        $validator
            ->scalar('isuiviservexcellds')
            ->maxLength('isuiviservexcellds', 255)
            ->requirePresence('isuiviservexcellds', 'create')
            ->notEmptyString('isuiviservexcellds');

        $validator
            ->scalar('raisconcepds')
            ->maxLength('raisconcepds', 255)
            ->requirePresence('raisconcepds', 'create')
            ->notEmptyString('raisconcepds');

        $validator
            ->scalar('nviseraisconcepds')
            ->maxLength('nviseraisconcepds', 255)
            ->requirePresence('nviseraisconcepds', 'create')
            ->notEmptyString('nviseraisconcepds');

        $validator
            ->scalar('isuiviraisconcepds')
            ->maxLength('isuiviraisconcepds', 255)
            ->requirePresence('isuiviraisconcepds', 'create')
            ->notEmptyString('isuiviraisconcepds');

        $validator
            ->scalar('leadershipds')
            ->maxLength('leadershipds', 255)
            ->requirePresence('leadershipds', 'create')
            ->notEmptyString('leadershipds');

        $validator
            ->scalar('nviseleadershipds')
            ->maxLength('nviseleadershipds', 255)
            ->requirePresence('nviseleadershipds', 'create')
            ->notEmptyString('nviseleadershipds');

        $validator
            ->scalar('isuivileadershipds')
            ->maxLength('isuivileadershipds', 255)
            ->requirePresence('isuivileadershipds', 'create')
            ->notEmptyString('isuivileadershipds');

        $validator
            ->scalar('droitds')
            ->maxLength('droitds', 255)
            ->requirePresence('droitds', 'create')
            ->notEmptyString('droitds');

        $validator
            ->scalar('contenudroitds')
            ->maxLength('contenudroitds', 255)
            ->requirePresence('contenudroitds', 'create')
            ->notEmptyString('contenudroitds');

        $validator
            ->scalar('devoirds')
            ->maxLength('devoirds', 255)
            ->requirePresence('devoirds', 'create')
            ->notEmptyString('devoirds');

        $validator
            ->scalar('contenudevoirds')
            ->maxLength('contenudevoirds', 255)
            ->requirePresence('contenudevoirds', 'create')
            ->notEmptyString('contenudevoirds');

        $validator
            ->scalar('validationds')
            ->maxLength('validationds', 255)
            ->requirePresence('validationds', 'create')
            ->notEmptyString('validationds');

        $validator
            ->scalar('contenuvalidds')
            ->maxLength('contenuvalidds', 255)
            ->requirePresence('contenuvalidds', 'create')
            ->notEmptyString('contenuvalidds');

        $validator
            ->scalar('fonctionds')
            ->maxLength('fonctionds', 255)
            ->requirePresence('fonctionds', 'create')
            ->notEmptyString('fonctionds');

        $validator
            ->scalar('nompreds')
            ->maxLength('nompreds', 255)
            ->requirePresence('nompreds', 'create')
            ->notEmptyString('nompreds');

        $validator
            ->scalar('fonctionds1')
            ->maxLength('fonctionds1', 255)
            ->requirePresence('fonctionds1', 'create')
            ->notEmptyString('fonctionds1');

        $validator
            ->scalar('nompreds1')
            ->maxLength('nompreds1', 255)
            ->requirePresence('nompreds1', 'create')
            ->notEmptyString('nompreds1');

        $validator
            ->scalar('fonctionds2')
            ->maxLength('fonctionds2', 255)
            ->requirePresence('fonctionds2', 'create')
            ->notEmptyString('fonctionds2');

        $validator
            ->scalar('nompreds2')
            ->maxLength('nompreds2', 255)
            ->requirePresence('nompreds2', 'create')
            ->notEmptyString('nompreds2');

        return $validator;
    }
}
