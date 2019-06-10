<?php

/**
 * @tests/unit/templates/fixtures/usuarios.php
 *
 * @var $faker \Faker\Generator
 * @var $index integer
 */

return [
    'nombre' => $faker->unique()->userName,
    'password' => Yii::$app->security->generatePasswordHash('password_' . $index),
    'poblacion' => $faker->email,
];
