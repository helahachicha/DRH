<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matricecompetences Model
 *
 * @property \App\Model\Table\MatricesTable&\Cake\ORM\Association\HasMany $Matrices
 * @property \App\Model\Table\PolyvalencesTable&\Cake\ORM\Association\HasMany $Polyvalences
 *
 * @method \App\Model\Entity\Matricecompetence newEmptyEntity()
 * @method \App\Model\Entity\Matricecompetence newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Matricecompetence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matricecompetence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matricecompetence findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Matricecompetence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matricecompetence[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matricecompetence|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricecompetence saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricecompetence[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricecompetence[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricecompetence[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricecompetence[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatricecompetencesTable extends Table
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

        $this->setTable('matricecompetences');
        $this->setDisplayField('label');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Matrices', [
            'foreignKey' => 'matricecompetence_id',
        ]);
        $this->hasMany('Polyvalences', [
            'foreignKey' => 'matricecompetence_id',
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
            ->scalar('abreviation')
            ->maxLength('abreviation', 255)
            ->requirePresence('abreviation', 'create')
            ->notEmptyString('abreviation');

        return $validator;
    }
}
