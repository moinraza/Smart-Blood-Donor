<?php include('process.php') ?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Blood Donate Post</title>
    </head>
<body>
    <div class="container">
    <form action="post.php" method="POST">
            <h1>Blood Donate</h1>
            <div class="label">
            <label for="ename"><b>Enter Name</b></label>
            <input class="form-contrl" type="text" id = "etname" name="etname" placeholder="Enter Name" required><br>
            <label for="bgroup"><b>Enter group </b></label>
            <input class="form-contrl" type="text" id = "bgroup" name="bgroup" placeholder="Choose Group" required><br>
            <label for="email"><b>Email Add.</b></label>
            <input class="form-contrl" type="text" id = "email" name="email" placeholder="Email Address" required><br>
            <label for="phone "><b>Mobile No.</b></label>
            <input class="form-contrl" type="text" id ="phone" name="phone" placeholder="Mobile No." required><br>
            <label for="ecity"><b>Location </b></label>
            <input class="form-contrl" type="text" id = "ecity" name="ecity" placeholder="Current Location" required><br>
            <label for="pcode"><b>Pin Code</b></label>
            <input class="form-contrl" type="text" id="pcode" name="pcode" placeholder="Pin Code" required><br>
            <input class="button" type="submit" id ="register" name="create" value="Submit">
            </div>
          </form>
       </div>
</body>
</html>