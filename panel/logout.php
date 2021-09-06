<?php
require "../config.php";

//Sessionu silelim
session_destroy();

header("Location: login");