<?php
 /* $dataNasc ='12/01/2017';
 $dataNasc = explode("/", $dataNasc);
     //get age from date or birthdate
     $age = (date("md", date("U", mktime(0, 0, 0, $dataNasc[0], $dataNasc[1], $dataNasc[2]))) > date("md")
       ? ((date("Y") - $dataNasc[2]) - 1)
       : (date("Y") - $dataNasc[2]));

    echo $age;

    date_default_timezone_set('Asia/Calcutta'); 

    $bday = new DateTime('12/12/2000');
// $today = new DateTime('00:00:00'); - use this for the current date
$today = new Date(d/m/y); // for testing purposes

$diff = $today->diff($bday);


printf('%d years, %d month, %d days', $diff->y, $diff->m, $diff->d);

$dateOfBirth = "17-04-2017";
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
echo $diff->m."<br>";
echo 'Age is '.$diff->format('%y')."<br>";

$var = "20/04/2012";
$var_d=date("Y-m-d", strtotime($var) );

echo $var_d."<br>";

    */

$dataNasc = "17-04-1889";

$dateOfBirth=date("Y-m-d", strtotime($dataNasc) );
$today = date("Y-m-d");

$diff = date_diff(date_create($dateOfBirth), date_create($today));
if($diff->format('%y')>0){
  $age=$diff->format('%y')." anos";

        echo "Anos:".$age;
  }else{
$age=$diff->m." meses";

       echo "Meses:".$age;
   }

 ?>
