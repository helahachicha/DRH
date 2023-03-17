<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ficherenseignements Model
 *
 * @method \App\Model\Entity\Ficherenseignement newEmptyEntity()
 * @method \App\Model\Entity\Ficherenseignement newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Ficherenseignement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ficherenseignement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ficherenseignement findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Ficherenseignement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ficherenseignement[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ficherenseignement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ficherenseignement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ficherenseignement[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficherenseignement[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficherenseignement[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Ficherenseignement[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FicherenseignementsTable extends Table
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

        $this->setTable('ficherenseignements');
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
            ->date('datefr')
            ->requirePresence('datefr', 'create')
            ->notEmptyDate('datefr');

        $validator
            ->integer('npagefr')
            ->requirePresence('npagefr', 'create')
            ->notEmptyString('npagefr');

        $validator
            ->scalar('nomprenomfr')
            ->maxLength('nomprenomfr', 255)
            ->requirePresence('nomprenomfr', 'create')
            ->notEmptyString('nomprenomfr');

        $validator
            ->scalar('adressefr')
            ->maxLength('adressefr', 255)
            ->requirePresence('adressefr', 'create')
            ->notEmptyString('adressefr');

        $validator
            ->integer('telprofefr')
            ->requirePresence('telprofefr', 'create')
            ->notEmptyString('telprofefr');

        $validator
            ->integer('telpersofr')
            ->requirePresence('telpersofr', 'create')
            ->notEmptyString('telpersofr');

        $validator
            ->integer('cantactcasurgfr')
            ->requirePresence('cantactcasurgfr', 'create')
            ->notEmptyString('cantactcasurgfr');

        $validator
            ->scalar('mailprofefr')
            ->maxLength('mailprofefr', 255)
            ->requirePresence('mailprofefr', 'create')
            ->notEmptyString('mailprofefr');

        $validator
            ->scalar('mailpersfr')
            ->maxLength('mailpersfr', 255)
            ->requirePresence('mailpersfr', 'create')
            ->notEmptyString('mailpersfr');

        $validator
            ->scalar('servicetrafr')
            ->maxLength('servicetrafr', 255)
            ->requirePresence('servicetrafr', 'create')
            ->notEmptyString('servicetrafr');

        $validator
            ->scalar('postefr')
            ->maxLength('postefr', 255)
            ->requirePresence('postefr', 'create')
            ->notEmptyString('postefr');

        $validator
            ->date('datenaifr')
            ->requirePresence('datenaifr', 'create')
            ->notEmptyDate('datenaifr');

        $validator
            ->scalar('lieufr')
            ->maxLength('lieufr', 255)
            ->requirePresence('lieufr', 'create')
            ->notEmptyString('lieufr');

        $validator
            ->scalar('nationalitefr')
            ->maxLength('nationalitefr', 255)
            ->requirePresence('nationalitefr', 'create')
            ->notEmptyString('nationalitefr');

        $validator
            ->integer('ncinfr')
            ->requirePresence('ncinfr', 'create')
            ->notEmptyString('ncinfr');

        $validator
            ->scalar('ncindelivreefr')
            ->maxLength('ncindelivreefr', 255)
            ->requirePresence('ncindelivreefr', 'create')
            ->notEmptyString('ncindelivreefr');

        $validator
            ->date('ncinlefr')
            ->requirePresence('ncinlefr', 'create')
            ->notEmptyDate('ncinlefr');

        $validator
            ->scalar('ouipermisfr')
            ->maxLength('ouipermisfr', 255)
            ->requirePresence('ouipermisfr', 'create')
            ->notEmptyString('ouipermisfr');

        $validator
            ->integer('tempsdotramfr')
            ->requirePresence('tempsdotramfr', 'create')
            ->notEmptyString('tempsdotramfr');

        $validator
            ->integer('tempsdotrahfr')
            ->requirePresence('tempsdotrahfr', 'create')
            ->notEmptyString('tempsdotrahfr');

        $validator
            ->scalar('ouimdquandfr')
            ->maxLength('ouimdquandfr', 255)
            ->requirePresence('ouimdquandfr', 'create')
            ->notEmptyString('ouimdquandfr');

        $validator
            ->scalar('ouisallesportfr')
            ->maxLength('ouisallesportfr', 255)
            ->requirePresence('ouisallesportfr', 'create')
            ->notEmptyString('ouisallesportfr');

        $validator
            ->scalar('critereenfancefr')
            ->maxLength('critereenfancefr', 255)
            ->requirePresence('critereenfancefr', 'create')
            ->notEmptyString('critereenfancefr');

        $validator
            ->scalar('beaumomentfr')
            ->maxLength('beaumomentfr', 255)
            ->requirePresence('beaumomentfr', 'create')
            ->notEmptyString('beaumomentfr');

        $validator
            ->scalar('mauvaismometfr')
            ->maxLength('mauvaismometfr', 255)
            ->requirePresence('mauvaismometfr', 'create')
            ->notEmptyString('mauvaismometfr');

        $validator
            ->scalar('pointforcefr')
            ->maxLength('pointforcefr', 255)
            ->requirePresence('pointforcefr', 'create')
            ->notEmptyString('pointforcefr');

        $validator
            ->scalar('pointameliorefr')
            ->maxLength('pointameliorefr', 255)
            ->requirePresence('pointameliorefr', 'create')
            ->notEmptyString('pointameliorefr');

        $validator
            ->scalar('npepouxfr')
            ->maxLength('npepouxfr', 255)
            ->requirePresence('npepouxfr', 'create')
            ->notEmptyString('npepouxfr');

        $validator
            ->date('datnaiepfr')
            ->requirePresence('datnaiepfr', 'create')
            ->notEmptyDate('datnaiepfr');

        $validator
            ->scalar('niveauetudepfr')
            ->maxLength('niveauetudepfr', 255)
            ->requirePresence('niveauetudepfr', 'create')
            ->notEmptyString('niveauetudepfr');

        $validator
            ->scalar('fonctionepfr')
            ->maxLength('fonctionepfr', 255)
            ->requirePresence('fonctionepfr', 'create')
            ->notEmptyString('fonctionepfr');

        $validator
            ->numeric('salaireepfr')
            ->requirePresence('salaireepfr', 'create')
            ->notEmptyString('salaireepfr');

        $validator
            ->scalar('etatepouxfr')
            ->maxLength('etatepouxfr', 255)
            ->requirePresence('etatepouxfr', 'create')
            ->notEmptyString('etatepouxfr');

        $validator
            ->scalar('specialitefr1')
            ->maxLength('specialitefr1', 255)
            ->requirePresence('specialitefr1', 'create')
            ->notEmptyString('specialitefr1');

        $validator
            ->scalar('specialitefr2')
            ->maxLength('specialitefr2', 255)
            ->requirePresence('specialitefr2', 'create')
            ->notEmptyString('specialitefr2');

        $validator
            ->scalar('specialitefr3')
            ->maxLength('specialitefr3', 255)
            ->requirePresence('specialitefr3', 'create')
            ->notEmptyString('specialitefr3');

        $validator
            ->scalar('specialitefr4')
            ->maxLength('specialitefr4', 255)
            ->requirePresence('specialitefr4', 'create')
            ->notEmptyString('specialitefr4');

        $validator
            ->scalar('anneefr1')
            ->requirePresence('anneefr1', 'create')
            ->notEmptyString('anneefr1');

        $validator
            ->scalar('anneefr2')
            ->requirePresence('anneefr2', 'create')
            ->notEmptyString('anneefr2');

        $validator
            ->scalar('anneefr3')
            ->requirePresence('anneefr3', 'create')
            ->notEmptyString('anneefr3');

        $validator
            ->scalar('anneefr4')
            ->requirePresence('anneefr4', 'create')
            ->notEmptyString('anneefr4');

        $validator
            ->scalar('etablissfr1')
            ->maxLength('etablissfr1', 255)
            ->requirePresence('etablissfr1', 'create')
            ->notEmptyString('etablissfr1');

        $validator
            ->scalar('etablissfr2')
            ->maxLength('etablissfr2', 255)
            ->requirePresence('etablissfr2', 'create')
            ->notEmptyString('etablissfr2');

        $validator
            ->scalar('etablissfr3')
            ->maxLength('etablissfr3', 255)
            ->requirePresence('etablissfr3', 'create')
            ->notEmptyString('etablissfr3');

        $validator
            ->scalar('etablissfr4')
            ->maxLength('etablissfr4', 255)
            ->requirePresence('etablissfr4', 'create')
            ->notEmptyString('etablissfr4');

        $validator
            ->scalar('ouiactbenefr')
            ->maxLength('ouiactbenefr', 255)
            ->requirePresence('ouiactbenefr', 'create')
            ->notEmptyString('ouiactbenefr');

        $validator
            ->scalar('lieuactbenefr')
            ->maxLength('lieuactbenefr', 255)
            ->requirePresence('lieuactbenefr', 'create')
            ->notEmptyString('lieuactbenefr');

        return $validator;
    }
}
