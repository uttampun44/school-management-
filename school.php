<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>

    <!-- link stylesheet -->
    <link rel="stylesheet" href="./sass/school.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />

  
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
                      <button id="add" name="submit" value="submit">Add</button>
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
            
        <section class="table-section">
                     <table id="mytable">
                         <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Date Of Birth</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile Number</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>Class</th>
                            <th>Update</th>
                            <th>Delete</th>
                         </tr>

                         <tr>
                            <?php
                              require('./Database/connection.php');

                              $dataconn = new Database();

                            $displaytable = $dataconn->Display();
                               
                            if($displaytable->num_rows > 0){
                                while ($result = mysqli_fetch_assoc($displaytable)) {
                                    # code...
                            ?>
                         <td><?php echo $result['ID']; ?></td>
                         <td><?php echo $result['FullName']; ?></td>
                         <td><?php echo $result['DateofBirth']; ?></td>
                         <td><?php echo $result['Gender']; ?></td>
                         <td><?php echo $result['Address']; ?></td>
                         <td><?php echo $result['Mobilenumber']; ?></td>
                         <td><?php echo $result['MothersName']; ?></td>
                         <td><?php echo $result['Fathersname']; ?></td>
                         <td><?php echo $result['Class']; ?></td>
                         <td><a href="update.php?update=<?php echo $result['ID']?>" id="update" name="update">UPDATE</a></td>
                         <td><a href="delete.php?id=<?php echo $result['ID']?>" id="delete">DELETE</a></td>
                         </tr>
                        <?php
                                }
                    } ?>
                     </table>
        </section>
    </main>

    <?php 
    require('./Database/connection.php');

      $dataconn = new Database();
    
        //   adding querry

        if(isset($_POST['submit'])){
               $fullname = $_POST['fullname'];
               $dateofbirth = date('Y-m-d', strtotime($_POST['dateofbirth']));
               $gender = $_POST['gender'];
               $address = $_POST['address'];
               $mobile = $_POST['mobile'];
               $fathers = $_POST['father'];
               $mothers = $_POST['mother'];
               $class = $_POST['class'];


               $dataconn->Add($fullname, $dateofbirth, $gender, $address, $mobile, $fathers, $mothers, $class);

               if($dataconn){
                 
                  echo("Data Inserted Successfull");
                  header('location: school.php');
                  return true;
                
               }
        }

     ?>
  
    
  <script text="javascript">
          $(document).ready( function () {
    $('#myTable').DataTable();
} );
       </script>
</body>
</html>