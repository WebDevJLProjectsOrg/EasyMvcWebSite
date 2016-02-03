<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\ViewModels\Account;

use Puzzlout\WebIde\ViewModels\Account\LoginVm;

class LoginVmTest extends \PHPUnit_Framework_TestCase {

  protected $app;

  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
      $this->app = new \Puzzlout\WebIde\Tests\TestApplication();
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $this->assertNotNull($this->app);
    $result = new LoginVm($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\ViewModels\Account\LoginVm', $result);
  }
  
  //Write the next tests below...
  
}