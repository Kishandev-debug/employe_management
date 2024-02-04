<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style3.css">
    <style>
    #btn {
        height: 27px;
        background-color: rgb(23, 77, 128);
        color: white;
        text-decoration-line: none;
        border-radius: ;
    }

    #btnn {
        height: 27px;
        background-color: rgb(23, 77, 128);
        color: white;
        text-decoration-line: none;
        border-radius: 5px;
    }
    </style>
</head>

<body>


    <div class="container">
        <h1>User work table detail</h1>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Employee id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Task</th>
                        <th scope="col">Employee Description</th>
                        <th scope="col">Manager Feedback</th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
include 'connect.php';
$id=$_GET['id'];




  






    $sql="SELECT * FROM `review` WHERE `employee_id`=$id";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)){
    $Id=$row['employee_id'];
    $name=$row['name'];
    $task=$row['task'];
    $desc=$row['employee_description'];
    $review=$row['review'];
    $feed=$row['feedback'];


// review exist 
    if($review>0){
 echo '    <tbody>
                    <tr>
                        <td >'.$Id.'</td>
                        <td>'.$name.'</td>

                        <td>'.$task.'</td>
                          <td>'.$desc.'</td>
                       
                        <td>'.$feed.'</td>
                       
                        <td>'.$review.'</td>                       
                   
                      
                    </tr>
                    </tbody>';

                    }

                    //  review not exist 
                    else{
                        echo '    <tbody>
                    <tr>
                        <td >'.$Id.'</td>
                        <td>'.$name.'</td>

                        <td>'.$task.'</td>
                          <td>'.$desc.'</td>
                       
                        <td>'.$feed.'</td>
                       
                      
                        <td>
                            <button type="submit" id="btnn" name="update"><a id="btn" href="update.php">Update</a></button>
                         </td>
               
                    </tr>
                    </tbody>';
                    }
   }




           
                  ?>
            </table>
        </div>

    </div>



    <script src="" async defer></script>
</body>

</html>