<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Niveauvises Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\IndicateursuivisTable&\Cake\ORM\Association\HasMany $Indicateursuivis
 *
 * @method \App\Model\Entity\Niveauvise newEmptyEntity()
 * @method \App\Model\Entity\Niveauvise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Niveauvise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Niveauvise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Niveauvise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Niveauvise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Niveauvise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Niveauvise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Niveauvise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Niveauvise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NiveauvisesTable extends Table
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

        $this->setTable('niveauvises');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'categorie_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Indicateursuivis', [
            'foreignKey' => 'niveauvise_id',
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
            ->scalar('label')
            ->maxLength('label', 255)
            ->requirePresence('label', 'create')
            ->notEmptyString('label');

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
