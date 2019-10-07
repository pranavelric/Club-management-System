<!DOCTYPE html>
<html>
<head>
    <title>Club_Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"type="text/css">


</head>
<body><!-- Material form register -->
<!-- Default form login -->
<div class="jumbotron" style="border: 2px solid red;margin: 10%;border-radius: 10%">
<form class="" action="sign_up.php" method="post" enctype="multipart/form-data">
<center>
    <p class="h4 mb-4">Register</p>
</center>

    <label>Name</label>
    <input type="text" id="name" name = "name" class="form-control mb-4" placeholder="Name" required>


    <div class="form-group">
        <label>Branch</label>
        <select class="form-control" id="sel1" name = "branch" >
            <option>CSE</option>
            <option>ME</option>
            <option>ECE</option>
        </select>
    </div>
    <label>Roll Number</label>
    <input type="number" id="rollno" name = "rollno" class="form-control mb-4" placeholder="Roll Number" required>


    <div class="form-group">
        <label>Year</label>
        <select class="form-control"  name = "year"  id="sel2">
            <option >1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

    <div class="form-group">
        <label>Member of :</label>
        <br>
    <div class="form-check form-check-inline">
        <input name = "clubs[]"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
        <label class="form-check-label" for="inlineCheckbox1">Bit-Byte Programming club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
        <label class="form-check-label" for="inlineCheckbox2">Electronics Club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3" >
        <label class="form-check-label" for="inlineCheckbox3">Racing Club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="4" >
        <label class="form-check-label" for="inlineCheckbox3">CAD club</label>
    </div>
</div>
    <label>Phone number</label>
    <input name = "tel" type="number" id="phone" class="form-control mb-4" placeholder="Contact number" required>

    <label>Upload User_Image</label>
    <input name = "upload" type="file" id="usrimg" class="form-control mb-4" >


    <!-- Email -->
    <label>Email</label><input name = "email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail"required>

    <!-- Password -->
    <label>Password</label>
    <input type="password" name = "password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" required>



    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" name = "submit" type="submit">Sign Up</button>



</form>
</div>
</body>
</html>

