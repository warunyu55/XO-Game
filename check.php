<?php 
function check($value){
    $round = $value;
    $t = [];
    for($r= 0; $r<$round;$r++){
        $x = 10+($r*10+1);
        for($i = 0; $i<$round ;$i++){
            array_push($t,$x);
            $x++;
        }
    }
    for($r= 0; $r<$round;$r++){
        $x = 10+($r+1);
        for($i = 0; $i<$round ;$i++){
            array_push($t,$x);
            $x+=10;
        }
    }
    $x = 11;
    for($i = 0; $i<$round ;$i++){
        array_push($t,$x);
        $x+=11;
    }
    $x= 10+$round;
    for($i = 0; $i<$round ;$i++){
        array_push($t,$x);
        $x+=9;
    }
    $chuck = array_chunk($t,$round);
return json_encode($chuck);
}
?>