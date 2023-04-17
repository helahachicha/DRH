<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Formaacademiques Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Formaacademique newEmptyEntity()
 * @method \App\Model\Entity\Formaacademique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Formaacademique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Formaacademique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Formaacademique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Formaacademique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Formaacademique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Formaacademique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formaacademique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Formaacademique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaacademique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaacademique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Formaacademique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FormaacademiquesTable extends Table
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

        $this->setTable('formaacademiques');
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
            ->scalar('niveau')
            ->maxLength('niveau', 255)
            ->requirePresence('niveau', 'create')
            ->notEmptyString('niveau');

        $validator
            ->scalar('specialite')
            ->maxLength('specialite', 255)
            ->requirePresence('specialite', 'create')
            ->notEmptyString('specialite');

        $validator
            ->scalar('annee')
            ->maxLength('annee', 255)
            ->requirePresence('annee', 'create')
            ->notEmptyString('annee');

        $validator
            ->scalar('etablissement')
            ->maxLength('etablissement', 255)
            ->requirePresence('etablissement', 'create')
            ->notEmptyString('etablissement');

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
