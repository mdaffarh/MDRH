<!DOCTYPE html>
<html>
<head>
	<title>MDRH | Comment Section</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="menu-wrapper">
		<a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="gallery.php">Gallery</a>
		<a href="guest.php"><b>Guest Book</b></a>
		<a href="contact.php">Contact</a>
	</div>
	<div class="main-wrapper">
		<div class="profile-wrapper" id="profile">
			<h2>Muhammad Daffa Rizmawan Harahap</h2>
		</div>
		<div class="right-wrapper" id="about">
            <div class="table-wrapper">
                <h2 class="table-header">Comments</h2>
                <table>
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Comment</td>
                    </tr>
                    <?php
                    include'connector.php';
                    $no=1;
                    $data=mysqli_query($connector,"select * from tbl_data");
                    while($d=mysqli_fetch_array($data)){
                    ?>
                    <tr>
	                    <td><?php echo $no++;?></td>
	                    <td><?php echo $d['name'];?></td>
	                    <td><?php echo $d['email'];?></td>
	                    <td><?php echo $d['comment'];?></td>
                    </tr>
                    <?php
	                    }
                    ?>
                </table>
            </div>
		</div>
	</div>
	<footer>
		<p> Copyright &#169; MDRH</p>
	</footer>
</body>
</html>