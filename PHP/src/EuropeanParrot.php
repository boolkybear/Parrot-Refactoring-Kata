<?php

namespace Parrot;

class EuropeanParrot extends Parrot {
  /**
   * EuropeanParrot constructor.
   */
  public function __construct() {
  }

  public function getSpeed() {
    return $this->getBaseSpeed();
  }

}