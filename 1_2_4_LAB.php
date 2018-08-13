<?php

echo("Directory: '".__dir__."'").PHP_EOL;
echo('FileName: "'.__File__.'"').PHP_EOL;
echo('LineNumber: "'.__Line__.'"').PHP_EOL;

defined(constants)||define(constants, "Test Constants!");
echo(constants).PHP_EOL;

if (!defined(one))
{
	define(two, '"one_two_three!"');
	echo(two).PHP_EOL;
}

?>