<?php

if(isset($_GET["route"]))
{
    $route = $_GET["route"];
}
else
{
    $route = "list";
}

require "templates/layout.phtml";

?>
