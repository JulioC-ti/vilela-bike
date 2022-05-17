<?php
session_start(); //Definiu a sessão
spl_autoload_register(function($classe){
   require $classe.".php";
});