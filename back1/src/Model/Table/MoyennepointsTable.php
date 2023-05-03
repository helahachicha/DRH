<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moyennepoints Model
 *
 * @property \App\Model\Table\EmployesTable&\Cake\ORM\Association\BelongsTo $Employes
 * @property \App\Model\Table\PointindicateursTable&\Cake\ORM\Association\BelongsTo $Pointindicateurs
 *
 * @method \App\Model\Entity\Moyennepoint newEmptyEntity()
 * @method \App\Model\Entity\Moyennepoint newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Moyennepoint[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moyennepoint get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moyennepoint findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Moyennepoint patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moyennepoint[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moyennepoint|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moyennepoint saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moyennepoint[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moyennepoint[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moyennepoint[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Moyennepoint[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MoyennepointsTable extends Table
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

        $this->setTable('moyennepoints');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Employes', [
            'foreignKey' => 'employe_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Pointindicateurs', [
            'foreignKey' => 'pointindicateur_id',
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
            ->numeric('moyenne')
            ->requirePresence('moyenne', 'create')
            ->notEmptyString('moyenne');

        $validator
            ->integer('employe_id')
            ->notEmptyString('employe_id');

        $validator
            ->integer('pointindicateur_id')
            ->notEmptyString('pointindicateur_id');

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
        $rules->add($rules->existsIn('pointindicateur_id', 'Pointindicateurs'), ['errorField' => 'pointindicateur_id']);

        return $rules;
    }
}
