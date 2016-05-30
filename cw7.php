<form method = 'POST' enctype = 'multipart/form-data'>
    <input type = 'file' name = 'userfile'>
    <input type = 'submit' value='Загрузить'>
</form>
<?php
$userLinks = fopen($_FILES['userfile']['tmp_name'], 'r');
$db = fopen("db.txt", "r+");
$black = fopen("blacklist.txt", "r");
while(!feof($userLinks)) {
    $line = fgets($userLinks);
    $toAdd = true;
    fseek($black, 0);
    fseek($cb, 0);
    while(!feof($db)) {
        if(fgets($db) == $line) {
            $toAdd = false;
            break;
        }
    }
}
if($toAdd) {
    while(!feof($black)) {
        if(fgets($black) == $line){
            $toAdd = false;
            break;
        }
    }

}
if($toAdd) {
    rwrite($db, $line);
}
fclose($black);
fclose($db);
fclose($userLinks);
?>