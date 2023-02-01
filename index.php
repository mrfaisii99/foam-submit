<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
</head>
<body>







<center>
    <h1 class="text-danger mt-5">INSERT DATA INTO DATABASE</h1>
</center>

<div class="container border mt-3 p-2" style="width: 45%;">

<form action="handle_insert.php" method="post">


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">name</label>
<div class="col-sm-10">
<input type="text" name="name" class="form-control form-control-sm" Required id="colFormLabel" placeholder=" Enter Your Email name ">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">father name</label>
<div class="col-sm-10">
<input type="text" name="fname" class="form-control form-control-sm" Required id="colFormLabel" placeholder=" Enter Your education ">
</div>
</div>


<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">education</label>
<div class="col-sm-10">
<input type="text" name="education" class="form-control form-control-sm" Required id="colFormLabel" placeholder=" Enter Your education ">
</div>
</div>







<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">sect</label>
<div class="col-sm-10">
<input type="radio" name="sect" value="shia"> shia &nbsp;
<input type="radio" name="sect" value="sunni"> sunni &nbsp;
<input type="radio" name="sect" value="none"> prefer not to say &nbsp; 
</div>
</div>





<div class="form-group row">
<label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">nationality</label>
<div class="col-sm-10">
<input type="text " name="nation" class="form-control form-control-sm" Required id="colFormLabel" placeholder=" Enter Your nationality ">
</div>
</div>

<center>
    <button type="submit" class=" btn btn-danger form-control-sm"><b> SAVE DATA</b></button>
</center>
</form>

</div>











<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>