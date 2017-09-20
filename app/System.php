<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
  protected $table = 'system';
  protected $primaryKey = 'setting';
  public $incrementing = false;
}
