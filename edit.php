<?php 
require('db_connnection.php');

$id =$_REQUEST['id'];
$cn =$_REQUEST['cn'];
$cid =$_REQUEST['ci'];
$level =$_REQUEST['level'];



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Edit Course</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="script.js"></script>
	</head>
	<body>
		<div class="containor">
			<header>
				<div class="navigation">
					<nav>
						<ul>
							<li style="float: left"><h1>IT Department</h1></li>
							<li><a href="index.html">Home</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="addCourse.html">Add Course</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a id="msg"></a></li>
						</ul>
					</nav>
				</div>
			</header>

			<article>
				<div class="content">
					<h2>Edit Course</h2>
					<form action="" method="POST">
						<p>
							<label>
								Course Name: <br />
								<input
									type="text"
									name="cname"
                                    value=<?php echo $cn ?>
									required
								/>
							</label>
						</p>

						<p>
							<label>
								Course ID: <br />
								<input
									type="text"
									name="cid"
                                    value=<?php echo $cid ?>
									required
								/>
							</label>
						</p>

						<p>
							<label>
								Level: <br />
								<label><input type="radio" name="level" value="1" <?php $level==="1" ? print('checked="checked"') : print("") ?> /> 1</label
								><br />
								<label><input type="radio" name="level" value="2" <?php $level==="2" ? print('checked="checked"') : print("") ?> /> 2</label
								><br />
								<label><input type="radio" name="level" value="3" <?php $level==="3" ? print('checked="checked"') : print("") ?> /> 3</label
								><br />
								<label><input type="radio" name="level" value="4" <?php $level==="4" ? print('checked="checked"') : print("") ?> /> 4</label
								><br />
								<label><input type="radio" name="level" value="5" <?php $level==="5" ? print('checked="checked"') : print("") ?> /> 5</label
								><br />
								<label><input type="radio" name="level" value="6" <?php $level==="6" ? print('checked="checked"') : print("") ?> /> 6</label
								><br />
								<label><input type="radio" name="level" value="7" <?php $level==="7" ? print('checked="checked"') : print("") ?> /> 7</label
								><br />
								<label><input type="radio" name="level" value="8" <?php $level==="8" ? print('checked="checked"') : print("") ?> /> 8</label>
							</label>
						</p>

						<p>
							<input type="submit" value="Edit" name="submit_btn"/>
							<input type="reset" value="Reset" />
						</p>
					</form>
				</div>
			</article>

			<footer>
				<p class="copyright">&copy; copyright2021</p>
			</footer>
		</div>

        <?php 

        if(isset($_REQUEST['submit_btn']))
        {

            $coursename	= $_POST['cname'];
            $courseID	= $_POST['cid'];
            $level		= $_POST['level'];


            $sql = "update course set course_id = '$courseID' , course_name = '$coursename' , level = $level where id = $id";

            $query = mysqli_query($con,$sql);

            if(!$query){
                die("Connection failed: " . mysqli_connect_error());
            }else{
                echo("course has been updated");
            }

            mysqli_close($con);

            header("Location: courses.php");

        }

        ?>

	</body>
</html>
