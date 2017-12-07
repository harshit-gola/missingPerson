<?php	
include('./include/connect.php');
	$conn = @new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if(mysqli_connect_errno())
	{
		printf("Unable to connect to database: %s",mysqli_connect_error());
		exit();
	}
	if(isset($_POST['fname']))
	{
	
	//$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$fnamemiss = $_POST['fnamemiss'];
	$lnamemiss = $_POST['lnamemiss'];
	$time = $_POST['time'];
	$date = $_POST['date'];
	$loc = $_POST['loc'];
	$cctv = $_POST['cctv'];
	$look = $_POST['look'];
	$wear = $_POST['wear'];
	$circum = $_POST['circum'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mail = $_POST['mail'];
	$number = $_POST['number'];
	$add = $_POST['add'];
	$pin = $_POST['pin'];
	}
	
	if(!empty($_POST['fname']))
	{
 $sqlq = "SELECT * FROM `reportform` WHERE `fname`='".$fname."'";
 
	
	$resultq=$conn->query($sqlq);
	
	if($resultq == false)
	{
		echo "<script>alert('Query not running')</script>";
		exit;
	}
	else
	{		
		$sql="INSERT INTO `reportform`(fnamemiss,lnamemiss,time,date,loc,cctv,look,wear,circum,fname,lname,mail,number,address,pin) VALUES('$fnamemiss','$lnamemiss','$time','$date','$loc','$cctv','$look','$wear','$circum','$fname','$lname','$mail','$number','$add','$pin')";
	
	$result=$conn->query($sql);
	
	if($result == true)
	{
		echo'<script>alert("DATA INSERTED SUCCESSFULLY")</script>';
	}
	else
	{
		echo"<script>alert('Query error')</script>";
	}
	}
	}
?>			
			<div class="col-md-12 animate-box">

					<form method="post">
						<div class="row form-group">
							<h4>Name of Missing Person</h4>
							<div class="col-md-6">

								<label for="fname">First Name</label>
								<input type="text" name="fnamemiss" class="form-control" placeholder="First name">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lnamemiss" class="form-control" placeholder="Last name">
							</div>
						</div>

						<div class="row form-group">
							<h4>Time and Date</h4>
							<div class="col-md-6">
								<label for="fname">What time was it when you saw the missing person? (hh:mm)(*)</label>
								<input type="time" name="time" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="lname">What date did you see the missing person? (dd/mm/yyyy)(*)</label>
								<input type="date" name="date" class="form-control">
							</div>
						</div>

						<div class="row form-group">
							<h4>Location</h4>
							<h5>Please be as specific as you can with geographical location.</h5>
							<div class="col-md-6">
								<label for="fname">Where did you see the missing person?(*)</label>
								<textarea class="form-control" name="loc"></textarea>
							</div>
							<div class="col-md-6">
								<label for="fname">Is there any CCTV at the location?</label>
								<select class="form-control" name="cctv">
								<option value="null">Select Option</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
								<option value="null">Don't Know</option>
								</select>
							</div>
						</div>	
					
						<div class="row form-group">
							<h4>Appearance</h4>
							<h5>What did the missing person look like?</h5>
							<h5>Please fill in as much detail as you remember. For example, please include age, height, build, ethnic appearance, hair colour and style, eye colour, tattoos, piercings or any other distinctive feature they have.</h5>
							
							<div class="col-md-10">
								<label for="fname">What did the missing person look like?(*)</label>
								<textarea class="form-control" name="look"></textarea>
							</div>
							<br>
							<h5 class="col-md-12">*Please fill in as much detail as you remember. For example please include clothing, jewellery and any belongings that they had with them.</h5>
							<br>
							<div class="col-md-10">
								<label for="lname">What were they wearing?</label>
								<textarea class="form-control" name="wear"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<h4>Circumstances</h4>
							<h5>Please fill in as much detail as you remember. For example, what were they doing when you saw them? What made you notice them? Were they with anyone?</h5>
							<div class="col-md-10">
								<label for="fname">What were the circumstances?(*)</label>
								<textarea class="form-control" name="circum"></textarea>
							</div>
						</div>

						<div class="row form-group">
							<h3>About You</h3>
							<h5>All information we receive is passed to the police. Your identity will remain confidential to Missing People unless you indicate that it is ok for us to pass your details on to the police. The police often do want to speak to the person who saw the missing person to check details and help them find the person</h5>
							<div class="col-md-6">

								<label for="fname">First Name</label>
								<input type="text" name="fname" class="form-control" placeholder="First name">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" class="form-control" placeholder="Last name">
							</div>
							<div class="col-md-6">

								<label for="fname">Email Address</label>
								<input type="email" name="mail" class="form-control" placeholder="abc@gmail.com">
							</div>
							<div class="col-md-6">
								<label for="lname">Contact Number</label>
								<input type="text" name="number" class="form-control">
							</div>
							<div class="col-md-6">

								<label for="fname">Address Detail</label>
								<textarea name="add" class="form-control"></textarea>
							</div>
							<div class="col-md-6">
								<label for="lname">Pin Code</label>
								<input type="text" name="pin" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<center><input type="submit" value="Submit" class="btn btn-primary"></center>
						</div>

					</form>		
				</div>