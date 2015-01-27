<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'MovieApi\Controller\Movie' => 'MovieApi\Controller\MovieController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'movie-api' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/movie-api[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'MovieApi\Controller\Movie',
                        'action' => 'index',
                    ),
                )
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'movie-api' => __DIR__ . '/../view',
        ),
    ),
);
