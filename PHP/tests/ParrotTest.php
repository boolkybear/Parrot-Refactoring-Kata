<?php

namespace Parrot;

class ParrotTest extends \PHPUnit_Framework_TestCase {
  const NORMAL_SPEED = 12.0;

  /** @test */
  public function the_speed_of_european_parrot_is_normal_speed() {
    $parrot = new EuropeanParrot();
    $this->assertEquals(self::NORMAL_SPEED, $parrot->getSpeed());
  }

  /** @test */
  public function the_speed_of_african_parrot_with_no_coconuts_is_normal_speed() {
    $parrot = new AfricanParrot(0);
    $this->assertEquals(self::NORMAL_SPEED, $parrot->getSpeed());
  }

  /** @test */
  public function the_speed_of_african_parrot_with_no_coconuts_is_reduced() {
    $parrot = new AfricanParrot(1);
    $this->assertEquals(3.0, $parrot->getSpeed());
  }

  /** @test */
  public function the_african_parrot_cannot_carry_more_than_one_coconut() {
    $parrot = new AfricanParrot(2);
    $this->assertEquals(0.0, $parrot->getSpeed());
  }

  /** @test */
  public function the_nailed_norwegian_blue_parrot_cannot_move() {
    $parrot = new NailedNorwegianParrot();
    $this->assertEquals(0.0, $parrot->getSpeed());
  }

  /**
   * @dataProvider notNailedNorwegianParrots
   * @test
   */
  public function the_not_nailed_norwegian_blue_parrot_increase_with_the_voltage($voltage, $expectedSpeed) {
    $parrot = new NotNailedNorwegianParrot($voltage);
    $this->assertEquals($expectedSpeed, $parrot->getSpeed());
  }

  public function notNailedNorwegianParrots() {
    return [
      [1.5, 18.0],
      [4, 24.0]
    ];
  }

}