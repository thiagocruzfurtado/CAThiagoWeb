<?php include('include/header.php');?> <!--including file table of header.php -->
<!-- created form gathering user input (Text, country, search, submit) and displays appropriate information -->
<div>
<form action="array.php" method="POST">

<input type="text" name="country" placeholder="search">
<input type="submit">
</form>

<a href = "index.php">Home Page / </a>
<a href = "array.php">Table of Country and Capital </a>
</div>

<?php include('include/footer.php');?> <!--including file table of footer.php -->