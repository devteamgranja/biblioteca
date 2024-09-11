<?php 
include 'config.php';
$token=$_SESSION['token'];
$puser=$con->query("SELECT * FROM usuario WHERE token='$token'");
$pegauser=$puser->fetch();
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "ajaxupload.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
      {
    if(data=='invalid')
    {
     // invalid file format.
     $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
     // view uploaded file.
     $("#preview").html(data).fadeIn();
     $("#form")[0].reset(); 
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
<div class="container">
<div class="row">
<div class="col-md-8">
<form id="form" action="ajaxupload.php" class="##dropzone" method="post" enctype="multipart/form-data">

<input id="uploadImage" type="file" accept="image/*" name="image" />
<div id="preview"><img src="<?=$pegauser['foto'];?>" width="300" /></div><br>
<input class="btn btn-success" type="submit" value="Upload">
</form>
<div id="err"></div>


</div>
</div>
</div>