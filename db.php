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
?>