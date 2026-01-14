<?php

$config = require('config.php');
$db = new Database($config['database'], 'root', '');

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];
  $body = $_POST['body'];

  if (strlen($body) === 0) $errors['body'] = 'A body is required';

  if (strlen($body) > 100) $errors['body'] = 'Maximum note length is 100 characters';

  if (empty($errors)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
      ]);
  }

  
}

require 'views/noteCreate.view.php';

