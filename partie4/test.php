<?php
function recursFacto ($count,$numb2Facto,$result){

        if($count == $numb2Facto){
            echo $count.' ';
            echo $numb2Facto;
            $test = "test";
            var_dump($test);
            echo $result;
            echo '<br>';
            return $result;
            
           
        }else{
            $result = $count * $result;
            $count++;
            return recursFacto($count,$numb2Facto,$result);
        };

    };

    echo recursFacto(1,10,1);

    ?>