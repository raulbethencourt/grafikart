<?php
function nav_item(string $position, string $name, string $linkClass = '')
{
  $classe = 'nav-item';
  if ($_SERVER['SCRIPT_NAME'] === $position) {
    $classe .= ' active';
  }
  return <<<HTML
  <li class="$classe">
    <a class="$linkClass" href="$position">$name</a>
  </li>
HTML;
}

function set_nav(string $linkClass = ''): string
{
  $path = '/grafikart/php/html/';
  return
    nav_item($path . 'index.php', 'Acceuil', $linkClass) .
    nav_item($path . 'contact.php', 'Nous contacter',$linkClass);
}

