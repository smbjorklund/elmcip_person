<?php declare(strict_types=1);

namespace Drupal\elmcip_person\Form;

final class Person {

  private $firstName;
  private $middleName;
  private $lastName;

  public function __construct($firstName,
                              $middleName,
                              $lastName) {
    $this->firstName = $firstName;
    $this->middleName = $middleName;
    $this->lastName = $lastName;
  }

  private function trim($content): string {
    if ($content) {
      return trim($content);
    }

    return (string) $content;
  }

  private function add_space($name): string {
    if ($name) {
      return $name . ' ';
    }

    return $name;
  }

  private function first_name(): string {
    return $this->add_space($this->trim($this->firstName));
  }

  private function middle_name(): string {
    return $this->add_space($this->trim($this->middleName));
 }

  private function last_name(): string {
    return $this->trim($this->lastName);
  }

  public function person_title(): string {
    return $this->first_name() . $this->middle_name() . $this->last_name();
  }

}
