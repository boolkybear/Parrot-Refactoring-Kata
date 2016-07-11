<?php

namespace Parrot;

class Parrot {
  /** @var int ParrotTypeEnum */
  private $type;
  /** @var int */
  private $numberOfCoconuts = 0;
  /** @var  double */
  private $voltage;
  /** @var  boolean */
  private $isNailed;

  /**
   * Parrot constructor.
   * @param int $type
   * @param int $numberOfCoconuts
   * @param float $voltage
   * @param bool $isNailed
   */
  public function __construct($type, $numberOfCoconuts, $voltage, $isNailed) {
    $this->type = $type;
    $this->numberOfCoconuts = $numberOfCoconuts;
    $this->voltage = $voltage;
    $this->isNailed = $isNailed;
  }

  /**
   * @return float
   * @throws \Exception
   */
  public function getSpeed() {
    throw new \Exception("Should be unreachable");
  }

  protected function getBaseSpeed() {
    return 12.0;
  }

}