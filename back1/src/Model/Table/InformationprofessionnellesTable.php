<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Informationprofessionnelles Model
 *
 * @property \App\Model\Table\ActiviteloisirsTable&\Cake\ORM\Association\HasMany $Activiteloisirs
 * @property \App\Model\Table\ConjointsTable&\Cake\ORM\Association\HasMany $Conjoints
 * @property \App\Model\Table\EnfantsTable&\Cake\ORM\Association\HasMany $Enfants
 * @property \App\Model\Table\ExperienceprofessionnellesTable&\Cake\ORM\Association\HasMany $Experienceprofessionnelles
 * @property \App\Model\Table\FormaacademiquesTable&\Cake\ORM\Association\HasMany $Formaacademiques
 * @property \App\Model\Table\FormacomplementairesTable&\Cake\ORM\Association\HasMany $Formacomplementaires
 * @property \App\Model\Table\InformationpersonnellesTable&\Cake\ORM\Association\HasMany $Informationpersonnelles
 * @property \App\Model\Table\LanguesTable&\Cake\ORM\Association\HasMany $Langues
 * @property \App\Model\Table\PerformancesTable&\Cake\ORM\Association\HasMany $Performances
 *
 * @method \App\Model\Entity\Informationprofessionnelle newEmptyEntity()
 * @method \App\Model\Entity\Informationprofessionnelle newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle get($primaryKey, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Informationprofessionnelle[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InformationprofessionnellesTable extends Table
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

        $this->setTable('informationprofessionnelles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Activiteloisirs', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Conjoints', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Enfants', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Experienceprofessionnelles', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Formaacademiques', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Formacomplementaires', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Informationpersonnelles', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Langues', [
            'foreignKey' => 'informationprofessionnelle_id',
        ]);
        $this->hasMany('Performances', [
            'foreignKey' => 'informationprofessionnelle_id',
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
            ->scalar('nomprenom')
            ->maxLength('nomprenom', 255)
            ->requirePresence('nomprenom', 'create')
            ->notEmptyString('nomprenom');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 255)
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->integer('telprofessionnel')
            ->requirePresence('telprofessionnel', 'create')
            ->notEmptyString('telprofessionnel');

        $validator
            ->integer('telpersonnel')
            ->requirePresence('telpersonnel', 'create')
            ->notEmptyString('telpersonnel');

        $validator
            ->integer('contact')
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact');

        $validator
            ->scalar('mailprofessionnel')
            ->maxLength('mailprofessionnel', 255)
            ->requirePresence('mailprofessionnel', 'create')
            ->notEmptyString('mailprofessionnel');

        $validator
            ->scalar('mailpersonnel')
            ->maxLength('mailpersonnel', 255)
            ->requirePresence('mailpersonnel', 'create')
            ->notEmptyString('mailpersonnel');

        $validator
            ->scalar('service')
            ->maxLength('service', 255)
            ->requirePresence('service', 'create')
            ->notEmptyString('service');

        $validator
            ->scalar('poste')
            ->maxLength('poste', 255)
            ->requirePresence('poste', 'create')
            ->notEmptyString('poste');

        return $validator;
    }
}
