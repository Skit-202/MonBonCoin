<?php
require_once "Math/Calculator.php";
require_once "Utils/logger.php";

use Math\Calculator;
use Math\Logger;

$result = Calculator::add(11, 24);
Logger::log("Le résultat de l'addition est $result");