<?php

namespace Parrot;

class ParrotFactory {

  public function build($type, $numberOfCoconuts, $voltage, $isNailed) {
    switch ($type){
      case ParrotTypeEnum::EUROPEAN:
        return new EuropeanParrot();
    }
    return new Parrot($type, $numberOfCoconuts, $voltage, $isNailed);
  }
}