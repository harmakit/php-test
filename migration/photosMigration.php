<?php

    $sql = "CREATE TABLE IF NOT EXISTS
      photos (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      author VARCHAR(20) NOT NULL,
      photo VARCHAR(40) NOT NULL,
      comment VARCHAR(100),
      createdAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP);";

    $mysqli->query($sql);

