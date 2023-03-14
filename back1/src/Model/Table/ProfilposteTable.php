<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilposte Model
 *
 * @method \App\Model\Entity\Profilposte newEmptyEntity()
 * @method \App\Model\Entity\Profilposte newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profilposte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profilposte get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profilposte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profilposte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profilposte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profilposte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilposte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilposte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfilposteTable extends Table
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

        $this->setTable('profilposte');
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
            ->scalar('ct')
            ->maxLength('ct', 255)
            ->requirePresence('ct', 'create')
            ->notEmptyString('ct');

        $validator
            ->scalar('contenuct')
            ->maxLength('contenuct', 255)
            ->requirePresence('contenuct', 'create')
            ->notEmptyString('contenuct');

        $validator
            ->scalar('co')
            ->maxLength('co', 255)
            ->requirePresence('co', 'create')
            ->notEmptyString('co');

        $validator
            ->scalar('gt')
            ->maxLength('gt', 255)
            ->requirePresence('gt', 'create')
            ->notEmptyString('gt');

        $validator
            ->scalar('nivvisegt')
            ->maxLength('nivvisegt', 255)
            ->requirePresence('nivvisegt', 'create')
            ->notEmptyString('nivvisegt');

        $validator
            ->scalar('isuivigt')
            ->maxLength('isuivigt', 255)
            ->requirePresence('isuivigt', 'create')
            ->notEmptyString('isuivigt');

        $validator
            ->scalar('cc')
            ->maxLength('cc', 255)
            ->requirePresence('cc', 'create')
            ->notEmptyString('cc');

        $validator
            ->scalar('ge')
            ->maxLength('ge', 255)
            ->requirePresence('ge', 'create')
            ->notEmptyString('ge');

        $validator
            ->scalar('au')
            ->maxLength('au', 255)
            ->requirePresence('au', 'create')
            ->notEmptyString('au');

        $validator
            ->scalar('po')
            ->maxLength('po', 255)
            ->requirePresence('po', 'create')
            ->notEmptyString('po');

        $validator
            ->scalar('ci')
            ->maxLength('ci', 255)
            ->requirePresence('ci', 'create')
            ->notEmptyString('ci');

        $validator
            ->scalar('nivviseci')
            ->maxLength('nivviseci', 255)
            ->requirePresence('nivviseci', 'create')
            ->notEmptyString('nivviseci');

        $validator
            ->scalar('isuivici')
            ->maxLength('isuivici', 255)
            ->requirePresence('isuivici', 'create')
            ->notEmptyString('isuivici');

        $validator
            ->scalar('tc')
            ->maxLength('tc', 255)
            ->requirePresence('tc', 'create')
            ->notEmptyString('tc');

        $validator
            ->scalar('nivvisetc')
            ->maxLength('nivvisetc', 255)
            ->requirePresence('nivvisetc', 'create')
            ->notEmptyString('nivvisetc');

        $validator
            ->scalar('isuivitc')
            ->maxLength('isuivitc', 255)
            ->requirePresence('isuivitc', 'create')
            ->notEmptyString('isuivitc');

        $validator
            ->scalar('rp')
            ->maxLength('rp', 255)
            ->requirePresence('rp', 'create')
            ->notEmptyString('rp');

        $validator
            ->scalar('nivviserp')
            ->maxLength('nivviserp', 255)
            ->requirePresence('nivviserp', 'create')
            ->notEmptyString('nivviserp');

        $validator
            ->scalar('isuivirp')
            ->maxLength('isuivirp', 255)
            ->requirePresence('isuivirp', 'create')
            ->notEmptyString('isuivirp');

        $validator
            ->scalar('se')
            ->maxLength('se', 255)
            ->requirePresence('se', 'create')
            ->notEmptyString('se');

        $validator
            ->scalar('nivvisese')
            ->maxLength('nivvisese', 255)
            ->requirePresence('nivvisese', 'create')
            ->notEmptyString('nivvisese');

        $validator
            ->scalar('isuivise')
            ->maxLength('isuivise', 255)
            ->requirePresence('isuivise', 'create')
            ->notEmptyString('isuivise');

        $validator
            ->scalar('dr')
            ->maxLength('dr', 255)
            ->requirePresence('dr', 'create')
            ->notEmptyString('dr');

        $validator
            ->scalar('contenudroit')
            ->maxLength('contenudroit', 255)
            ->requirePresence('contenudroit', 'create')
            ->notEmptyString('contenudroit');

        $validator
            ->scalar('dev')
            ->maxLength('dev', 255)
            ->requirePresence('dev', 'create')
            ->notEmptyString('dev');

        $validator
            ->scalar('contenudev')
            ->maxLength('contenudev', 255)
            ->requirePresence('contenudev', 'create')
            ->notEmptyString('contenudev');

        $validator
            ->scalar('validation')
            ->maxLength('validation', 255)
            ->requirePresence('validation', 'create')
            ->notEmptyString('validation');

        $validator
            ->scalar('fonc')
            ->maxLength('fonc', 255)
            ->requirePresence('fonc', 'create')
            ->notEmptyString('fonc');

        $validator
            ->scalar('np')
            ->maxLength('np', 255)
            ->requirePresence('np', 'create')
            ->notEmptyString('np');

        $validator
            ->scalar('fonc1')
            ->maxLength('fonc1', 255)
            ->requirePresence('fonc1', 'create')
            ->notEmptyString('fonc1');

        $validator
            ->scalar('np1')
            ->maxLength('np1', 255)
            ->requirePresence('np1', 'create')
            ->notEmptyString('np1');

        $validator
            ->scalar('fonc2')
            ->maxLength('fonc2', 255)
            ->requirePresence('fonc2', 'create')
            ->notEmptyString('fonc2');

        $validator
            ->scalar('np2')
            ->maxLength('np2', 255)
            ->requirePresence('np2', 'create')
            ->notEmptyString('np2');

        return $validator;
    }
}
