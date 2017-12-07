<?php 
	include('connect.php');
	
	$conn = @new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno())
		{
			printf("unable to database: %s",mysqli_connect_error());
			exit();
		}

	$sql="SELECT image,fnamemiss,lnamemiss,date,age,mobilemiss,height,inch,build,complexion from `insertform`";

$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);

if($num_rows > 0)
{
	if($result == false)
	{
		echo"query not running";
		exit;
	}
	else
	{
		while($rowval = mysqli_fetch_array($result))
		{
			$fname=$rowval['fnamemiss'];
			$lname=$rowval['lnamemiss'];
			$date=$rowval['date'];
			$age=$rowval['age'];
			$mobilemiss=$rowval['mobilemiss'];
			$height=$rowval['height'];
			$inch=$rowval['inch'];
			$build=$rowval['build'];
			$complexion=$rowval['complexion'];
            
		echo	'	<div class="item">
					<div class="animate-box">
                    <a class="image-popup fh5co-board-img" ><img style="height:200px;width:200px;" src="data:image/jpeg;base64,'.base64_encode($rowval['image'] ).'" alt="Pic"></a>
					</div>
					<div class="fh5co-desc">Name: '.$fname.' '.$lname.'<br>Age: '.$age.'<br> Missing Since: '.$date.' <br>Build: '.$build.'<br>Height: '.$height.' feet '.$inch.' inch<br>Contact: '.$mobilemiss.'<br>Complexion: '.$complexion.'</div>
					</div>';
		}
	}
}
else
{
	echo'<div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-12 col-md-offset-12 text-center gtco-heading gtco-heading-sm" style="margin-left: 135%;">
                    <h2 style="color: darkgrey;">No Data</h2>
                </div>
            </div>
    </div>';
}


?>