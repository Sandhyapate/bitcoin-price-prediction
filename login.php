<?php
						 if(isset($_POST['sub']))
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
				         {	 
								   
																																																																																																																																																																																																																																																																																																																																																																																											
							  $name=$_POST['uname'];
							 $password=$_POST['pass'];
							 $file='login data.csv';
								 $fh=fopen($file,'r');
								 while(list($user,$word)=fgetcsv($fh,10240,','))
								 {
							 
							              if($name==$user and $password==$word)
										    {
											header('location:student_detail.php');

											}
											
											else
											print("Please enter correct user name and password to proceed");
                                 }

						  }
?>
<style>

body{background:url('IMAGE.jpg')no-repeat;background-size:100% 100%;}
table{margin-left:60px;margin-top:200px;font-size:20px;background:rgba(255,255,255,0);}

h4{color:black;font-size:30px;text-align:center;}
</style>


<body>


																   
			<table>
					     <form  method="post">
			                       
	                          <tr><th><h4>USER LOGIN</h4></th></tr>			 
						            <tr><td>  Username</td><td> <input type="text" name="uname"required/></td></tr>
									<tr><td>  Password</td><td> <input type="password" name="pass"required/></td></tr>
                                    <td></td></tr>									
                                    <tr><td></td></tr>									
									<BUTTON><tr><th> <input type="submit" name="sub" value="Login"/></th></tr>
		    </BUTTON>         

          			</form>
</table>						 

</body>