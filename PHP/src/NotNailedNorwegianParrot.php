<?php

namespace Parrot;

class NotNailedNorwegianParrot extends NorwegianParrot {
  /**
   * @var int
   */
  private $voltage;

  /**
   * MobileNorwegianParrot constructor.
   * @param int $voltage
   */
  public function __construct($voltage) {
    $this->voltage = $voltage;
  }

  public function getSpeed() {
    return min(24.0, $this->voltage * $this->getBaseSpeed());
  }
}