<?php 
include "header.php"; 
?>

	<!--page header-->
	<div class="container-fluid text-center">
		<h1>Sitter Listings Page</h1>
	</div>
	
	<!--create listing-->
	<div class="text-center">
	<label>Create Listing:</label>
	</div>
	<div class="container-fluid">
		<div class="form-inline text-center">
			<textarea type="text" class="form-control listing-text-input" placeholder="Listing Description" rows="5"></textarea>
		</div>
		<div class="form-inline text-center">
		</br>
			<button type="button" class="submit-listing-btn">Post</button>
		</div>
	</div>
	
	<!--listings-->
	<!--pictures need to have links to the respective profile page-->
	<div class="container text-center">
		<a class="profile-link" href="sitterprofile.php">
			<div class="row listing-row">
				<div class="col-md-3">
					<div class="profile-picture">
						<img class="img-rounded" src="images/profile-pic.jpg" height="120px">
						<p>Fname Lname</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="listing-details">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</a>
		
		<a class="profile-link" href="sitterprofile.php">
			<div class="row listing-row">
				<div class="col-md-3">
					<div class="profile-picture">
						<img class="img-rounded" src="images/profile-pic.jpg" height="120px">
						<p>Fname Lname</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="listing-details">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</a>
		
		<a class="profile-link" href="sitterprofile.php">
			<div class="row listing-row">
				<div class="col-md-3">
					<div class="profile-picture">
						<img class="img-rounded" src="images/profile-pic.jpg" height="120px">
						<p>Fname Lname</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="listing-details">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</a>
	</div>
</article>	
<?php 
include "footer.php"; 
?>
