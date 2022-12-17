<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/app/router.php";

get('/', 'app/views/index.php');
get('/dalbaeb/$name', 'app/controllers/index.php');

