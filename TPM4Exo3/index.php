<?php
    $result="";
    if(isset($_GET["email"])){
        $email = filter_input(INPUT_GET,"email",FILTER_SANITIZE_EMAIL);
        if(!empty($email)){
            $result .="E-mail: $email <br>";
            $result .="Navigateur: {$_GET['user_agent']}";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3</title>
</head>
<body>
    <h3>
        <?=$result?>
    </h3>
   <form action="" method="get">
        <label for="">E-mail</label>
        <input type="hidden" value="<?=$_SERVER["HTTP_USER_AGENT"]?>" name="user_agent">
        <input type="email" name="email" id=""><br>
        <button type="submit">Valider</button>
   </form> 
   <script>
function fnBrowserDetect(){
                 
                 let userAgent = navigator.userAgent;
                 let browserName;
                 
                 if(userAgent.match(/chrome|chromium|crios/i)){
                     browserName = "chrome";
                   }else if(userAgent.match(/firefox|fxios/i)){
                     browserName = "firefox";
                   }  else if(userAgent.match(/safari/i)){
                     browserName = "safari";
                   }else if(userAgent.match(/opr\//i)){
                     browserName = "opera";
                   } else if(userAgent.match(/edg/i)){
                     browserName = "edge";
                   }else{
                     browserName="No browser detection";
                   }
                 
                  document.querySelector("input[type=hidden]").value= browserName ;         
          }   
          fnBrowserDetect(); 
   </script>
</body>
</html>
