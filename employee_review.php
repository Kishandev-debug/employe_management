<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="import" href="navbar.html">
</head>

<body>
    <?php
include 'connect.php';
$id=$_GET['id'];
$name=$_GET['name'];
?>
    <div w3-include-html="navbar.html"></div>
    <div class="container">
        <form action="handle_employee_review.php" method="POST">
            <center>
                <h2>User Review page</h2>
            </center>
            <label for="id" class="form-label">Emplyee ID:</label>
            <input type="text" class="form-control" value="<?php echo $id?>" name="id" id="id"
                aria-describedby="emailHelpId" placeholder="enter your name" />
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $name?>" id="name"
                aria-describedby="emailHelpId" placeholder="enter your name" />
            <label for="task" class="form-label">Task:</label>
            <input type="text" class="form-control" name="task" id="task" aria-describedby="emailHelpId"
                placeholder="Enter Task" />
            <label for="desc" class="form-label">Description:</label>
            <input type="text" class="form-control" name="desc" id="desc" aria-describedby="emailHelpId"
                placeholder="Description" />
            <label for="st_time" class="form-label">Start Time:</label>
            <input type="time" class="form-control" name="st_time" id="st_time" aria-describedby="emailHelpId"
                placeholder="set task start time " />
            <label for="ed_time" class="form-label">End_Time:</label>
            <input type="time" class="form-control" name="ed_time" id="ed_time" aria-describedby="emailHelpId"
                placeholder="set task end time" />


            <center> <button class="btn" type="submit" name="review">
                    Submit
                </button></center>
            <?php
                $id=$_GET['id'];
            echo '<a href="show_employee_detail.php?id='.$id.'">View added task if you submit</a>';
            ?>
        </form>
    </div>


    <script src="" async defer></script>
</body>

</html>