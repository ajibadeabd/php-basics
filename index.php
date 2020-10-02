<?php include 'cars.php';
$car1=new Car('toyota','camry','red');

// echo 
echo $car1->getcolor();
echo $car1->start();


for($i=1;$i<4;$i++){
echo "<br/>$i<br/>";
}



// $widgetsLeft = 10;
echo "for loop <br/>";

for($widgetsLeft=10;$widgetsLeft>=0;$widgetsLeft--){
    echo  'Selling a widget...';
    echo "done. There are $widgetsLeft widgets left. <br/>";
   
   
}
echo "We ’ re right out of widgets!";

echo " <br/>while loop";
$widgetsLeft=10;
while ( $widgetsLeft > 0 ) {
    echo  ' <br/> Selling a widget...';
    $widgetsLeft-- ;
    echo "done. There are $widgetsLeft widgets left. ";
   }
   echo " <br/> We ’ re right out of widgets!";


   $startTime = microtime( true );
   echo microtime(true)."<br/>";//return the micro time in 
   echo microtime(false)."<br/>";//return the a whole number time
// for ( $num = 1; microtime( true ) < $startTime + 0.0001; $num = $num * 2 ) {
//  echo "Current number: $num <br/>" ;
// }
// echo "Out of time!";
$widge = 23;
$plenty = "We have plenty of widgets in stock.";
$few = "Less than 10 widgets left. Time to order some more!";
echo ( $widge >= 10 ) ? $plenty.'<br/>' : $few.'<br/>';

$type = 2;

echo $type ==='2'? true:false ;
$mapSize=11;
echo $homeX = rand ( 0, $mapSize-1 );
echo $homeX = rand ( 5, $mapSize-1 );
$width = 1;
$length = 1;
do {
 $width++;
 $length++;
 $area = $width * $length;
} while ( $area <901 );
echo "The smallest square over 1000 sq ft in area is $width ft x $length ft.";
echo "$area";
$num1 = 0;
$num2 = 1;
$num2 ;
echo '<br/>  fibomical series';

for($i=0;$i<10;$i++){
// echo $i.'kl'.'<br/>';
$sum = $num1 + $num2;
$num1 = $num2;
$num2 = $sum;
echo '<br/>'.$sum.'<br/>';

}
for($i=1;$i<=13;$i++){
echo '<br/>'.'<br/>';
if($i==2 || $i==3)
echo "$i is a prime number";
elseif($i%2!==0 && $i%3!==0)
echo "$i is a prime number";
elseif($i%2!==0)
echo "$i is a odd number";
elseif($i%2==0)
echo "$i is a even number";
}
?>