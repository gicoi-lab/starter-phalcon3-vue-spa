<?php

use Phalcon\Mvc\Router;

/**
 * Register router
 */
$di->setShared('router', function () {

  $router = new Router(false);
  $router->setUriSource(
    Router::URI_SOURCE_SERVER_REQUEST_URI
  );

  $router->add(
    '/api/user',
    'index::user'
  );

// spa fallback
  $router->notFound(
    [
      'controller' => 'index',
      'action' => 'index',
    ]
  );
  $router->handle();

  return $router;
});
