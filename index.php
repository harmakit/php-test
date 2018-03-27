<?php

try{

  include_once(__DIR__ . "/db.php");
  include_once(__DIR__ . "/migration/photosMigration.php");
  $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

  switch ($request_uri[0]) {
    case '/':
      require './routes/home.php';
      break;
    case '/photos':
      require './routes/photos.php';
      break;
    case '/upload':
      require './routes/upload.php';
      break;
    default:
      header('HTTP/1.0 404 Not Found');
      require './routes/404.php';
      break;
  }
} catch(Exception $e) {
  echo $e->getMessage(), PHP_EOL;
  echo $e->getTraceAsString(), PHP_EOL;
}

