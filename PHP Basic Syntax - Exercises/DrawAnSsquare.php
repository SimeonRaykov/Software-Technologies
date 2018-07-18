<?php

for($row=1; $row<=9; $row+=1){


    for($col=1; $col<=5; $col+=1){

        if($row==1 || $row==9 || $row==5){

            echo "<button style='background-color: blue'>1</button>";

        }
        if($col!=1 && $row>1 && $row<5){

            echo "<button>0</button>";

        }
        if($col==1 && $row>1 && $row<5){
            echo "<button style='background-color: blue'>1</button>";
        }
        if($col!=5 && $row>5 && $row<9){

            echo "<button>0</button>";

        }
        if($col==5 && $row>5 && $row<9){
            echo "<button style='background-color: blue'>1</button>";
        }




    }



    echo "<br>";
}

?>