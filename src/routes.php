<?php

// Routes

$app->get('/', 'sampleController:get')->setName('sample');
$app->post('/', 'sampleController:post')->setName('sample');
