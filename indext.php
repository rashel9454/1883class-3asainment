<?php 

//Question 01//
//Let’s make a result grade calculator//

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;
$total_mark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;

$All_subject= 4;
$total_mark /= $All_subject;
$avarej_mark=true;
if($total_mark = true){
    echo "you got A grate";
}
else{
    echo "You Faild";
}
echo "<br>" ;

//Question 02//
//Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight.//

$power_button=1;
switch($power_button){
    case '1':
        echo "start your bike";
        break;
    case '2':
        echo "not start your bike";
}
echo "<br>" ;
$break=1;
switch($break){
    case '1':
        echo "break";
        break;
    case '2':
        echo "gear";
}
echo "<br>" ;
$signal=1;
switch($signal){
    case '1':
        echo "start signal light";
        break;
    case '2':
        echo "stop signal light";
}
echo "<br>" ;
$headlight=1;
switch($headlight){
    case '1':
        echo "start head light";
        break;
    case '2':
        echo "stop signal light";
}