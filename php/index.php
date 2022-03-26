<!DOCTYPE html>
<html>

<head>
	<title>Ju Medical Center</title>
	<link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="/css/php-style.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>


	<!-- header section starts  -->

    <header class="header">
        <img src="/image/logo_med.png" alt style="height: 75px; width: 90px;">
        <a href="" class="logo">Medical Center</a>


        <nav class="navbar">
            <a href="/index.html">home</a>
            <a href="/html/services.html">services</a>
            
            <a href="/html/notice.html">Notice</a>
            <a href="/html/doctors.php">doctors</a>
            
            <a href="http://localhost:3000/chat/index.php">Chat</a>
            <a href="http://localhost:3000/php/booking.php">booking</a>
            <a href="http://localhost:3000/php/index.php">login</a>
            <a href="http://localhost:3000/php/signup.php">signup</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

	<!-- header section ends -->



	<form action="login.php" method="post">
		<h2>ADMIN LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<label>Username</label>
		<input type="text" name="uname" placeholder="Username"><br>

		<label>Password</label>
		<input type="password" name="password" placeholder="Password"><br>

		<button type="submit">Login</button>
		
	</form>
</body>

</html>