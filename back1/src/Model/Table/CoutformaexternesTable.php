<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coutformaexternes Model
 *
 * @method \App\Model\Entity\Coutformaexterne newEmptyEntity()
 * @method \App\Model\Entity\Coutformaexterne newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Coutformaexterne[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coutformaexterne get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coutformaexterne findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Coutformaexterne patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coutformaexterne[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coutformaexterne|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coutformaexterne saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coutformaexterne[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coutformaexterne[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coutformaexterne[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Coutformaexterne[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CoutformaexternesTable extends Table
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

        $this->setTable('coutformaexternes');
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
            ->numeric('coutformahd')
            ->requirePresence('coutformahd', 'create')
            ->notEmptyString('coutformahd');

        $validator
            ->numeric('tocoformadt')
            ->requirePresence('tocoformadt', 'create')
            ->notEmptyString('tocoformadt');

        $validator
            ->numeric('locaespace')
            ->requirePresence('locaespace', 'create')
            ->notEmptyString('locaespace');

        $validator
            ->numeric('comax')
            ->requirePresence('comax', 'create')
            ->notEmptyString('comax');

        $validator
            ->numeric('tocout')
            ->requirePresence('tocout', 'create')
            ->notEmptyString('tocout');

        $validator
            ->numeric('chargeto')
            ->requirePresence('chargeto', 'create')
            ->notEmptyString('chargeto');

        return $validator;
    }
}
