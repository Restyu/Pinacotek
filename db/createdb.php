<?php

require_once(dirname(dirname(__FILE__)).'/app/info.php');

require_once(__ROOT__.'/db/connectdb.php');


try{

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE usuarios (

      id 				INT AUTO_INCREMENT PRIMARY KEY,
      nombre    VARCHAR(255) NOT NULL,
      email     VARCHAR(255) NOT NULL,
      pass      VARCHAR(255) NOT NULL,
      pais	   	VARCHAR(255) NULL,
      F_alta    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      F_baja	  TIMESTAMP NULL DEFAULT NULL,
      avatar    VARCHAR(255) NULL

    ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

    $pdo->exec($sql);


    $sql = "CREATE TABLE pintores (

      id 			      INT AUTO_INCREMENT PRIMARY KEY,
      nombre        VARCHAR(255) NOT NULL,
      apellido      VARCHAR(255) NOT NULL,
      nacimiento    INT NULL,
      muerte        INT NULL,
      descripcion   VARCHAR(255) NOT NULL,
      pais          VARCHAR(255) NOT NULL,
      ciudad        VARCHAR(255) NOT NULL,
      foto          VARCHAR(255) NOT NULL,
      creado        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      editado		    TIMESTAMP NULL DEFAULT NULL

    ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

    $pdo->exec($sql);


    $sql = "CREATE TABLE cuadros (

      id 			      INT AUTO_INCREMENT PRIMARY KEY,
      id_pintor     INT,
      nombre        VARCHAR(255) NOT NULL,
      year          INT NOT NULL,
      dimensiones   VARCHAR(255) NOT NULL,
      soporte       VARCHAR(255) NOT NULL,
      tema          VARCHAR(255) NOT NULL,
      estilo        VARCHAR(255) NOT NULL,
      siglo         VARCHAR(50) NOT NULL,
      foto          VARCHAR(255) NOT NULL,
      creado        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      editado		    TIMESTAMP NULL DEFAULT NULL,

      FOREIGN KEY (id_pintor) REFERENCES pintores(id)
        ON UPDATE CASCADE
			  ON DELETE SET NULL

    ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

    $pdo->exec($sql);


    $sql = "CREATE TABLE museos (

      id 			      INT AUTO_INCREMENT PRIMARY KEY,
      id_cuadro     INT,
      nombre        VARCHAR(255) NOT NULL,
      ciudad        VARCHAR(255) NOT NULL,
      año           INT NOT NULL,
      pais          VARCHAR(255) NOT NULL,
      lat			      DECIMAL (10,8) NOT NULL,
      lon			      DECIMAL (11,8) NOT NULL,
      creado      	TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

      FOREIGN KEY (id_cuadro) REFERENCES cuadros(id)
        ON UPDATE CASCADE
        ON DELETE SET NULL

    ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

    $pdo->exec($sql);


    $sql = "CREATE TABLE favoritos(

      id 			      INT AUTO_INCREMENT PRIMARY KEY,
      id_cuadro     INT,
      id_usuario    INT,
      valoracion    ENUM('1','2','3','4','5') NOT NULL DEFAULT '5',
      creado        TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
      eliminado	    TIMESTAMP NULL DEFAULT NULL,

      FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
        ON UPDATE CASCADE
        ON DELETE SET NULL,

      FOREIGN KEY (id_cuadro) REFERENCES cuadros(id)
        ON UPDATE CASCADE
        ON DELETE SET NULL

      ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

      $pdo->exec($sql);


      $sql = "CREATE TABLE login (

        id 			INT AUTO_INCREMENT PRIMARY KEY,
        id_usu  INT,
        ip      INT NOT NULL,
        fecha   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

        FOREIGN KEY (id_usu) REFERENCES usuarios(id)
          ON UPDATE CASCADE
          ON DELETE SET NULL

        ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

      $pdo->exec($sql);

      $sql = "CREATE TABLE tags (

        id 			    INT AUTO_INCREMENT PRIMARY KEY,
        id_cuadro   INT,
        texto       VARCHAR(255) NOT NULL,
        fecha   TIMESTAMP DEFAULT CURRENT_TIMESTAMP

        ) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

      $pdo->exec($sql);


}catch(PDOException $e){

      	die("No se han podido crear las tablas :". $e->getMessage());

        }
