<?php require_once './templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
    $name =$_POST['Name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $number =$_POST['number'];
    $message =$_POST['message'];
    $province =$_POST['Province'];
    ?>
        <tr>
            <td><?php if(isset($name)){ echo $name;} //name; ?></td>
            <td><?php if(isset($email)){ echo $email;}//email; ?></td>
            <td><?php if(isset($password)){ echo $password;}//password; ?></td>
            <td><?php if(isset($number)){ echo $number;}//number; ?></td>
            <td><?php if(isset($message)){ echo $message;}//message; ?></td>
            <td><?php if(isset($province)){ echo $province;}//province; ?></td>
            <td>
                <?php 
                   // subjects
                   $subject = implode(" | ", $_POST['Subject']) . "|";
                   if(isset($subject)){
                    echo $subject;
                   }
                ?>
            </td>
            <td><?php // gender
            $gender = $_POST['Gender'];
            if(isset($gender)){
                echo $gender;
            }
            ?></td>
        </tr>
 
</table>
<?php require_once './templates/footer.php' ?>