<?php
   $mongo_conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
   
 //  echo "Connection to database successfully";
   // select a database
try {
         //Establish database connection
          $mongo_conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");
		 #print_r($mongo_conn);
        }catch (MongoDBDriverExceptionException $e) {
            echo $e->getMessage();
         echo nl2br("n");
        }

?>