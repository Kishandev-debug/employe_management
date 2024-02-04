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
                        <th scope="col">Description</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
include 'connect.php';

$sql="SELECT * FROM `employee_detail`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $Id=$row['id'];
    $name=$row['name'];
    $task=$row['task'];
    $desc=$row['description'];
    $st_time=$row['st_time'];
    $ed_time=$row['ed_time'];
    
 echo '    <tbody>
                    <tr>
                        <td >'.$Id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$task.'</td>
                        <td>'.$desc.'</td>
                        <td>'.$st_time.'</td>
                        <td>'.$ed_time.'</td>
                       <td>
                        <button type="submit" id="btnn" name="update"><a id="btn" href="manager_review.php?id='.$Id.'&name='.$name.'&task='.$task.'&desc='.$desc.'">Review</a></button>
                        </td>
                    </tr>
                    </tbody>';
}
          
                   
                
                  ?>
            </table>
        </div>

    </div>



    <script src="" async defer></script>
</body>

</html>