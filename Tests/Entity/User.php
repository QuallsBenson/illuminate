<?php namespace Designplug\Illuminate \Tests\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

  protected $primaryKey = 'ID',
             $table      = 'users';

}
