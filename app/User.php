<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property bool $verified
 * @property string $password
 * @property string $email_token
 * @property string $role
 * @property string $remember_token
 */

class User extends Authenticatable
{
    use Notifiable;

    public const ROLE_USER = 'user';
    public const ROLE_ADMIN = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_token', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function rolesList(): array
    {
        return [
            self::ROLE_USER => 'User',
            self::ROLE_ADMIN => 'Admin',
        ];
    }

    /**
     * @param $role
     * @method void changeRole(string $role)
     */
    public function changeRole($role): void
    {
        if (!array_key_exists($role, self::rolesList())){
            throw new \InvalidArgumentException('Не определена роль "' . $role . '"');
        }

        if ($this->role === $role)
        {
            throw new \DomainException('Эта роль уже привязана к этому пользователю');
        }

        $this->update(['role' => $role]);
    }
}