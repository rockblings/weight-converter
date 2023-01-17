<?php

  use Jobadssist\WeightConverter\WeightConverter;

  it('can convert kilograms to pounds correctly', function () {
      $weight = WeightConverter::kilograms(1);
      expect($weight->toPounds())->toBe(2.20462);
  });

  it('can convert kilograms to stones correctly', function () {
      $weight = WeightConverter::kilograms(1);
      expect($weight->toStones())->toBe(0.157473);
  });
