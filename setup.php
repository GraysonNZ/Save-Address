<?php

	require_once('config.php');

	 if($_SERVER["REQUEST_METHOD"]== "POST"){


      	$uid =$_POST['UID_name'];
      	$pwd =$_POST['password'];
	  	  $database=$_POST['database'];
        $server=$_POST['servername'];
				if (isset($uid || $pwd || $database || $server )){
				$fp=fopen('config.php','w');
				fwrite($fp, '<?php
				$connectionInfo = array("UID" => '.$uid.', "pwd" => '. $pwd. ', "Database" => '.$database.', "" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
				$serverName = '.$server.';
				$conn = sqlsrv_connect($serverName, $connectionInfo);
				?>');
				fclose($fp);
        }
        else {
          $message="Please fill all the fields";
        }
    }
    <!DOCTYPE html>
    <head>
    <title>Database Setup</title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrap/dist/js/bootstrap.min.js"/>
    </head>
    <body>
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up to save address</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form id= "register" role="form" action="" method="post">

			    					<div class="form-group">
			                <input type="text" name="UID_name" id="UID_name" class="form-control input-sm" placeholder="UID">
			    					</div>

                    <div class="form-group">
                      <input type="text" name="server" id="server" class="form-control input-sm" placeholder="Server Name">
                    </div>

                    <div class="form-group">
                      <input type="text" name="database" id="database" class="form-control input-sm" placeholder="Database Name">
                    </div>

			    					<div class="form-group">
			    						<input type="text" name="password" id="pass" class="form-control input-sm" placeholder="Database Password">
			    					</div>


			    			<?php
							 if(isset($message)){
								print "<label>".$message."</label>";
								}
							?>
			    			<input type="submit" value="Submit" class="btn btn-info btn-block">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>
