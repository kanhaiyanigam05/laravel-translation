<?php

use Faker\Generator;
use Kanhaiyanigma05\Translation\Language;

$factory->define(Language::class, function (Generator $faker) {
    return [
        'language' => $faker->word,
        'name' => $faker->word,
    ];
});
