<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Activiteloisirs Model
 *
 * @property \App\Model\Table\InformationprofessionnellesTable&\Cake\ORM\Association\BelongsTo $Informationprofessionnelles
 *
 * @method \App\Model\Entity\Activiteloisir newEmptyEntity()
 * @method \App\Model\Entity\Activiteloisir newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisir[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisir get($primaryKey, $options = [])
 * @method \App\Model\Entity\Activiteloisir findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Activiteloisir patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisir[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Activiteloisir|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Activiteloisir saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Activiteloisir[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisir[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisir[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Activiteloisir[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ActiviteloisirsTable extends Table
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

        $this->setTable('activiteloisirs');
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
            ->scalar('activitesportive')
            ->maxLength('activitesportive', 255)
            ->requirePresence('activitesportive', 'create')
            ->notEmptyString('activitesportive');

        $validator
            ->scalar('lequelactsportive')
            ->maxLength('lequelactsportive', 255)
            ->requirePresence('lequelactsportive', 'create')
            ->notEmptyString('lequelactsportive');

        $validator
            ->scalar('activitecreative')
            ->maxLength('activitecreative', 255)
            ->requirePresence('activitecreative', 'create')
            ->notEmptyString('activitecreative');

        $validator
            ->scalar('activiteinventivite')
            ->maxLength('activiteinventivite', 255)
            ->requirePresence('activiteinventivite', 'create')
            ->notEmptyString('activiteinventivite');

        $validator
            ->scalar('activitecorporelle')
            ->maxLength('activitecorporelle', 255)
            ->requirePresence('activitecorporelle', 'create')
            ->notEmptyString('activitecorporelle');

        $validator
            ->scalar('jeureflexion')
            ->maxLength('jeureflexion', 255)
            ->requirePresence('jeureflexion', 'create')
            ->notEmptyString('jeureflexion');

        $validator
            ->scalar('exerceractivite')
            ->maxLength('exerceractivite', 255)
            ->requirePresence('exerceractivite', 'create')
            ->notEmptyString('exerceractivite');

        $validator
            ->scalar('pourquoiexercer')
            ->maxLength('pourquoiexercer', 255)
            ->requirePresence('pourquoiexercer', 'create')
            ->notEmptyString('pourquoiexercer');

        $validator
            ->scalar('sallesport')
            ->maxLength('sallesport', 255)
            ->requirePresence('sallesport', 'create')
            ->notEmptyString('sallesport');

        $validator
            ->scalar('disposallesport')
            ->maxLength('disposallesport', 255)
            ->requirePresence('disposallesport', 'create')
            ->notEmptyString('disposallesport');

        $validator
            ->scalar('activitebenevolat')
            ->maxLength('activitebenevolat', 255)
            ->requirePresence('activitebenevolat', 'create')
            ->notEmptyString('activitebenevolat');

        $validator
            ->scalar('lequelactbenevolat')
            ->maxLength('lequelactbenevolat', 255)
            ->requirePresence('lequelactbenevolat', 'create')
            ->notEmptyString('lequelactbenevolat');

        $validator
            ->scalar('lieuactbenevolat')
            ->maxLength('lieuactbenevolat', 255)
            ->requirePresence('lieuactbenevolat', 'create')
            ->notEmptyString('lieuactbenevolat');

        $validator
            ->scalar('exerceractbenevolat')
            ->maxLength('exerceractbenevolat', 255)
            ->requirePresence('exerceractbenevolat', 'create')
            ->notEmptyString('exerceractbenevolat');

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
