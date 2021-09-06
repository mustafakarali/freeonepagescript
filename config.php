<?php

//Session'u başlatalım
session_start();

$request_uri = $_SERVER["REQUEST_URI"];
$matches = explode("/",$request_uri);
$matches = array_values(array_filter($matches));
unset($matches[0]);
$panelControl = @$matches[1];
$page = @$matches[2];

if ($panelControl == "panel" && $page != "login"){
    if (!isset($_SESSION["login"]) || $_SESSION["login"] != 1){
        header("Location: login");
    }
}

//Veritabanı Bilgilerimizi Tanımlayalım
const HOST = "localhost";
const DBNAME = "onepage";
const USERNAME = "root";
const PASSWORD = "";
const CHARSET = "utf8";



//Veritabanı Bağlantımız Kuralım
try{
    $db = new  PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=".CHARSET,USERNAME,PASSWORD);
}catch (PDOException $e){
    die($e->getMessage());
}



$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
define("URL",$protocol.$_SERVER["SERVER_NAME"]."/one-page/");

const ADMIN_ASSETS = URL . "assets/admin/";
const FRONT_ASSETS = URL . "assets/front/";

require "helper.php";



