<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abilities Model
 *
 * @property \App\Model\Table\RolesTable&\Cake\ORM\Association\BelongsToMany $Roles
 *
 * @method \App\Model\Entity\Ability newEmptyEntity()
 * @method \App\Model\Entity\Ability newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Ability> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ability get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Ability findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Ability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Ability> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ability|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Ability saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Ability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ability>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ability> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ability>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Ability>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Ability> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AbilitiesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('abilities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Roles', [
            'foreignKey' => 'ability_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'abilities_roles',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('update_at')
            ->notEmptyDateTime('update_at');

        return $validator;
    }
}
