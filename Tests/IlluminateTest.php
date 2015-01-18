<?php

use Designplug\Repository\RepositoryManager;
use Designplug\Illuminate\Database\DatabaseManager;


require dirname(dirname(__FILE__)) .'/vendor/autoload.php';

class IlluminateTest extends PHPUnit_Framework_TestCase{

  public function testInitializeManager(){

    $manager = new RepositoryManager('Designplug\Illuminate\Tests\Repository',
                                     'Designplug\Illuminate\Tests\Entity',
                                     'Designplug\Illuminate\Tests\RepositoryInitializer');

    $db      = new DatabaseManager;
    $db->setConnectionParameters(require('config.php'));

    $manager->setDatabaseManager($db);

    return $manager;

  }

  /**
  * @depends testInitializeManager
  **/

  public function testModel($manager){

    $userRepo = $manager->get('User');
    $user     = $userRepo->findById(1);

    $this->assertNotEmpty($user);

    var_dump($user);

  }


}
