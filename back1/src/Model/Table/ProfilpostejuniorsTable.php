<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilpostejuniors Model
 *
 * @method \App\Model\Entity\Profilpostejunior newEmptyEntity()
 * @method \App\Model\Entity\Profilpostejunior newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostejunior[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostejunior get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profilpostejunior findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profilpostejunior patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostejunior[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profilpostejunior|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostejunior saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profilpostejunior[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostejunior[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostejunior[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profilpostejunior[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfilpostejuniorsTable extends Table
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

        $this->setTable('profilpostejuniors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('comptech')
            ->maxLength('comptech', 255)
            ->requirePresence('comptech', 'create')
            ->notEmptyString('comptech');

        $validator
            ->scalar('contenucomptech')
            ->maxLength('contenucomptech', 255)
            ->requirePresence('contenucomptech', 'create')
            ->notEmptyString('contenucomptech');

        $validator
            ->scalar('comporgan')
            ->maxLength('comporgan', 255)
            ->requirePresence('comporgan', 'create')
            ->notEmptyString('comporgan');

        $validator
            ->scalar('gestemps')
            ->maxLength('gestemps', 255)
            ->requirePresence('gestemps', 'create')
            ->notEmptyString('gestemps');

        $validator
            ->scalar('nvisegestemp')
            ->maxLength('nvisegestemp', 255)
            ->requirePresence('nvisegestemp', 'create')
            ->notEmptyString('nvisegestemp');

        $validator
            ->scalar('isuivigestemp')
            ->maxLength('isuivigestemp', 255)
            ->requirePresence('isuivigestemp', 'create')
            ->notEmptyString('isuivigestemp');

        $validator
            ->scalar('compcompor')
            ->maxLength('compcompor', 255)
            ->requirePresence('compcompor', 'create')
            ->notEmptyString('compcompor');

        $validator
            ->scalar('geek')
            ->maxLength('geek', 255)
            ->requirePresence('geek', 'create')
            ->notEmptyString('geek');

        $validator
            ->scalar('autod')
            ->maxLength('autod', 255)
            ->requirePresence('autod', 'create')
            ->notEmptyString('autod');

        $validator
            ->scalar('positivite')
            ->maxLength('positivite', 255)
            ->requirePresence('positivite', 'create')
            ->notEmptyString('positivite');

        $validator
            ->scalar('commintera')
            ->maxLength('commintera', 255)
            ->requirePresence('commintera', 'create')
            ->notEmptyString('commintera');

        $validator
            ->scalar('nvisecommintera')
            ->maxLength('nvisecommintera', 255)
            ->requirePresence('nvisecommintera', 'create')
            ->notEmptyString('nvisecommintera');

        $validator
            ->scalar('isuivicommintera')
            ->maxLength('isuivicommintera', 255)
            ->requirePresence('isuivicommintera', 'create')
            ->notEmptyString('isuivicommintera');

        $validator
            ->scalar('tracoll')
            ->maxLength('tracoll', 255)
            ->requirePresence('tracoll', 'create')
            ->notEmptyString('tracoll');

        $validator
            ->scalar('nvisetracoll')
            ->maxLength('nvisetracoll', 255)
            ->requirePresence('nvisetracoll', 'create')
            ->notEmptyString('nvisetracoll');

        $validator
            ->scalar('isuivitracoll')
            ->maxLength('isuivitracoll', 255)
            ->requirePresence('isuivitracoll', 'create')
            ->notEmptyString('isuivitracoll');

        $validator
            ->scalar('resprob')
            ->maxLength('resprob', 255)
            ->requirePresence('resprob', 'create')
            ->notEmptyString('resprob');

        $validator
            ->scalar('nviseresprob')
            ->maxLength('nviseresprob', 255)
            ->requirePresence('nviseresprob', 'create')
            ->notEmptyString('nviseresprob');

        $validator
            ->scalar('isuiviresprob')
            ->maxLength('isuiviresprob', 255)
            ->requirePresence('isuiviresprob', 'create')
            ->notEmptyString('isuiviresprob');

        $validator
            ->scalar('servexcell')
            ->maxLength('servexcell', 255)
            ->requirePresence('servexcell', 'create')
            ->notEmptyString('servexcell');

        $validator
            ->scalar('nviseservexcell')
            ->maxLength('nviseservexcell', 255)
            ->requirePresence('nviseservexcell', 'create')
            ->notEmptyString('nviseservexcell');

        $validator
            ->scalar('isuiviservexcell')
            ->maxLength('isuiviservexcell', 255)
            ->requirePresence('isuiviservexcell', 'create')
            ->notEmptyString('isuiviservexcell');

        $validator
            ->scalar('droit')
            ->maxLength('droit', 255)
            ->requirePresence('droit', 'create')
            ->notEmptyString('droit');

        $validator
            ->scalar('contenudroit')
            ->maxLength('contenudroit', 255)
            ->requirePresence('contenudroit', 'create')
            ->notEmptyString('contenudroit');

        $validator
            ->scalar('devoir')
            ->maxLength('devoir', 255)
            ->requirePresence('devoir', 'create')
            ->notEmptyString('devoir');

        $validator
            ->scalar('contenudevoir')
            ->maxLength('contenudevoir', 255)
            ->requirePresence('contenudevoir', 'create')
            ->notEmptyString('contenudevoir');

        $validator
            ->scalar('validation')
            ->maxLength('validation', 255)
            ->requirePresence('validation', 'create')
            ->notEmptyString('validation');

        $validator
            ->scalar('contenuvalid')
            ->maxLength('contenuvalid', 255)
            ->requirePresence('contenuvalid', 'create')
            ->notEmptyString('contenuvalid');

        $validator
            ->scalar('fonction')
            ->maxLength('fonction', 255)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->scalar('nompre')
            ->maxLength('nompre', 255)
            ->requirePresence('nompre', 'create')
            ->notEmptyString('nompre');

        $validator
            ->scalar('fonction1')
            ->maxLength('fonction1', 255)
            ->requirePresence('fonction1', 'create')
            ->notEmptyString('fonction1');

        $validator
            ->scalar('nompre1')
            ->maxLength('nompre1', 255)
            ->requirePresence('nompre1', 'create')
            ->notEmptyString('nompre1');

        $validator
            ->scalar('fonction2')
            ->maxLength('fonction2', 255)
            ->requirePresence('fonction2', 'create')
            ->notEmptyString('fonction2');

        $validator
            ->scalar('nompre2')
            ->maxLength('nompre2', 255)
            ->requirePresence('nompre2', 'create')
            ->notEmptyString('nompre2');

        return $validator;
    }
}
