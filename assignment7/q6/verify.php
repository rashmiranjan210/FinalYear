<?php
    $name=$_COOKIE['name'];
    $father=$_COOKIE['father'];
    $date=$_COOKIE['dob'];
    $mobile=$_COOKIE['mobile'];
    $email=$_COOKIE['email'];
    $adress=$_COOKIE['adress'];
    ?>
    <table border="1" rules=all>
        <tr>
            <th>NAME</th>
            <th>FATHER</th>
            <th>Date of Birth</th>
            <th>Mobile NO</th>
            <th>EMAIL</th>
            <th>ADRESS</th>
        </tr>
        <tr>
            <td><?php echo "$name"; ?></td>
            <td><?php echo "$father"; ?></td>
            <td><?php echo "$date"; ?></td>
            <td><?php  echo "$mobile"; ?></td>
            <td><?php echo "$email";?></td>
            <td><?php echo "$adress"; ?></td>
        </tr>
    </table>
    <a href="final.php">final</a>
