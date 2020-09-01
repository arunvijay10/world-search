<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <br>
        <center>
            <h2><b>Search-World</b></h2>
        </center>
        <br>


        <form method="POST" action="next.php" enctype="multipart/form-data"> 
            <div class="form-group">
                <div class="row">
                    <label for="stitle" class="col-sm-2">Title</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="stitle" placeholder="Title">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label for="slink" class="col-sm-2">Link</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="slink" placeholder="Site Link">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <label for="skeyword" class="col-sm-2">Keyword</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="skeyword" placeholder="Site-Keyword">
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <label for="sdesc" class="col-sm-2">Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="sdesc" placeholder="Site Desc">
                        </textarea>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <label for="fileupload" class="col-sm-2">Search File</label>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file" name="fileup" placeholder="Site Desc">

                    </div>
                </div>
            </div>


            <div class="form-group">

                <div class="row">
                    <center>&nbsp; &nbsp;  
                        <input type="submit" class="btn btn-outline-dark" name="submit" value="Add-website">
                        &nbsp; &nbsp;
                        <input type="reset" class="btn btn-outline-danger" name="reject" value="Reject">
                    </center>
                </div>

            </div>

    </div>


    </form>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("Search");

if(isset($_POST['submit']))
{
$stitle = $_POST['stitle'];
$slink = $_POST['slink'];
$sKeyword = $_POST['sKeyword'];
$sdesc = $_POST['sdesc'];
$fileup=$_FILES['fileup']['name'];

if(move_uploaded_file($_FILES['$fileup']['tmp_name'],"images/".$_FILES["fileup"]['name']))
{
    $sql ="insert into search(stitle,slink,skeyword,sdesc,fileup) values
    ('$stitle','$link','$sKeyword','$desc',
    '$fileup')";

    $rs= mysql_query($sql)
    if($rs){
        echo "<script>Done </script>";
    }
    else
    {
        echo "<script>Failed to upload</script>";
    }
}

}

?>