<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categoriepps Model
 *
 * @property \App\Model\Table\ProfilpostesTable&\Cake\ORM\Association\BelongsTo $Profilpostes
 *
 * @method \App\Model\Entity\Categoriepp newEmptyEntity()
 * @method \App\Model\Entity\Categoriepp newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriepp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoriepp get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoriepp findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Categoriepp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriepp[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoriepp|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriepp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoriepp[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriepp[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriepp[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Categoriepp[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategorieppsTable extends Table
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

        $this->setTable('categoriepps');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Profilpostes', [
            'foreignKey' => 'profilposte_id',
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
            ->scalar('categorie')
            ->maxLength('categorie', 255)
            ->requirePresence('categorie', 'create')
            ->notEmptyString('categorie');

        $validator
            ->integer('profilposte_id')
            ->notEmptyString('profilposte_id');

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
        $rules->add($rules->existsIn('profilposte_id', 'Profilpostes'), ['errorField' => 'profilposte_id']);

        return $rules;
    }
}
