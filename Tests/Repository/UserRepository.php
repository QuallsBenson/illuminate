<?php namespace Designplug\Illuminate\Tests\Repository;

use Designplug\Repository\Repository;

class UserRepository extends Repository{

  public function findById($id){

    return $this->getModel('User')->find($id);

  }
}
