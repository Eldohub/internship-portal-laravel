<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','full_name', 'course', 'school', 'year', 'motivation', 'expectations', 'avatar', 'id_no', 'is_admin','confirmation_code', 'confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'confirmation_code',
    ];

    /**
     * Use the the web guard for spatie
     *
     * @var string
     */
    protected $guard_name = 'web';


    /**
     * Away mutate the passworsd attr
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute(string $value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * Reports belonging to a user
     *
     * @param null
     * @return App\Report;
     */
    public function reports()
    {
        return $this->hasMany('App\Report');
    }
}
