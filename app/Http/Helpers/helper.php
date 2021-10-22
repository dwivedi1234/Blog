<?php


function make_slug($string)
{
    # code...
   return  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));

}

