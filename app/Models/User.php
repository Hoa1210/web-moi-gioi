<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $avatar
 * @property string $email
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $link
 * @property int $role
 * @property string|null $bio
 * @property string|null $position
 * @property string|null $gender
 * @property string|null $city
 * @property int|null $companies_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompaniesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Model implements
    AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;


    protected $fillable = [
        'email',
        'name',
        'avatar',
        'password',
    ];

    public function getRoleNameAttribute() {
        return UserRoleEnum::getKeys($this->role )[0];
    }
}

