
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
                <h1>VIEW ARTIFACTS</h1>
            </div>
            <center><div class="reg_artifacts">
            <a href="regartifacts.php"><button>REGISTER ARTIFACTS</button></a>
        </div></center>
        <div class="table">
        <center><table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DEPARTMENT</th>
                            <th>TITLE</th>
                            <th>ARTIST</th>
                            <th>DESCRIPTION</th>
                            <th>DATE ACQUIRED</th>
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
                        $sql = "SELECT b.Artifact_id,d.dName,b.Title,a.Name,b.Description,b.Date_acquired from artist a,artifact b,department d where a.Artist_id=b.Artist_id and d.Dept_id=b.Dept_id ORDER BY Artifact_id;
                        ";
                        $result=$connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                          }
                        //read data of each row
                        while($row = $result->fetch_assoc()){
                        echo "<tr>
                              <td>" . $row["Artifact_id"] . "</td>
                              <td>" . $row["dName"] . "</td>
                              <td>" . $row["Title"] . "</td>
                              <td>" . $row["Name"] . "</td>
                              <td>" . $row["Description"] . "</td>
                              <td>" . $row["Date_acquired"] . "</td>
                              <td>
                              <div class='btn_group'>
                              <a href='delartif.php?id=" . $row['Artifact_id'] . "'>Delete</a>
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