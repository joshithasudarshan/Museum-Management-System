<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/artifacts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>ARTIFACTS</title>
</head>
<body>
    <section class="header">
        
        <div class="container">
            <nav>
                <a href="index.html"><img src="./images/logo.png" alt="" class="logo"></a>
                <div class="top-bar">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a class="active" href="artifacts.php">ARTIFACTS</a></li>
                        <li><a href="artist.php">ARTIST</a></li>
                        <li><a href="booking.php">BUY TICKET</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="profile.php">PROFILE</a></li>
                    </ul>
                </div>
            </nav>
            <div class="text-box">
                <h1>ARTIFACTS</h1>
            </div>
            </section>
            <section class="tables">
            <div class="table">
            <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>ARTIST</th>
                            <th>DESCRIPTION</th>
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
                        $sql = "SELECT b.Artifact_id,b.Title,a.Name,b.Description from artist a,artifact b where a.Artist_id=b.Artist_id ";
                        $result=$connection->query($sql);

                        if (!$result) {
                            die("Invalid query: " . $connection->error);
                          }
                        //read data of each row
                        while($row = $result->fetch_assoc()){
                        echo "<tr>
                              <td>" . $row["Artifact_id"] . "</td>
                              <td>" . $row["Title"] . "</td>
                              <td>" . $row["Name"] . "</td>
                              <td>" . $row["Description"] . "</td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="tables">

        </section>
    </section>
</body>
</html>