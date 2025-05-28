<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$articles = $db->query('select * from newsArticles')->get();


view("index.view.php", [
    'articles' => $articles,
]);
