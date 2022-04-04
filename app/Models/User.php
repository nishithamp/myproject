<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //protected $guarded=[];
    
   protected  $fillable=['name','email','dob','status'];

   public function getdobFormatedAttribute(){
      return date('d-M-Y',strtotime($this->dob_formated));
   }

public function getStatusTextAttribute()
{
    if($this->status==1) return "Active";
    else return "Inactive";
}
protected $append=['dob_formated','status_text'];
public function scopeActive($query)
{
    return $query->where('status',1);
}
}

