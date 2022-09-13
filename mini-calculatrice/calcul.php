<?php 
    // init
    $result=0;
    $op1=0;
    $op2=0;
    $operations = array(
        "+" => "add",
        "-" => "sub",
        "*" => "mult",
        "/" => "div",
        "%" => "mod",
        "^" => "power"
    );
    // filter & validate
    if(
        isset($_GET["op1"]) &&
        isset($_GET["op2"]) &&
        isset($_GET["op"]) 
    ){
        // filter
        $op1 = filter_input(INPUT_GET,"op1",FILTER_SANITIZE_NUMBER_FLOAT);
        $op2 = filter_input(INPUT_GET,"op2",FILTER_SANITIZE_NUMBER_FLOAT);
        // validate
        $op1 = filter_var($op1,FILTER_VALIDATE_FLOAT);
        $op2 = filter_var($op2,FILTER_VALIDATE_FLOAT);
        if(!empty($op1) && !empty($op2)){
            $op = $_GET["op"];
            $operation = $operations[$op];
            $result = $operation($op1,$op2);
        }

    }