<?php
/**
 * Routes configuration for AdminLteForm plugin
 */

declare(strict_types=1);

use Cake\Routing\RouteBuilder;

return function (RouteBuilder $builder) {
    $builder->scope('/form-builder', function (RouteBuilder $builder) {
        $builder->connect('/', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'index']);
        $builder->connect('/contact', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'contact']);
        $builder->connect('/register', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'register']);
        $builder->connect('/profile', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'profile']);
        $builder->connect('/search', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'search']);
        $builder->connect('/multiple', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'multiple']);
        $builder->connect('/switches', ['plugin' => 'AdminLteForm', 'controller' => 'FormBuilder', 'action' => 'switches']);
    });
};
