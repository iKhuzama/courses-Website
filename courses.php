<?php include('db_connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>

</head>
<body>
    <div class="containor">
        <header>
                <div class="navigation">
                    <nav>
                        <ul>
                            <li style="float:left;"><h1>IT Department</h1></li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li><a href="addCourse.html">Add Course</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a id="greeting"></a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <article>
            <div class="content">
                <h2>Course</h2>
                <p>
                    <table border="1">
                        <tr style="background-color:gray; ">
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Course ID</th>
                            <th>Level</th>
                            <th>Edit course</th>
                            <th>Delete course</th>
                        </tr>
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM course");
                        if (!$result) {
                            die("Connection failed: " . mysqli_connect_error());
                            exit;
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                            $field2name = $row["course_name"];
                            $field3name = $row["course_id"];
                            $field4name = $row["level"];
                            echo "<tr> 
                                    <td>".$id."</td>
                                    <td>".$field2name."</td> 
                                    <td>".$field3name."</td> 
                                    <td>".$field4name."</td>";
                            echo "<td> <a href ='edit.php?id=$id&cn=$field2name&ci=$field3name&level=$field4name'>Edit</a>";
				            echo "<td> <a href ='delete.php?id=$id'>Delete</a>";
                            echo "</tr>";
                            }
                        


                    echo "</table>";
                    mysqli_close($con);

                    ?>
                </p>
            </div>
        </article>

        <footer>
            <p class="copyright">
                &copy; copyright2023
            </p>
        </footer>
    </div>
</body>
</html>