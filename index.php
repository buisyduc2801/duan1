<?php
//require tat ca cac file co trong commns
require_once'./commons/env.php';
require_once'./commons/helper.php';
require_once'./commons/connect-db.php';
//require tat ca cac file co trong controlers va models
require_file(PATH_CONTROLLER);



//dieu huong
require_once'./commons/disconnect-db.php';

?>