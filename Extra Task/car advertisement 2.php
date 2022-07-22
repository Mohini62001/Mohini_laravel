<html>
<head>
<title>Car Advertisement</title>
<h1 style="text-align:center";>Car Advertisement</h1>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form action="" method="post" enctype="multipart / form-data" style="padding-left:25%; padding-right:25%;">
Car No. : <input type="number" class="form-control" placeholder="Enter Car no." name="carno" required>
<br>

RC No. : <input type="number"  class="form-control" placeholder="Enter RC no."name="rcno" required>
<br>

Title : <input type="text"  class="form-control" placeholder="Enter Title" name="title" size="50">
<br>

Image: <input type="image"  class="form-control">
<br>
Description : <textarea name="description"  class="form-control" placeholder="Enter Description"cols="50" rows="10"></textarea>
<br>

Terms & Conditions : <textarea name="terms&cond"  class="form-control" placeholder="Enter Terms & Cond" cols="50" rows="50"></textarea>
<br>

Post status : <input type="text"  class="form-control" placeholder="Poststatus" name="poststatus">
<br>

Car status : <input type="text"  class="form-control" placeholder="carstatus" name="carstatus">
<br>

<button type="button" class="btn btn-primary">Submit</button>
</form> 
</body>
</html>
