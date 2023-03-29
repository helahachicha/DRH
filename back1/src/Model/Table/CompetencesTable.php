<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Competences Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\SouscompetencesTable&\Cake\ORM\Association\HasMany $Souscompetences
 *
 * @method \App\Model\Entity\Competence newEmptyEntity()
 * @method \App\Model\Entity\Competence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Competence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Competence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Competence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Competence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Competence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Competence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Competence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompetencesTable extends Table
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

        $this->setTable('competences');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Souscompetences', [
            'foreignKey' => 'competence_id',
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
            ->scalar('label3')
            ->maxLength('label3', 255)
            ->requirePresence('label3', 'create')
            ->notEmptyString('label3');

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
        $rules->add($rules->existsIn('categorie_id', 'Categories'), ['errorField' => 'categorie_id']);

        return $rules;
    }
}
