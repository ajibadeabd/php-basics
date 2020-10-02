<?php
$jsondata  = file_get_contents("./movie.json");
$json  = json_decode($jsondata,true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ui>
        <?php
        foreach($json['movies'] as $key => $value){
            echo '<li>'.$value['title'].'</li>';
            echo '<li>'.$value['year'].'</li>';
            echo '<li>'.$value['genre'].'</li>';
            echo '<li>'.$value['director'].'</li>';
        };
        $stuffs = array('bed','chair','table');
        foreach($stuffs as $key=>$stuff){
            echo $key.' '.$stuff.'<br/>';
        };
        for($i=0; $i<=2; $i++){
            echo $stuffs[$i].'<br/>';
        }
        ?>
        </ui>
    </div>
</body>
</html>
<!-- "title":"commando",
            "year":"1729",
            "genre":"action",
            "director":"brad traversy" -->