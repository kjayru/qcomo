<?php

namespace App;


use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Transformers\UserTransformer;
use App\UserClientAdmin;
use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    
    use Notifiable, ShinobiTrait;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';
    const USUARIO_ADMINISTRADOR = 'true';
    const USUARIO_REGULAR = 'false';
    const ROLE = '2';


    public $transformer = UserTransformer::class;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'role_id','name','lastname', 'email', 'telefono','sexo','edad', 'password',
    ];


    public static function navigation(){ 
        return auth()->check() ? auth()->user()->roles[0]->slug : 'guest';
    }

    public function setNameAttribute($valor){
        $this->attributes['name'] = strtolower($valor);
    }

    public function getNameAttribute($valor){
        return ucwords($valor);
    }

    public function setEmailAttribute($valor){
        $this->attributes['email'] = strtolower($valor);
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function costumerdetail()
    {
        return $this->hasOne('App\CustomerDetail');
    }

    public function esVerificado(){
        return $this->verified = User::USUARIO_VERIFICADO;
    }

    public function esAdministrador()
    {
        return $this->admin = User::USUARIO_ADMINISTRADOR;
    }

    public static function generarVerificationToken()
    {
        return str_random(40);
    }

    public function comentarios()
    {
        return $this->hasMany('App\Comment');
    }

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }

    public function userClientAdmin()
    {
        return $this->hasMany('App\Client');
    }
    
}
