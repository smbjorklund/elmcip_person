<?php declare(strict_types=1);

namespace Drupal\Tests\elmcip_person\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\elmcip_person\Form\Person;

/**
 * Tests ELMCIP Person name methods.
 *
 * @group elmcip_person
 */
class PersonNameTest extends UnitTestCase {

  /**
   * Test first, middle and last name form.
   */
  public function testFullName()
  {
    $person = new Person('James', 'Magnus', 'Doe');
    $expectedResult = 'James Magnus Doe';
    $this->assertEquals($expectedResult, $person->person_title());

    $person = new Person(' James ', ' Magnus  ', ' Doe ');
    $this->assertEquals($expectedResult, $person->person_title());
  }

  /**
   * Test person with only a last name.
   */
  public function testOnlyLastName()
  {
    $expectedResult = 'Doe';
    $person = new Person('', '', 'Doe');
    $this->assertEquals($expectedResult, $person->person_title());

    $person = new Person(NULL, '', 'Doe');
    $this->assertEquals($expectedResult, $person->person_title());
  }

  /**
   * Test person with a first and last name.
   */
  public function testFirstName()
  {
    $expectedResult = 'James Doe';
    $person = new Person('James', NULL, 'Doe');
    $this->assertEquals($expectedResult, $person->person_title());
  }

}
