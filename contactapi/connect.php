<?php

  //db credentials
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'contact_manager');

  // Connect with the db
  function connect()
  {
      $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      if(mysqli_connect_errorno())
      {
          die("Failed to connect:" . mysqli_connect_errorno());
    }

      mysqli_set_charset($connect, "utf8");

      return $connect;
  }

  $con = connect();
?>