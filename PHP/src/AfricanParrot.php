<?php

namespace Parrot;

class AfricanParrot extends Parrot {
  private $numberOfCoconuts;

  /**
   * AfricanParrot constructor.
   * @param $numberOfCoconuts
   */
  public function __construct($numberOfCoconuts) {
    $this->numberOfCoconuts = $numberOfCoconuts;
  }

  public function getSpeed() {
    return max(0, $this->getBaseSpeed() - $this->getLoadFactor() * $this->numberOfCoconuts);
  }

  private function getLoadFactor() {
    return 9.0;
  }

}