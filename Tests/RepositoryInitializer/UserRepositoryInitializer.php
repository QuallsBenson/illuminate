<?php namespace Designplug\Illuminate\Tests\RepositoryInitializer;

use Designplug\Repository\RepositoryInitializer;
use Designplug\Illuminate\Tests\Repository\UserRepository;

class UserRepositoryInitializer extends RepositoryInitializer{

  public function initialize($repository, array $services = array()){

    if( ($repository instanceof UserRepository) === false)
      throw new \Exception('Repository must be User Repository');

    parent::initialize($repository, $services);  


  }

}
