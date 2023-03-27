<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profilpostes Model
 *
 * @property \App\Model\Table\PostesTable&\Cake\ORM\Association\BelongsTo $Postes
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\HasMany $Categories
 * @property \App\Model\Table\ComptechniquesTable&\Cake\ORM\Association\HasMany $Comptechniques
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
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilpostesTable extends Table
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

        $this->setTable('profilpostes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Postes', [
            'foreignKey' => 'poste_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Categories', [
            'foreignKey' => 'profilposte_id',
        ]);
        $this->hasMany('Comptechniques', [
            'foreignKey' => 'profilposte_id',
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
            ->scalar('nom')
            ->maxLength('nom', 255)
            ->requirePresence('nom', 'create')
            ->notEmptyString('nom');

        $validator
            ->integer('poste_id')
            ->notEmptyString('poste_id');

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
        $rules->add($rules->existsIn('poste_id', 'Postes'), ['errorField' => 'poste_id']);

        return $rules;
    }
}
