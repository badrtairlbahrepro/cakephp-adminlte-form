<?php
/**
 * Routes configuration for AdminLteForm plugin
 */

declare(strict_types=1);

use Cake\Routing\RouteBuilder;

return function (RouteBuilder $builder) {
    $builder->prefix('form', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'FormBuilder', 'action' => 'index']);
        $builder->connect('/contact', ['controller' => 'FormBuilder', 'action' => 'contact']);
        $builder->connect('/register', ['controller' => 'FormBuilder', 'action' => 'register']);
        $builder->connect('/profile', ['controller' => 'FormBuilder', 'action' => 'profile']);
        $builder->connect('/search', ['controller' => 'FormBuilder', 'action' => 'search']);
        $builder->connect('/multiple', ['controller' => 'FormBuilder', 'action' => 'multiple']);
        $builder->connect('/switches', ['controller' => 'FormBuilder', 'action' => 'switches']);
    });
};
