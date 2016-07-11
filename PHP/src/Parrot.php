<?php

namespace Parrot;

abstract class Parrot {
  /**
   * @return float
   * @throws \Exception
   */
  abstract public function getSpeed();

  protected function getBaseSpeed() {
    return 12.0;
  }

}