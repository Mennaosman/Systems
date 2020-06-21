 <!--  login form -->
 <head>
 	<link rel="stylesheet" type="text/css" href="cssloginstyle.css">
 </head>
<body>
<div class="container">
 <div class="login">
   <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" name="page">
	     username:<input type="text" name="username" value="" placeholder="username"></br>
         password:<input type="password" name="userpassword" value="" placeholder="password"></br>
   
	 
         <p class="submit">  <input type="submit" value="login" name="commit"></p>
     </form>
     </div>
      <div class="login-help">
      	<p>Forget your password<a href="#"> Click here to reset it</a> </p>
      </div>

     </div>
</body>
  <?php
		   session_start();
		   if ($_SERVER['REQUEST_METHOD']=='POST')
		   {
		   //to get the data from the login form
		    $username = $_POST['username'];
		    $userpassword=$_POST['userpassword'];
		    $_SESSION['username']=$username;
		    //database connection file
		      include'database connection.php';
		      //database connection function
			 $con = dbconnect();
		       // to search about the inter user name
			 $sql = "SELECT password,admisions FROM users WHERE name='$username'";    
		       $res=$con->query($sql);
		       // check function about the enter user 
			       function checkFunction($res ,$userpassword)
			    {
				      if ($res -> num_rows >0)
				      {
				         
					       while ($row=$res->fetch_assoc()) 
					       {
			                // if the user name found get its password and admisions
					       	$x = $row["password"];
					        $y = $row["admisions"];
					        $_SESSION['admisions']=$y;
					       
					       //check if the user password is right 
					       	if($x==$userpassword ){
			                    // the user page
								header('REFRESH:1;URL= login.php');
			                  }
			                  //if the user password is wrong
			                  elseif ($x!='$userpassword') {
			                  	echo  "Error: you enter a wrong password please try again ";
			                  }
					      } 
				       }
				      else //if there is not found the enter user
				      { echo "Sorry:there is no user called ";}
			    }  $con->close();
			     // calling the check function
			       checkFunction($res,$userpassword);
			       
			   }
			
   ?>