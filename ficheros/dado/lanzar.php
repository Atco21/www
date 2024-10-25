<?php 
session_start();
header("Location: ./dado.php");

if(!isset($_SESSION['num'])){
    $_SESSION['num'] = random_int(0,6);
}else{
    $_SESSION['num'] = random_int(0,6);
}


$_SESSION['num'] = random_int(0,6);




if($_SESSION['array'][$_SESSION['num']]== 1){
    $_SESSION['fallos']+=1;
}else{
    $_SESSION['array'][$_SESSION['num']]=1;
    $_SESSION['aciertos']+=1;
}


echo $num;

print_r($_SESSION['array']);

$_SESSION['mDado']=true;


?> 