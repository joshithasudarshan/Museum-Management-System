<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/viewaf.css">
    <title>ADMIN PAGE</title>
</head>
<body>
    <section class="header">
        
        <div class="container">
            <nav>
                <a href="adminin.php"><img src="./images/logo.png" alt="" class="logo"></a>
                <div class="top-bar">
                    <ul>
                        <li><a class="active" href="adminin.php">HOME</a></li>
                        <li><a href="viewartifacts.php">VIEW ARTIFACTS</a></li>
                        <li><a href="viewartist.php">VIEW ARTIST</a></li>
                        <li><a href="viewtick.php">VIEW TICKETS</a></li>
                        <li><a href="viewfeed.php">VIEW FEEDBACK</a></li>
                        <li><a href="viewuser.php">VIEW USERS</a></li>
                        <li><a href="vieweemp.php">VIEW EMPLOYEE</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="text-box">
                <h1>VIEW EMPLOYEES</h1>
            </div>
        <div class="table">
        <center><table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>PNUMBER</th>
                            <th>ADDRESS</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "museum";
                        //create connection
                        $connection = new mysqli($servername,$username,$password,$database);
                        //check connection
                        if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                          }
                        
                        //read data from database
                        $sql = "SELECT id,name,email,pnumber,address FROM ualogin WHERE user_type='admin'";
                        $result=$connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                          }
                      
                        //read data of each row
                        while($row = $result->fetch_assoc()){
                        echo "<tr>
                              <td>" . $row["id"] . "</td>
                              <td>" . $row["name"] . "</td>
                              <td>" . $row["email"] . "</td>
                              <td>" . $row["pnumber"] . "</td>
                              <td>" . $row["address"] . "</td>
                              <td>
                              <div class='btn_group'>
                              <a href='delemp.php?id=" . $row["id"] . "' class='btn-warning'>Delete</a>
                              </div>
                              </td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table></center>
            </div>
    </section>

</body>
</html>