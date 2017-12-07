<?php 
	include('include/header.php');
	?>

	<!*****************************************************>
	

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Missing People Index</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div style="background-color: #333333;"><div id="fh5co-main">
        <div class="container" >

            <div class="row">

        <div id="fh5co-board" data-columns>

		
	<?php include('include/fetching.php'); ?>


            
        </div>
        </div>
       </div>
    </div>

        <!-- jQuery -->
    <script src="js2/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js2/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js2/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js2/jquery.waypoints.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js2/jquery.magnific-popup.min.js"></script>
    <!-- Salvattore -->
    <script src="js2/salvattore.min.js"></script>
    <!-- Main JS -->
    <script src="js2/main.js"></script>
	</div>

	<!**********************************************************!>

<div class="gtco-section">
    <form method="post" action="filterindex.php">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
                    <h2>Advanced Search</h2>
                </div>
            </div>
            <div class="row form-group">
                            <div class="col-md-6">
                                <label for="subject">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name of Missing Person">
                            </div>
                            <div class="col-md-6">
                                <label for="subject">Missing Since</label>
                                <input type="date" id="MissingSince" class="form-control" placeholder="Missing Since">
                            </div>                
            </div>
            <div class="row form-group">
                            <div class="col-md-4">
                                <label for="Age">Age</label>
                                <input type="text" name="age" class="form-control" placeholder="Age">
                            </div>
                            <div class="col-md-4">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    <option value="other">Other</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <label>Eye Color</label>
                            <select class="form-control">
                                <option value="null">Please Select</option>
                                <option value="Brown">Brown</option>
                                <option value="Blue">Blue</option>
                                <option value="Green">Green</option>
                                <option value="Gray">Gray</option>
                                <option value="Hazel">Hazel</option>
                            </select>
                        </div>
            <div class="row form-group">
                        <div class="col-md-6">
                            <label>Build</label>
                            <select class="form-control">
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
                            <select class="form-control">
                                <option value="null">Please Select</option>
                                <option value="Fair">Fair</option>
                                <option value="Dark Skinned">Dark Skinned</option>
                                <option value="Freckled">Freckled</option>
                                <option value="Spotted">Spotted</option>
                                <option value="Wrinkled">Wrinkled</option>
                            </select>
                        </div>
            </div>
            <div class="form-group" align="center">
                            <input type="submit" id="submitmiss" value="Search" class="btn btn-primary">
                </div>


        </div>
    </form>
</div>

	<div class="gtco-cover gtco-cover-sm" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Did you saw someone before.</h1>
							<h2>Help us to find vulnerable missing people by <a href="reportSighting.php" ">Reporting us.</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include('include/footer.php'); ?>
