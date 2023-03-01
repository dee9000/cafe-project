
   <?php
         include 'navigation.php';
         include_once 'connection.php';
   
                $query = "SELECT * FROM dotunpat_spa_cafe_feedback"; //select all data from my database
                $result = mysql_query($query); //store in a result var*/
                
               
   ?>
   



     <div class="container-fluid pt-5">
       <div class="jumbotron jumbotron-admin mt-5">
        <div class="register-header text-center">
            <a href="index.php"><img src="img/logo2.png" height="120" width="120" alt="logo" class="animate__animated animate__rotateIn"></a>
            <h1>Employee Feedback</h1>
            <div class="jumbotron jumbotron-admin-content">
            <table class="table table-sm table-light">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">rate_your_experience</th>
                    <th scope="col">name_of_staff</th>
                    <th scope="col">rate_service_staff</th>
                    <th scope="col">feedback</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($rows = mysql_fetch_assoc($result))  //while we have data submitted spew out rows of the data submitted
                    { 
                    ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['rate_your_experience'] ?></td>
                        <td><?php echo $rows['name_of_staff'] ?></td>
                        <td><?php echo $rows['rate_service_staff'] ?></td>
                        <td><?php echo $rows['feedback'] ?></td>
                    </tr>
                <?php
                     }
                ?>
                   
                </tbody>
                </table>
            </div>
            </div>

       </div>
       </div>
   </body>

   </html>