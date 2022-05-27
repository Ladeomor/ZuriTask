<!-- <html>
    <body>
    <form action="user_data.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>

<label for= "DOB"> Date of Birth: <input type="date" id="birthday" name="birthday"><br>

Gender: <input type="text" name="gender"><br>

<label>Country: <input type="text" name="country"><br></label>


<input type="submit">
</form>
</body>
    <html> -->

    <html>
<body>

<form action="user_data.php" method="post">
Name: <input type="text" name="name"><br>
<?php echo"<br>"; ?>
E-mail: <input type="text" name="email"><br>
<?php echo"<br>"; ?>

<label for= "DOB"> Date of Birth: <input type="date" id="birthday" name="birthday"><br>
<?php echo"<br>"; ?>

Gender: <input type="text" name="gender"><br>
<?php echo"<br>"; ?>

<label>Country: <input type="text" name="country"><br></label>
<?php echo"<br>"; ?>


<input type="submit">
</form>

</body>
</html> 