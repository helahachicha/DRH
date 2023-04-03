<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Langues Model
 *
 * @property \App\Model\Table\InfoprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Infoprofessionnelles
 *
 * @method \App\Model\Entity\Langue newEmptyEntity()
 * @method \App\Model\Entity\Langue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Langue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Langue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Langue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Langue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Langue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Langue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Langue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Langue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Langue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Langue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Langue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LanguesTable extends Table
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

        $this->setTable('langues');
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
            ->scalar('arabe')
            ->maxLength('arabe', 255)
            ->requirePresence('arabe', 'create')
            ->notEmptyString('arabe');

        $validator
            ->scalar('francais')
            ->maxLength('francais', 255)
            ->requirePresence('francais', 'create')
            ->notEmptyString('francais');

        $validator
            ->scalar('anglais')
            ->maxLength('anglais', 255)
            ->requirePresence('anglais', 'create')
            ->notEmptyString('anglais');

        $validator
            ->scalar('autre')
            ->maxLength('autre', 255)
            ->requirePresence('autre', 'create')
            ->notEmptyString('autre');

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
