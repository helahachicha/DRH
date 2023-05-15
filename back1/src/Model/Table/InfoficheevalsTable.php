<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Infoficheevals Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Infoficheeval newEmptyEntity()
 * @method \App\Model\Entity\Infoficheeval newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Infoficheeval[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Infoficheeval get($primaryKey, $options = [])
 * @method \App\Model\Entity\Infoficheeval findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Infoficheeval patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Infoficheeval[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Infoficheeval|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoficheeval saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Infoficheeval[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoficheeval[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoficheeval[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Infoficheeval[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InfoficheevalsTable extends Table
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

        $this->setTable('infoficheevals');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
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
            ->integer('employe_id')
            ->notEmptyString('employe_id');

        $validator
            ->scalar('objetevaluation')
            ->maxLength('objetevaluation', 255)
            ->requirePresence('objetevaluation', 'create')
            ->notEmptyString('objetevaluation');

        $validator
            ->dateTime('dateevaluation')
            ->allowEmptyDateTime('dateevaluation');

        $validator
            ->scalar('decisiondirection')
            ->maxLength('decisiondirection', 255)
            ->requirePresence('decisiondirection', 'create')
            ->notEmptyString('decisiondirection');

        $validator
            ->integer('categorie_id')
            ->notEmptyString('categorie_id');

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
        $rules->add($rules->existsIn('employe_id', 'Employes'), ['errorField' => 'employe_id']);
        $rules->add($rules->existsIn('categorie_id', 'Categories'), ['errorField' => 'categorie_id']);

        return $rules;
    }
}
