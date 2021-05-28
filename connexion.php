<?php

  function MyConnection()
  {
      $serveur = "localhost";
      $login="root";
      $database = "marketplace";
      
      $connBDD=new mysqli($serveur,$login,'');
      
      if ($connBDD->connect_error) {
        die("Connection failed: " . $connBDD->connect_error);
      }

      $conn = mysqli_select_db($connBDD, $database);

      if (!$conn)
      {
          die("base non trouve");
      }

      return $connBDD;

  }
?>