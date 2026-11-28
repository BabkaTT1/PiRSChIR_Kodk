<?php
function commandExists($cmd) {
    if ($cmd==""){
        return false;
    }
    $result = shell_exec(sprintf('which %s', escapeshellarg($cmd)));
    return !empty($result);
}
?>

<html lang="en">
    <head>
        <title>Работа 1.2 часть 3</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <?php
        
        $command = isset($_GET["command"]) ? $_GET["command"] : "";
        echo 'Ваша команда:',$command,'<br>';
        if ( stripos($command,"rm")===false){
            $output;
            commandExists($command)?exec($command, $output):$output=["Это не команда "];
            $c = count($output);
            for ($i=0; $i<$c; $i++){
                echo $output[$i],"<br>";
            }
        }
        else{
            echo "Мы не можем её выполнить";
        }
        
   ?>

    </body>
</html>