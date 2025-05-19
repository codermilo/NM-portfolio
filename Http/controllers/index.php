<?php

$_SESSION['name'] = "Dan";

view("index.view.php", [
    'bannerHeading' => 'Home',
]);
