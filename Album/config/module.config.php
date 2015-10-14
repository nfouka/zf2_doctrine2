<?php


//module/Album/config/module.config.php
return array(
    'doctrine' => array(
        'driver' => array(
            'Album_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Album/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                     'Album\Entity' =>  'Album_driver'
                ),
            ),
        ),
    ),                 
 'view_manager' => array(
            'template_path_stack' => array(__DIR__ . '/../view')
     )
, 
    
    'router' => array(
      'routes'      => array(
         'write-hello-world' => array(
             'type' => 'Zend\Mvc\Router\Http\Literal', 
             'options' => array(
               'route'   => '/album',
               'defaults' => array(
                  'controller' => 'Album\Controller\Index',
                  'action'     => 'index',
                ),
                 
             ),
             
         
          ) , 
 
       )
    ),

       'modules' => array(
       'Album', 
     ),
    'controllers' => array(
         'invokables' => array(
             'Album\Controller\Index'
                        => 'Album\Controller\IndexController',
          )
    )

       ) ; 