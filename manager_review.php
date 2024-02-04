<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <style>
    #opt {
        width: 96%;
        height: 30px;
        background-color: rgb(243, 243, 248);
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <?php
include 'connect.php';
$id=$_GET['id'];
$name=$_GET['name'];
$task=$_GET['task'];
$desc=$_GET['desc'];

?>


    <div w3-include-html="navbar.html"></div>
    <div class="container">
        <form action="handle_manager_review.php" method="POST">
            <center>
                <h2>manager Review page</h2>
            </center>
            <label for="id" class="form-label">Employee Id:</label>
            <input type="number" value="<?php echo $id?>" class="form-control" name="id" id="id"
                aria-describedby="emailHelpId" placeholder="enter employee id" />
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" value="<?php echo $name ?>" name="name" id="name"
                aria-describedby="emailHelpId" placeholder="enter your name" />

            <label for="task" class="form-label">Task:</label>
            <input type="text" class="form-control" value="<?php echo $task ?>" name="task" id="task"
                aria-describedby="emailHelpId" placeholder="enter your name" />
            <label for="desc" class="form-label">Description:</label>
            <input type="text" class="form-control" value="<?php echo $desc ?>" name="desc" id="desc"
                aria-describedby="emailHelpId" placeholder="enter your name" />

            <label for="opt" class="form-label">Rating:</label>
            <select id="opt" name="opt">

                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <label for="feed" class="form-label">Feedback:</label>
            <input type="text" class="form-control" name="feed" id="feed" aria-describedby="emailHelpId"
                placeholder="Description according to employee work " />
            <center> <button class="btn" type="submit" name="review">
                    Submit
                </button></center>
            <!-- <a href="login.html">Already Existing User</a> -->

        </form>
    </div>


    <script src="" async defer></script>
</body>

</html>