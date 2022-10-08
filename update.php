<?php
require('./Database/connection.php');

$idupdate = $_GET['update'];

$update = new Database();

$updatetable = $update->Display($idupdate);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- link stylesheet -->
    <link rel="stylesheet" href="./sass/school.css">
</head>
<body>
<main>
        <h1>School Management System</h1>
        <div class="school-form">
                 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" autocomplete="off">
                 <div class="student-info-one">
                      <label>FullName</label><input type="text" id="one" name="fullname" />
                      <br>
                      <label>Date Of Birth</label><input type="date" id="one" name="dateofbirth"/>
                      <br>
                      <label>Gender</label> &nbsp; &nbsp;<label>Male:</label><input type="radio" name="gender" value="male"> &nbsp; &nbsp;<label>Female</label><input type="radio" name="gender" value="female">
                      <br>
                      <label>Address</label> &nbsp; &nbsp;<input type="text" id="one" name="address">
                      <br>
                      <button id="add" name="submit" value="update">Update</button>
                    </div>
                    
                    <div class="student-info-two">
                       <label>Mobile Number</label><input type="text" id="second" name="mobile">
                       <br>
                       <label>Father's Name</label><input type="text" id="second" name="father">
                       <br>
                       <label>Mother's Name</label><input type="text" id="second" name="mother">
                       <br>
                       <label id="class">Class</label><select id="second" name="class"><option value="one"> class 1</option>
                       <option value="second"> class 2</option>
                       <option value="three"> class 3</option>
                       <option value="four"> class 4</option>
                       <option value="five"> class 5</option>
                       <option value="six"> class 6</option>
                       <option value="seven"> class 7</option>
                       <option value="eight"> class 8</option>
                       <option value="nine"> class 9</option>
                       <option value="ten"> class 10</option>
                       <option value="eleven"> class 11</option>
                       <option value="tweleve"> class 12</option>
                    </select>
                    </div>
                 </form>
        </div>
</main>
</body>
</html>