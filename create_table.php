<?php
 include('config.php');
 $sql_login="CREATE TABLE [dbo].[sa_login]
(
	[user_id] INT NOT NULL PRIMARY KEY IDENTITY,
    [user_name] VARCHAR(50) NOT NULL,
    [user_pass] VARCHAR(50) NOT NULL,
    [email] VARCHAR(MAX) NULL
)";

$sql_user_detail="CREATE TABLE [dbo].[sa_user_details]
(
	[user_id] INT NOT NULL PRIMARY KEY IDENTITY,
    [f_name] VARCHAR(50) NOT NULL,
    [l_name] VARCHAR(50) NOT NULL,
    [mobile] BIGINT NULL,
    [street_number] INT NULL,
    [street_name] VARCHAR(MAX) NULL,
    [suburb] VARCHAR(MAX) NULL,
    [city] VARCHAR(50) NULL,
    [country] VARCHAR(50) NULL
)";

$sql_addresses= "CREATE TABLE [dbo].[sa_addresses]
(
	[address_id] INT NOT NULL PRIMARY KEY IDENTITY,
    [user_id] INT NOT NULL,
    [name] VARCHAR(MAX) NOT NULL,
    [street_number] INT NULL,
    [street_name] VARCHAR(MAX) NULL,
    [suburb] VARCHAR(MAX) NULL,
    [city] VARCHAR(50) NULL,
    [country] VARCHAR(50) NULL
)
"
if(sqlsrv_query($conn,$sql_login)){
  if(sqlsrv_query($conn,$sql_user_detail)){
    if(sqlsrv_query($conn,$sql_addresses)){
      header('location: index.php');
    }
    else{
        die("Addresses Database creation Failed");
    }

  }
  else{
      die("User Details Database creation Failed");
  }
}
else {
  die("Login Database creation Failed");
}


  ?>
