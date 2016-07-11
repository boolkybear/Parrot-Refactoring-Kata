<?php

namespace Parrot;

class NorwegianParrot extends Parrot {
  private $isNailed;
  private $voltage;

  /**
   * NorwegianParrot constructor.
   * @param $isNailed
   * @param $voltage
   */
  public function __construct($isNailed, $voltage) {
    $this->isNailed = $isNailed;
    $this->voltage = $voltage;
  }

  public function getSpeed() {
    return $this->isNailed ? 0 : $this->getBaseSpeedWith($this->voltage);
  }

  private function getBaseSpeedWith($voltage) {
    return min(24.0, $voltage * $this->getBaseSpeed());
  }

}