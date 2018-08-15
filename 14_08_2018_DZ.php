<?php
defined(MAIL )|| define(MAIL, 'zhmutov@i.ua');
$s = strpos(MAIL, '@');

echo (MAIL) . PHP_EOL;

echo(substr(MAIL, 0,$s)).PHP_EOL;
echo(substr(MAIL, $s+1));