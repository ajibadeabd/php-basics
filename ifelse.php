<?php
//  include('./function.php');
//  require('./function.php');
// echo add(2,8);
$phrase = 'i love you';
$phrase = str_replace('love','hate',$phrase);
echo $phrase;
// $name_arry = array('name'=>'abdullah','likes'=>'taekwondo','hate'=>'stress');
$name_arry = array('name','abdullah','likes');
// echo $name_arry;
print_r ($name_arry);

// $name_arry = implode('<br>',$name_arry);
// echo($name_arry);
echo ucwords ('bring it');
echo strtolower ('ABDULLAH');
echo count($name_arry);
sort($name_arry);
print_r ($name_arry);

$x = 2;
if($x == 1){
echo ' <br /> x is 2';
}
else if( $x == 2 && $x <  3 ){
    echo ' <br /> x na 2';

}else{
    echo ' <br /> x no dea';
}
switch($x){
    case 5 :
    echo ' <br /> x no dea';
    break;
    case 2 :
        echo ' <br /> x is 2';
        break;
        default :
            echo ' <br /> x no dea';
            break;
}
if(preg_match("/[hel]/","hello",$maches)){
    echo ' <br /> hello exist ';
    echo $maches[0];
}else
echo ' <br /> hello does not exist ';


?>