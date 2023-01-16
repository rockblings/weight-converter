<?php

  it('can convert kilograms to pounds correctly', function () {
    $weight = Jobadssist\WeightConverter\WeightConverterClass::kilograms(1);
    expect($weight->toPounds())->toBe(2.20462);
  });