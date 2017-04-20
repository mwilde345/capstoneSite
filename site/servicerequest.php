<!DOCTYPE html>

<?php
// Just making sure the fields are set.
$messageSent = false;
$nameErr     = "";
$companyErr  = "";
$emailErr    = "";
$messageErr  = "";
$header2     = "";
if (isset($_REQUEST["submit"])) {
	$name=$_POST['name'];
	$company=$_POST['company'];
	$email=$_POST['email'];
	$phone = $_POST['phone'];
	$message=$_POST['message'];
	$subject = $_POST['subject'];
	
	
	$formcontent="From: $name\nCompany: $company\nPhone: $phone\nSubject: $subject\n\nMessage: \n$message";
	$recipient = "nathangcoats@gmail.com";
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
		$messageSent = true;
	}
}
?>
<head>
<link rel="stylesheet" href="./style.css">  <!-- this line might be uncecessary leaving it just in case --> 
<?php include("./header.php");?>
<script type="text/javascript">
jQuery("nav .sf-menu li[class='current']").attr('class','');
jQuery("nav .sf-menu li").filter(":contains('Services')").attr('class','current');
jQuery("body").attr('class','index-1');
</script>

</head>
<!--=======content================================-->
<body>
<section id="content">




<?php
	if ( !$messageSent ) {
		$header = "  <h1>Service Request Form:</h1>
		Please fill out the following information and someone will contact you shortly: <br> <br>";
		echo "$header";
	?>


<div class="container">
	<form action="servicerequest.php" method="post">
		<label>Name:*</label>
		<input type="text" name="name" placeholder="First & Last Name">
		<?php echo "<p class='text-danger'>$nameErr</p>";?>


		<label>Company Name:*</label>
		<input type="text" name="company">
		<?php echo "<p class='text-danger'>$companyErr</p>";?>


		<label>Email:*</label>
		<input type="email" name="email">
		<?php echo "<p class='text-danger'>$emailErr</p>";?>


		<label>Phone:</label>
		<input type="text" name="phone">

		<label>Subject:</label>
		<select name="subject">
			<option value="other" selected>Please Choose a Subject...</option>
			<option value="Service Request">Service Request</option>
			<option value="Other">Other</option>
		</select>


		<label>Message:*</label>
		<textarea name="message" rows="4"></textarea>
		<?php echo "<p class='text-danger'>$messageErr</p>";?>

		<button id="submit" name="submit" type="submit">Submit</button>
		<br>* required fields <br><br>

	</form>
</div>

	<?php
	}
	else {
		$header2 = "<h1>Thank you! Your message was sent.</h1>";
	}
	echo "$header2";
	?>
<?php include("./footer.php");?>
</section>
</body>
