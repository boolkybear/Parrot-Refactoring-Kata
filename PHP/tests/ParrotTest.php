<?php

namespace Parrot;

class ParrotTest extends \PHPUnit_Framework_TestCase{
  const NORMAL_SPEED = 12.0;

  /** @test */
  public function the_speed_of_european_parrot_is_normal_speed() {
    $parrot = new EuropeanParrot();
    $this->assertEquals(self::NORMAL_SPEED, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_of_african_parrot_with_one_coconut() {
    $parrot = new AfricanParrot(1);
    $this->assertEquals(3.0, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_of_african_parrot_with_two_coconuts() {
    $parrot = new AfricanParrot(2);
    $this->assertEquals(0.0, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_of_african_parrot_with_no_coconuts() {
    $parrot = new AfricanParrot(0);
    $this->assertEquals(self::NORMAL_SPEED, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_norwegian_blue_parrot_nailed() {
    $parrot = new NailedNorwegianParrot();
    $this->assertEquals(0.0, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_norwegian_blue_parrot_not_nailed() {
    $parrot = new NotNailedNorwegianParrot(1.5);
    $this->assertEquals(18.0, $parrot->getSpeed());
  }

  /** @test */
  public function get_speed_norwegian_blue_parrot_not_nailed_high_voltage() {
    $parrot = new NotNailedNorwegianParrot(4);
    $this->assertEquals(24.0, $parrot->getSpeed());
  }
}