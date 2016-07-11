<?php

namespace Parrot;

class ParrotFactory {

  public function build($type, $numberOfCoconuts, $voltage, $isNailed) {
    switch ($type) {
      case ParrotTypeEnum::EUROPEAN:
        return new EuropeanParrot();
      case ParrotTypeEnum::AFRICAN:
        return new AfricanParrot($numberOfCoconuts);
    }
    return new Parrot($type, $numberOfCoconuts, $voltage, $isNailed);
  }
}