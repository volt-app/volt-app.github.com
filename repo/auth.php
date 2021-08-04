<?php
$adminkey = 'X112DF8OZ9';
$adminkey2 = 'ZSD116H9J1K0';
$adminkey3 = 'S4DC58I9ICH2';
$form = htmlspecialchars($_POST['form1']);
if ($form == $adminkey){
header('Location: https://google.com/');
} else {
echo("Wrong Key, Try Again");
}
if ($form == $adminkey2){
header('Location: https://google.com/');
} else {
echo("Wrong Key, Try Again");
}
if ($form == $adminkey3){
header('Location: https://google.com/');
} else {
echo("Wrong Key, Try Again");
}

?>