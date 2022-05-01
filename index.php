<?php
    $conn = mysqli_connect("localhost", "root", "", "bobatea")
    $sql = "SELECT * FROM users";
    $result = $conn-> query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>" . $row["First_name"] "</td><td>" . $row["Last_name"] . "</td><td>" . $row["Age"] . "</td><td>" . $row["Drink"] . "</td></tr>";
        }
        }
        else {
            echo "No Results";
        }
        $conn-> close();

?>
