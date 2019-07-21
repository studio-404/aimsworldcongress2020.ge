<?php 
    defined('DIR') OR exit;

    $out = array(
        "Error" => array(
            "Code"=>1, 
            "Text"=>l("error"),
            "Details"=>"",
            "error_list"=>array()
        ),
        "Success"=>array(
            "Code"=>0, 
            "Text"=>"",
            "Details"=>""
        )
    ); 

    if(isset($_POST["type"]))
    {
        $type = $_POST["type"];

        switch ($type) {
            case 'sendRequests':
                $params = @$_POST;
                if(
                    $_SESSION["token"]!=$params["token"]
                ){
                    $errorCode = 1;
                    $successCode = 0;
                    $errorText = "Error";                   
                    $successText = "";   
                }else{
                    $emailBody="";

                    foreach ($params as $key => $value) {
                        if($key=="type" || $key=="token"){ continue; }
                        $emailBody .= sprintf("<strong>%s:</strong> <span>%s</span><br>", $key, $params[$key]);
                    }

                    g_send_email(array(
                        "sendTo"=>"giorgigvazava87@gmail.com",
                        "subject"=>"Aims world congress 2020 - Registion",
                        "body"=>$emailBody
                    ));

                    $errorCode = 0;
                    $successCode = 1;
                    $errorText = "";                   
                    $successText = "Operation has been successfull"; 
                }

                $out = array(
                    "Error" => array(
                        "Code"=>$errorCode, 
                        "Text"=>$errorText,
                        "Details"=>""
                    ),
                    "Success"=>array(
                        "Code"=>$successCode, 
                        "Text"=>$successText,
                        "Details"=>""
                    )
                );
                break;
        }
    }

    echo json_encode($out);
    exit();