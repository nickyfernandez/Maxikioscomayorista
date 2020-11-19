<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    // protected $primarykey = id_user;
    public $timestamps = false;
    // public $guarded = [];
    /**
     * The attributes that are mass assignable.

     *
     * @var array
     */
    protected $fillable = [
      'name','email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kind(){
      return $this->belongsTo(Kinduser::class,'id_kind');
    }
    public function client(){
      return $this->belongsTo(Client::class,'id_client');
    }
    public function carts(){
      return $this->hasMany(Cart::class,'id_user');
    }

    // -------------------scope-------------------
    public function scopeSearchCart($query, $id_user){
    return $query->where('id', '=', $id_user);
  }

    public function scopeGetUser(){
      // if($this->id_local){
      if($this->id){
        // $local = Local::find($this->id_local);
        $user = User::find($this->id);
        return $user->id;
      }
      return "Sin user";
    }

  // --------------------get------------------
  public function getUser(){
    // if($this->id_local){
    if($this->id){
      // $local = Local::find($this->id_local);
      $user = User::find($this->id);
      return $user->id;
    }
    return "Sin user";
  }


    // public function kind(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->belongTo(kinduser::class);
    // }
    //
    // public function products(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->hasMany('App\Product');
    // }





}
