<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
  protected $guarded = [ ];
    
  public function doctor()
  {
    return $this->belongsTo(User::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function problems()
  {
    return $this->hasMany(Problem::class);
  }

  public function investigations()
  {
    return $this->hasMany(Investigation::class);
  }

  public function medicines()
  {
    return $this->hasMany(Medicine::class);
  }
  
}
