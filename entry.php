<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>PHP Login Registration by using hashing algorithm</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br /> 
           <style>
           * {
               margin: 0px;
               padding: 0px;
               }
               body {
               font-size: 120%;
               background: #F8F8FF;
               }
               .header {
               width: 30%;
               margin: 50px auto 0px;
               color: white; background: #5F9EA0;
               text-align: center;
               border: 1px solid #B0C4DE;
               border-bottom: none;
               border-radius: 10px 10px 0px 0px;
               padding: 20px;
               }
               form, .content {
               width: 30%;
               margin: 0px auto;
               padding: 20px;
               border: 1px solid #B0C4DE;
               background: white;
               border-radius: 0px 0px 10px 10px;
               }
               .input-group {
               margin: 10px 0px 10px 0px;
               }
               .input-group label {
               display: block;
               text-align: left;
               margin: 3px;
               }
               .input-group input {
               height: 30px;
               width: 93%;
               padding: 5px 10px;
               font-size: 16px;
               border-radius: 5px;
               border: 1px solid gray;
               }
               .btn {
               padding: 10px;
               font-size: 15px;
               color: white;
               background: #5F9EA0;
               border: none;
               border-radius: 5px;
               }
               .error {
               width: 92%;
               margin: 0px auto;
               padding: 10px;
               border: 1px solid #a94442;
               color: #a94442;
               background: #f2dede;
               border-radius: 5px;
               text-align: left;}
               .success {
               color: #3c763d;
               background: #dff0d8;
               border: 1px solid #3c763d;
               margin-bottom: 20px;
               }</style> 
           <div class="input-group"">  
                <h3 align="center">PHP Login Registration Script by using password_hash() method</h3>  
                <br />  
                <?php  
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>';  
                ?>  
           </div>  
           <form action="" method="post" enctype="multipart/form-data" class="mb-3">
  <h3 class="text-center mb-5">Upload File in PHP 8</h3>

  <div class="user-image mb-3 text-center">
    <div style="width: 100px; height: 100px; overflow: hidden; background: #cccccc; margin: 0 auto">
      <img src="..." class="figure-img img-fluid rounded" id="imgPlaceholder" alt="">
    </div>
  </div>

  <div class="custom-file">
    <input type="file" name="fileUpload" class="custom-file-input" id="chooseFile">
    <label class="custom-file-label" for="chooseFile">Select file</label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
    Upload File
  </button>
      </body>  
 </html>  