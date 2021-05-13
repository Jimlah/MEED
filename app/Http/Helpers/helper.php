<?php

function pagePath($path)
{
  $path = explode('/', parse_url($path)['path']);
  array_shift($path);
  $path = array_map(function ($x) {
    return ucfirst($x);
  }, $path);
  $paths = implode(" > ", $path);
  return "$paths";
}
