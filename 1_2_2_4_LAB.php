<?php
$name = 'Dave';
echo ('Simple single-quoted string with variable $name.'),PHP_EOL;
echo ('Single-quoted string with characters escaping \''.$name.'\'.'),PHP_EOL;
echo ("Simple double-quoted string with variable  {$name}."),PHP_EOL;
echo ("Double-quoted string with escape sequances   '{$name}'."),PHP_EOL;
print PHP_EOL;

//String with HereDoc/NowDoc syntax 

echo(<<<Here
String with HereDoc 
- "$name"
Here
),PHP_EOL;

echo(<<<'Now'
String with NowDoc 
- "$name"
Now
);





?>