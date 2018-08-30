<!DOCTYPE html>
<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "id6943538_mydb";
        $password = "password";
        $dbname = "id6943538_users";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT firstname, lastname, address1, address2, city, state, zip, country, Date FROM USERS ORDER BY Date DESC";
        $result = mysqli_query($conn, $sql);
        
        echo '<div style="font-size:3em;color:black;">Admin Report</div>';

        echo '<table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address1</th>
                    <th>Address2</th>
                    <th>City</th>
                    <th>Zip</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Date</th>
                </tr>';
        
        if (mysqli_num_rows($result) > 0) {
            // output data of each row to the table
            while($row = mysqli_fetch_assoc($result)) {
                echo '
                    <tr>
                        <td>'.$row['firstname'].'</td>
                        <td>'.$row['lastname'].'</td>
                        <td>'.$row['address1'].'</td>
                        <td>'.$row['address2'].'</td>
                        <td>'.$row['city'].'</td>
                        <td>'.$row['zip'].'</td>
                        <td>'.$row['state'].'</td>
                        <td>'.$row['country'].'</td>
                        <td>'.$row['Date'].'</td>
                    </tr>';
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </body>
</html>