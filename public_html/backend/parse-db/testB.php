<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/23/16
 * Time: 10:29 PM
 */

require_once "../../../vendor/autoload.php";
session_start();
print_r($_SESSION);

use Parse\ParseUser;

$parseUser = ParseUser::getCurrentUser();