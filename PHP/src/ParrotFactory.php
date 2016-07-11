<?php

namespace Parrot;

class ParrotFactory {

  public function build($type, $numberOfCoconuts, $voltage, $isNailed) {
    switch ($type) {
      case ParrotTypeEnum::EUROPEAN:
        return new EuropeanParrot();
      case ParrotTypeEnum::AFRICAN:
        return new AfricanParrot($numberOfCoconuts);
      case ParrotTypeEnum::NORWEGIAN_BLUE:
        return $isNailed
          ? new NailedNorwegianParrot()
          : new NotNailedNorwegianParrot($voltage);
    }
    throw new \Exception("There is no valid type");
  }
}