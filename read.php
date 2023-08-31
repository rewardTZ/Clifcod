<?php

$dbhost="localhost";
$dbuser="root";
$dbname="guesthouse";
$dbpassword="";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <marquee behavior="" direction="right"><h1>customers</h1></marquee>  
<button class="user"><a href="h_owner.html">Add user</a> 
</button> 
    <table border="1">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">firstname</th>
                <th scope="col">secondname</th>
                <th scope="col">surname</th>
                <th scope="col">DOB</th>
                <th scope="col">gender</th>
                <th scope="col">country</th>
                <th scope="col">region</th>
                <th scope="col">district</th>
                <th scope="col">ward</th>
                <th scope="col">village</th>
                <th scope="col">street</th>
                <th scope="col">NIDA</th>
                <th scope="col">attach_NIDA</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">OPERATIONS</th>
            </tr>
            <tbody>
        <?php

        $sql= "SELECT * FROM owner";
        $result=mysqli_query($connection,$sql);

        if($result){
            $i=1;
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $firstname=$row['firstname'];
                $secondname=$row['secondname'];
                $surname=$row['surname'];
                $DOB=$row['DOB'];
                $gender=$row['gender'];
                $country=$row['country'];
                $region=$row['region'];
                $district=$row['district'];
                $ward=$row['ward'];
                $village=$row['village'];
                $street=$row['street'];
                $NIDA=$row['NIDA'];
                $attach_NIDA=$row['attach_NIDA'];
                $email=$row['email'];
                $phone=$row['phone'];
               
                echo'
                <tr>
                <th scope="row">'.$i.'</th>
                <td>'.$firstname.'</td>
                <td>'.$secondname.'</td>
                <td>'.$surname.'</td>
                <td>'.$DOB.'</td>
                <td>'.$gender.'</td>
                <td>'.$country.'</td>
                <td>'.$region.'</td>
                <td>'.$district.'</td>
                <td>'.$ward.'</td>
                <td>'.$village.'</td>
                <td>'.$street.'</td>
                <td>'.$NIDA.'</td>
                <td>'.$attach_NIDA.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
            
                <td>
                <button class="btn btn-primary"><a class="text_light"   href="update.php?id='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text_light" href="delete.php? id='.$id.'" >Delete</a> </button>
                </td>
 </tr>

 ';
 
 $i++;
            }
        }
        ?>
        </thead>
    </table>
    
</body>
</html>