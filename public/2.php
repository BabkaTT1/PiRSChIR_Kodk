<?php
function ShellSort(&$a)
{
    if (!is_array($a) || count($a) == 0) {
        return;
    }
	$sort_length = count($a) - 1;
	$step = (int)ceil(($sort_length + 1)/2);
	// переделать на массив чисел

	do
	{
	   $i = (int)ceil($step);
	   do
	   {
	     $j=$i-$step;
	     $c=1;
	     do
	     {
	       if($a[$j]<=$a[$j+$step])
	       {
		  	$c=0;
	       }
	       else
		   {
		      $tmp=$a[$j];
		      $a[$j]=$a[$j+$step];
		      $a[$j+$step]=$tmp;
		   }
		$j=$j-1;
	     }
	     while($j>=0 && ($c==1));
	      $i = $i+1;
	    }
	    while($i<=$sort_length);
	    $step =(int) ($step/2);
	}
	while($step>0);
}
?>
<html lang="en">
    <head>
        <title>Работа 1.2 часть 2</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <?php
            $array = isset($_GET["array"]) ? $_GET["array"] : 0;
            $array = explode(',',$array);
            $num = count($array);
            echo "Ваш массив <br>";
            for($i=0; $i < $num; $i++)
            {
                echo "$array[$i] <br />";
                if (is_numeric($array[$i])){
                    $array[$i]=(int)$array[$i];
                }
            }
            echo "Отсортированный массив <br>";
            if($array != [0]){
				ShellSort($array);
			}				
            for($i=0; $i < $num; $i++)
            {
                echo "$array[$i] <br />";
            }
		
        ?>

    </body>
</html>