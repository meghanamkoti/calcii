<?php
$trans=array(array(1,2,3),array(6,7,8),array(5,8,7));

echo '<h2> matrix </h2>';

for($row=0;$row<3;$row++)
{
for($col=0;$colo<3;$col++)
{
echo " ".$trans[$row][$col];
} 
}
echo '<h2> transpose </h2>';

for($col=0;$col<3;$col++)
{
for($row=0;$row<3;$row++)
{
echo " ".$trans[$col][$row];
} 
}
