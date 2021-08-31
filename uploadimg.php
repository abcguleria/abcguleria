<?php
if(isset($_FILES['image']))
{
    $file_name=$_FILES['image']['name'];

    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
move_uploaded_file($file_tmp,"img/".$file_name);
}
?>
<html>
    <head>
    <style>
            body{
                background-color:lightblue;
                }
                h2{
                    text-align: center;
                }
                h3{
                    text-align: center;
                }
            </style>
</head>
<body>
    <form action=""  method="POST" enctype="multipart/form-data">
    <h2><br><br><br><br>upload file<br><br><br></h2>
    <h3> <input type="file" name="image"/><br><br>
    <input type="submit"/></h3>
</form>
</body>
</html>