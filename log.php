<?php
    $userName = $_POST['uname'];
    $password = $_POST['psw'];

    $conn = new mysqli('localhost', 'root', '', 'electronic store');
    
	 if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect_error);
	  }else{
      $stmt = $conn ->prepare("select * from log where user = ?");
      $stmt -> bind_param("s", $userName);
      $stmt -> execute();
      $stmt_result = $stmt -> get_result();
      if($stmt_result -> num_row > 0){
      $data = $stmt_result -> fetch_assoc();
      if($data['psw'] == $password)
      {
        echo "<h2> Login Successfully</h2>";
      }else{
        echo "<h2>Invalid User Name or Password</h2>";
      }
      
        else{
          echo "<h2>Invalid User Name or Password</h2>";
        }
      }  

    }
?>