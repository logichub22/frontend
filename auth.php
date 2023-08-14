
<?php
if(isset($_POST['save'])){
    $image=$_FILES['image']['name'];
    $target="images/".$images;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
<form method="POST" action="auth_action.php" enctype="multipart/form-data">
    <select name="states" required>
    <option value="">---Select State---</option>
    <option value="kogi">Kogi</option>
    <option value="kano">Kano</option>
    <option value="sokoto">Sokoto</option>
    </select>
    </form>
      <textarea> name="comment" width="10px" height="10px">comment</textarea>
    <div class="form-group" style="float:right"> 
<label class="label">photo</label>
<div style="border:1px solid black; height:150px; width:150px;background:white;">
<img id="output" width="150px" height="150px"/ style="display:none">
</div>
<input type="file" name="image" id="image" onchange="loadFile(event)" required accept="image/*" style="width:150px;" required>
<script type="text/javascript">
    var loadFile=funtion(event)
    {
        var reader=new FileReader();
        reader.onload=function()
        {
            var output=document.getElementById('output');
        output.src=reader.result;
    };
$('#output').show();
 reader.readAsDataURL(event.target.files[0]);
};
    </script>
    </div>

</div>
</body>
</html>