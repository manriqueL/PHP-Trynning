<?php
session_start();

$variableGenerica = "Variable generica";

$_SESSION["variable_persistente"] = "Variable persistente/activa";

echo $variableGenerica;

echo $_SESSION["variable_persistente"];




























?>