<?php

use Faker\Generator;
use Kanhaiyanigam05\Translation\Language;
use Kanhaiyanigam05\Translation\Translation;

$factory->define(Translation::class, function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => $faker->word,
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});

$factory->state(Translation::class, 'group', function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => $faker->word,
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});

$factory->state(Translation::class, 'single', function (Generator $faker) {
    return [
        'language_id' => function () {
            return factory(Language::class)->create()->id;
        },
        'group' => 'single',
        'key' => $faker->word,
        'value' => $faker->sentence,
    ];
});
