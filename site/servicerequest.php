<!DOCTYPE html>
<?php

if (isset($_REQUEST["submit"])) {
	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$phone = $_POST['phone'];
	$message=$_POST['message'];
	$subject = $_POST['subject'];

	$formcontent="From: $name\nCompany: $company\nPhone: $phone\nSubject: $subject\nHow Found: $found\n\nMessage: \n$message";
	$recipient = "test@test.com";
	$mailheader = "From: $email ";



	if (!$name){
		$nameErr = "Missing name";
	}

	if (!$company){
		$companyErr = "Missing company name";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "$email is an invalid email";
	}
	if (!$message){
		$messageErr = "Please type a message to send";
	}





if (!$nameErr && !$companyErr && !$emailErr && !$messageErr){
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		echo "Thank You! Your message was sent.";
		$messageSent = "true";
}



}
?>

<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Services')").attr('class','current');
jQuery("body").attr('class','index-1');
</script>
<!--=======content================================-->

<section id="content">
	<?php include("./footer.php");?>


	<?php
	if (!$messageSent){
		$header = "  <h1>Service Request Form:</h1>
		Please fill out the following information and someone will contact you shortly: <br> <br>";
		echo "$header";
		?>


		<form class="form-horizontal" action="servicerequest.php" method="post">
			<div class="form-group">
				<label class="col-sm-2 control-label">Name:*</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" placeholder="First & Last Name">
					<?php echo "<p class='text-danger'>$nameErr</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Company Name:*</label>
				<div class="col-sm-10">
					<input type="text" name="company" class="form-control">
					<?php echo "<p class='text-danger'>$companyErr</p>";?>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email:*</label>
				<div class="col-sm-10">
					<input type="email" name="email" class="form-control">
					<?php echo "<p class='text-danger'>$emailErr</p>";?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone:</label>
				<div class="col-sm-10">
					<input type="text" name="phone" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Subject:</label>
				<div class="col-sm-10">
					<select class="form-control" name="subject">
						<option value="other" selected>Please Choose a Subject...</option>
						<option value="Service Request">Service Request</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Message:*</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="message" rows="4"></textarea>
					<?php echo "<p class='text-danger'>$messageErr</p>";?>

				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button id="submit" name="submit" type="submit" class="btn btn-default">Submit</button>
					<br>* required fields <br><br>
				</div>
			</div>
		</form>

		<?php
	}
	else {
		$header2 = "<h1>Thank you! Your message was sent.</h1>";
	}
	echo "$header2";
	?>

</section>
