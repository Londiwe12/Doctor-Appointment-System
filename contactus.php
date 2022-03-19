
<html>
<head>
    <title>Contact Us</title>
    <style>
		
		.wrapper{
  position: relative;
  left:50%;
  right:50%;
  width: 70%;
  max-width: 500px;
  background: rgba(0,0,0,0.8);
  padding: 27px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  font-family: "Sans-serif";
  padding: 20px;

}

.wrapper .title h1{
  color: #c5ecfd;
  text-align: center;
  margin-bottom: 25px;
  font-family: ""Sans-serif"";
  font-size: 30px
}

.contact-form{
  display: flex;
  font-family: ""Sans-serif""
}

.input-fields{
  display: flex;
  flex-direction: column;
  margin-right: 4%;
  font-family: ""Sans-serif""
}

.input-fields,
.msg{
  width: 50%;
}

.input-fields .input,
.msg textarea{
  margin: 10px 0;
  background: transparent;
  border: 0px;
  border-bottom: 2px solid #c5ecfd;
  padding: 10px;
  color: #c5ecfd;
  width: 100%;
  font-size:15px
}

.msg textarea{
  height: 212px;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #c5ecfd;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #c5ecfd;
}
:-ms-input-placeholder {
  /* IE 10+ */
  color: #c5ecfd;
}

.btn {
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
	font-size:30px

}

@media screen and (max-width: 600px){
  .contact-form{
    flex-direction: column;
  }
  .msg textarea{
    height: 80px;
  }
  .input-fields,
  .msg{
    width: 100%;
  }
}
    </style>
</head>
<?php include('header.php'); ?>



	<!-- this is for donor registraton -->
	<div class="wrapper">
  <div class="title">
    <h1>Contact Us Form</h1>
  </div>
  <form class="contact-form" action="" method="post">
    <div class="input-fields">
      <input type="text" class="input" name="firstname" placeholder="Name">
      <input type="text" class="input" name="lastname" placeholder="Email Address">
      <input type="text" class="input" name="email" placeholder="Phone">
 
    </div>
    <div class="msg">
      <textarea name="comment" placeholder="Message"></textarea>
      <button type="submit"  name="submit"  class="btn"><span>send</span></button>
    </div>
  </form>
</div>
	<br/>
	<br/>
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
<!-- contact information inserting -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	
</body>
</html>

