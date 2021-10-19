<?php


function make_slug($string)
{
    # code...
   $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
   return $slug;
}

