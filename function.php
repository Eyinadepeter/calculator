<?php

    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
    }
    if($operation == 'add'){
        echo $num1 + $num2;
    }
    if($operation == 'subtract'){
        echo $num1 - $num2;
    }
    if($operation == 'divide'){
        echo $num1 / $num2;
    }
    if($operation == 'multiply'){
        echo $num1 * $num2;
    }