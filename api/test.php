<?php
   $host        = "host = aws-0-ap-southeast-1.pooler.supabase.com";
   $port        = "port = 6543";
   $dbname      = "dbname = postgres";
   $credentials = "user = postgres.wddaafydssisnxirwhil password=agic_ones@2025";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>