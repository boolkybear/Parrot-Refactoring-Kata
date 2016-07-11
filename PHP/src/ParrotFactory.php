<?php

namespace Parrot;

class ParrotFactory {

  public function build($type, $numberOfCoconuts, $voltage, $isNailed) {
    return new Parrot($type, $numberOfCoconuts, $voltage, $isNailed);
  }
}