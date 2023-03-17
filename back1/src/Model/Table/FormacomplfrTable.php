<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formacomplfr Model
 *
 * @method \App\Model\Entity\Formacomplfr newEmptyEntity()
 * @method \App\Model\Entity\Formacomplfr newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplfr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplfr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formacomplfr findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formacomplfr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplfr[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplfr|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacomplfr saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacomplfr[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplfr[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplfr[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplfr[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormacomplfrTable extends Table
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

        $this->setTable('formacomplfr');
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
            ->scalar('formationf')
            ->maxLength('formationf', 255)
            ->requirePresence('formationf', 'create')
            ->notEmptyString('formationf');

        $validator
            ->scalar('attestationf')
            ->maxLength('attestationf', 255)
            ->requirePresence('attestationf', 'create')
            ->notEmptyString('attestationf');

        $validator
            ->scalar('anneef')
            ->requirePresence('anneef', 'create')
            ->notEmptyString('anneef');

        $validator
            ->scalar('etablissementf')
            ->maxLength('etablissementf', 255)
            ->requirePresence('etablissementf', 'create')
            ->notEmptyString('etablissementf');

        return $validator;
    }
}
