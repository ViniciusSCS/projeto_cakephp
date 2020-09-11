<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $usuario
 * @property string $email
 * @property string $telefone
 * @property string $cep
 * @property string $endereco
 * @property string|null $numero
 * @property string|null $bairro
 * @property string|null $complemento
 * @property string|null $cidade
 * @property string|null $estado
 * @property string $senha
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'usuario' => true,
        'email' => true,
        'telefone' => true,
        'cep' => true,
        'endereco' => true,
        'numero' => true,
        'bairro' => true,
        'complemento' => true,
        'cidade' => true,
        'estado' => true,
        'senha' => true,
    ];

    protected $_hidden = [
        'senha'
    ];
}
