<?php

function inclusionAutomatique($classe) {
    
    require_once($classe . '.php');
}

spl_autoload_register("inclusionAutomatique");

