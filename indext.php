<?php 

//Question 01//
//Let’s make a result grade calculator//
$SubjectA = 72;
$SubjectB = 82;
$SubjectC= 93;
$SubjectD = 65;
$total_marks = $SubjectA = 72+ $SubjectB+$SubjectC+$SubjectD;
$average_mark = $total_marks /4; 

echo "average mark: $average_mark";

echo "<br>";
$marks =  $average_mark;

if( $marks <= 32 )
{ echo "result :F grade";}
elseif( ($marks >= 33) && ($marks <= 39) )
{echo "result  grade";}
elseif( ($marks >= 40) && ($marks <= 49) )
{echo "result :C grade";}
elseif( ($marks >= 50) && ($marks <= 59) )
{echo "result :B grade";}
elseif( ($marks >= 60) && ($marks <= 69) )
{echo "result :A- grade";}
elseif( ($marks >= 70) && ($marks <= 79) )
{echo "result :A grade";}
elseif( ($marks >= 80) && ($marks <= 100) )
{echo "result :C grade";}
else{echo "invalid Number";}

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