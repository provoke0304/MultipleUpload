<!DOCTYPE html>
<html>
<head>
<title>Multipl File Upload</title>
<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="src/main.js"></script>
</head>


<h1 class="text-center" style=" font-weight: bold; color: black">Mutliple File Upload</h1> <br>  
<div class="container">
<div class="row">
    <div class="col-lg-4"> </div>
<div class="col-lg-4">
<div class="col-lg-4"> </div>
<p><?php echo $this->session->flashdata('statusMsg'); ?></p>
<form enctype="multipart/form-data" action="" method="post">

<div class="form-group">
<label class="text-center" style=" font-size: 20px; color: black"> Choose Files</label>
<input type="file" class="form-control" name="userFiles[]" multiple/>
</div>

<div class="form-group">
<center>
<input class="btn btn-primary " type="submit" name="fileSubmit" value="UPLOAD"/> </center>


</div>
</form>
</div>
</div>


<div class="row">
<ul class="gallery">
<?php if(!empty($files)): foreach($files as $file): ?>
<li class="item">
<img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" >
<p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
</li>
<?php endforeach; else: ?>
<p>Image(s) not found.....</p>
<?php endif; ?>
</ul>
</div>
</div>
</body>
</html>