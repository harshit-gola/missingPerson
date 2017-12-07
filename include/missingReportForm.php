	<!-Linked To missingReport.php- >
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
	
	$file = $_POST['image'];
	//$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$relation = $_POST['relation'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$postcode = $_POST['postcode'];
	$mobile = $_POST['mobile'];
	$mail = $_POST['mail'];
	$fnamemiss = $_POST['fnamemiss'];
	$lnamemiss = $_POST['lnamemiss'];
	$nick = $_POST['nick'];
	$age = $_POST['age'];
	$dob = $_POST['dob'];
	$relationmiss = $_POST['relationmiss'];
	$addressmiss = $_POST['addressmiss'];
	$postcodemiss = $_POST['postcodemiss'];
	$mobilemiss = $_POST['mobilemiss'];
	$date = $_POST['date'];
	$height = $_POST['height'];
	$inch = $_POST['inch'];
	$build = $_POST['build'];
	$complexion = $_POST['complexion'];
	$eye = $_POST['eye'];
	$glasses = $_POST['glasses'];
	}
	
	if(!empty($_POST['fname']))
	{
 $sqlq = "SELECT * FROM `insertform` WHERE `fname`='".$fname."'";
 
	
	$resultq=$conn->query($sqlq);
	
	if($resultq == false)
	{
		echo "query not running";
		exit;
	}
	else
	{		
		$sql="INSERT INTO `insertform`(image,fname,lname,relation,address,state,postcode,mobile,mail,fnamemiss,lnamemiss,nick,age,dob,relationmiss,addressmiss,postcodemiss,mobilemiss,date,height,inch,build,complexion,eye,glasses) VALUES('$file','$fname','$lname','$relation','$address','$state','$postcode','$mobile','$mail','$fnamemiss','$lnamemiss','$nick','$age','$dob','$relationmiss','$addressmiss','$postcodemiss','$mobilemiss','$date','$height','$inch','$build','$complexion','$eye','$glasses')";
	
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
	<div class="gtco-section">
		<div class="gtco-container">
			<h1>Report a Missing Person Form</h1>
					<h4>Please provnamee as much detail as possible. Once we have processed your form, a member of the team will contact you to introduce themselves and talk you through what happens next.</h4>
					<hr size="2">
			<div class="row">

<!- Form ->
			<form method="post" enctype="mutlipart/form-data">
				<div class="col-md-6 animate-box">
					
					
						<div class="row form-group">
							<h3>Information for Publicity Assistance</h3>
							<div class="col-md-12">
								Please upload a high quality image of the missing person (nameeally head & shoulders only)
								<input type="file" name="image" id="image" class="form-control" accept="image/*" required>
							</div>
						</div>

						<div class="row form-groupo">
							<h3>About You</h3>
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" name="fname" class="form-control" placeholder="Your firstname" required >
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" class="form-control" placeholder="Your lastname"  required>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="realtionship">Relationship</label>
								<select class="form-control" name="relation"  >
  									<option value="null">-Please Select-</option>
  									<option value="Family Member">Family Member</option>
  									<option value="Friend">Friend</option>
  									<option value="Social Worker">Social Worker</option>
  									<option value="Other">Other</option>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Address</label>
								<textarea name="address" class="form-control" placeholder="Your Address" required></textarea>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="message">State</label>
								<select name="state" class="form-control"  >
									<option value="">---Select State---</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Orissa">Orissa</option>
									<option value="Pondicherry">Pondicherry</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttaranchal">Uttaranchal</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="West Bengal">West Bengal</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="postalCode">Postal Code</label>
								<input type="text" class="form-control" name="postcode" required>
							</div>
						</div>
						<div class="row form-groupo">
							<div class="col-md-6">
								<label for="fname">Mobile No.</label>
								<input type="text" name="mobile" class="form-control" placeholder="Mobile Number" required>
							</div>
							<div class="col-md-6">
								<label for="lname">Email Address</label>
								<input type="email" name="mail" class="form-control" placeholder="Email Address" required>
							</div>
						</div>
					
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<div class="row form-group">
						<h3>Missing Person Details</h3>
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" name="fnamemiss" class="form-control" placeholder="firstname" required>
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" name="lnamemiss" class="form-control" placeholder="Lastname" required>
							</div>
							<div class="col-md-8">
								<label for="Nname">Nick Name</label>
								<input type="text" class="form-control" name="nick" name="Nname" placeholder="Nick Name">
							</div>
					</div>
					<div class="row form-group">
							<div class="col-md-4">
								<label for="Age">Age</label>
								<input type="Number" name="age" class="form-control" placeholder="Age" required>
							</div>
							<div class="col-md-8">
								<label for="fname">Date Of Birth</label>
								<input type="date" name="dob" class="form-control" required>
							</div>
							<div class="col-md-4">
								<label>Gender</label>
								<select name="relationmiss" class="form-control" required>
  									<option value="other">Other</option>
  									<option value="Male">Male</option>
  									<option value="Female">Female</option>
								</select>
							</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
								<label for="subject">Address</label>
								<textarea name="addressmiss" class="form-control" placeholder="Address" required></textarea>
						</div>
						<div class="col-md-6">
								<label for="postalCode">Postal Code</label>
								<input type="text" name="postcodemiss" class="form-control" required>
						</div>
						<div class="col-md-6">
							<label>Mobile Number</label>
							<input type="text" name="mobilemiss"   class="form-control" required>
						</div>
						<div class="col-md-8">
								<label for="fname">Date of Last Contact</label>
								<input type="date" name="date" class="form-control" required>
						</div>
					</div>
					<div class="row form-group">
						<h4>Missing person description - Appearance</h4>
						<div class="col-md-4">
								<label for="fname">Height</label>
								<input type="number" name="height" min="0" max="8" name="M_heightFt" class="form-control" placeholder="Ft" required>
						</div>
						<div class="col-md-4">  
							 	<input type="number" name="inch" min="0" max="11" name="M_heightIns" class="form-control" placeholder="ins" required>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<label>Build</label>
							<select name="build" class="form-control"  >
  								<option value="null">Please Select</option>
  								<option value="Atheletic">Atheletic</option>
  								<option value="Obese">Obese</option>
  								<option value="Large">Large</option>
  								<option value="Medium">Medium</option>
  								<option value="Small">Small</option>
  								<option value="Stocky">Stocky</option>
  								<option value="Slim">Slim</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>Complexion</label>
							<select name="complexion" class="form-control"  >
  								<option value="null">Please Select</option>
  								<option value="Fair">Fair</option>
  								<option value="Dark Skinned">Dark Skinned</option>
  								<option value="Freckled">Freckled</option>
  								<option value="Spotted">Spotted</option>
  								<option value="Wrinkled">Wrinkled</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>Eye Color</label>
							<select name="eye" class="form-control"  >
  								<option value="null">Please Select</option>
  								<option value="Brown">Brown</option>
  								<option value="Blue">Blue</option>
  								<option value="Green">Green</option>
  								<option value="Gray">Gray</option>
  								<option value="Hazel">Hazel</option>
							</select>
						</div>
						<div class="col-md-6">
							<label>Glasses</label>
							<select name="glasses" class="form-control"  >
  								<option value="null">Please Select</option>
  								<option value="Contact Lens">Contact Lens</option>
  								<option value="Lens">Lens</option>
  								<option value="null">None</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group" align="center">
							<input type="submit" value="Submit" class="btn btn-primary">
				</div>
			</form>

<!- End of form ->			
			</div>
		</div>
	</div>