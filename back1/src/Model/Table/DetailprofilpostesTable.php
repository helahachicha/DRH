<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Detailprofilpostes Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Detailprofilposte newEmptyEntity()
 * @method \App\Model\Entity\Detailprofilposte newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Detailprofilposte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Detailprofilposte get($primaryKey, $options = [])
 * @method \App\Model\Entity\Detailprofilposte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Detailprofilposte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Detailprofilposte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Detailprofilposte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detailprofilposte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Detailprofilposte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DetailprofilpostesTable extends Table
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

        $this->setTable('detailprofilpostes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->scalar('fonction')
            ->maxLength('fonction', 255)
            ->requirePresence('fonction', 'create')
            ->notEmptyString('fonction');

        $validator
            ->integer('categorie_id')
            ->notEmptyString('categorie_id');

        $validator
            ->scalar('superhierar')
            ->maxLength('superhierar', 255)
            ->requirePresence('superhierar', 'create')
            ->notEmptyString('superhierar');

        $validator
            ->scalar('supervision')
            ->maxLength('supervision', 255)
            ->requirePresence('supervision', 'create')
            ->notEmptyString('supervision');

        $validator
            ->scalar('interim')
            ->maxLength('interim', 255)
            ->requirePresence('interim', 'create')
            ->notEmptyString('interim');

        $validator
            ->scalar('fonctionelaboration')
            ->maxLength('fonctionelaboration', 255)
            ->requirePresence('fonctionelaboration', 'create')
            ->notEmptyString('fonctionelaboration');

        $validator
            ->scalar('fonctionverification')
            ->maxLength('fonctionverification', 255)
            ->requirePresence('fonctionverification', 'create')
            ->notEmptyString('fonctionverification');

        $validator
            ->scalar('fonctionabrobation')
            ->maxLength('fonctionabrobation', 255)
            ->requirePresence('fonctionabrobation', 'create')
            ->notEmptyString('fonctionabrobation');

        $validator
            ->scalar('nomprenomelab')
            ->maxLength('nomprenomelab', 255)
            ->requirePresence('nomprenomelab', 'create')
            ->notEmptyString('nomprenomelab');

        $validator
            ->scalar('nomprenomverif')
            ->maxLength('nomprenomverif', 255)
            ->requirePresence('nomprenomverif', 'create')
            ->notEmptyString('nomprenomverif');

        $validator
            ->scalar('nomprenomabrob')
            ->maxLength('nomprenomabrob', 255)
            ->requirePresence('nomprenomabrob', 'create')
            ->notEmptyString('nomprenomabrob');

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
