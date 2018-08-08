<?php
//Integer + String of Numbers
echo ('Integer "12" + String of Numbers "12 month" = ');
var_dump(12 + "12 month");

//String without Numbers + Integer
echo ('String without Numbers "cat and dog" + Integer "1234" = ');
var_dump("cat and dog" + 1234);

//String without Numbers + String without Numbers
echo ('String without Numbers "cat and dog" + String without Numbers "like fish and mouse" = ');
var_dump("cat and dog" + " like fish and mouse");

//Float + Integer
echo ('Float "124.3568" + Integer "6" = ');
var_dump(124.3568 + 6);


//Float Numbers comparison

echo ('Float "24.35" + Float "6.05" = ');
var_dump(24.35 + 6.05);
echo ('But Float "24.35" + Float "6.05" <>  30.4');
var_dump((24.35 + 6.05) == 30.4);









?>