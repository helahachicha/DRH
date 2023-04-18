<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formacomplementaires Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Formacomplementaire newEmptyEntity()
 * @method \App\Model\Entity\Formacomplementaire newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplementaire[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplementaire get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formacomplementaire findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formacomplementaire patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplementaire[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formacomplementaire|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacomplementaire saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formacomplementaire[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplementaire[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplementaire[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formacomplementaire[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormacomplementairesTable extends Table
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

        $this->setTable('formacomplementaires');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Informationprofessionnelles', [
            'foreignKey' => 'informationprofessionnelle_id',
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
            ->scalar('formation')
            ->maxLength('formation', 255)
            ->requirePresence('formation', 'create')
            ->notEmptyString('formation');

        $validator
            ->scalar('attestation')
            ->maxLength('attestation', 255)
            ->requirePresence('attestation', 'create')
            ->notEmptyString('attestation');

        $validator
            ->scalar('anne')
            ->maxLength('anne', 255)
            ->requirePresence('anne', 'create')
            ->notEmptyString('anne');

        $validator
            ->scalar('etablissements')
            ->maxLength('etablissements', 255)
            ->requirePresence('etablissements', 'create')
            ->notEmptyString('etablissements');

        $validator
            ->integer('informationprofessionnelle_id')
            ->notEmptyString('informationprofessionnelle_id');

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
        $rules->add($rules->existsIn('informationprofessionnelle_id', 'Informationprofessionnelles'), ['errorField' => 'informationprofessionnelle_id']);

        return $rules;
    }
}
