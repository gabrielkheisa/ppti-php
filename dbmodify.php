<?php
   $host        = "host = ec2-35-169-49-157.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dffgteh9bap75p";
   $credentials = "user = zyaevdgkdqjonw password=1dad81da15055e435ebf0d78eb7f105151dfb3258740090eddd93002e1d0e375";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   date_default_timezone_set('Asia/Jakarta'); # UTC is just an example
   

   $time = date('Y-m-d H:i:s');
   
   //UPDATE COMPANY set SALARY = 25000.00 where ID=1;

   //INSERT INTO "Sensor1" ("Suhu","Kelembapan","WaterLevel","Lat","Lon","Time","Last?")
   //VALUES ('1', '1', '1', '1', '1', '$time','1');




$sql2 =<<<EOF
SELECT "id" from "Sensor1" where "Last?"="1";
EOF;


// kyknya error di sini, echo "Retrived value : " gak mau jalan
$aaa2 = pg_query($db, $sql2);
$ret2 = pg_fetch_result($aaa2);

var_dump($aaa2);
var_dump($ret2);

//test point
echo "Retrived value : " + $ret2;

$ret2 = intval($ret2);


$sql3 =<<<EOF
UPDATE "Sensor1" set "Last?" = '0' where "id" = '$ret2';
EOF;

pg_query($db, $sql3);

$ret2 = $ret2 + 1;
$ret2 = strval($ret2);

if($ret2 == '11'){
   $ret2 == '1';
}

$sql77 =<<<EOF
UPDATE "Sensor1" set "Last?" = '1' where "id" = '$ret2';
EOF;

pg_query($db, $sql77);

$sql =<<<EOF
UPDATE "Sensor1" set "Time" = '$time' where "Last?"= '1';
EOF;



$ret = pg_query($db, $sql);
if(!$ret) {
   echo pg_last_error($db);
} else {
   echo "Records created successfully\n";
}
pg_close($db);
?>