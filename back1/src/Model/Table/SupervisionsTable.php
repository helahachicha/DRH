<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Supervisions Model
 *
 * @property \App\Model\Table\CategoriedevsTable&\Cake\ORM\Association\BelongsTo $Categoriedevs
 * @property \App\Model\Table\InfogencatppsTable&\Cake\ORM\Association\HasMany $Infogencatpps
 *
 * @method \App\Model\Entity\Supervision newEmptyEntity()
 * @method \App\Model\Entity\Supervision newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supervision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supervision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supervision findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supervision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supervision[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supervision|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supervision saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supervision[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupervisionsTable extends Table
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

        $this->setTable('supervisions');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categoriedevs', [
            'foreignKey' => 'categoriedev_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Infogencatpps', [
            'foreignKey' => 'supervision_id',
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
            ->integer('categoriedev_id')
            ->notEmptyString('categoriedev_id');

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
        $rules->add($rules->existsIn('categoriedev_id', 'Categoriedevs'), ['errorField' => 'categoriedev_id']);

        return $rules;
    }
}
