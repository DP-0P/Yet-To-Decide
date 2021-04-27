<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/styleUpload.css">
    <title>Files Upload</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <label for="subject">Choose a subject:</label>
          
          <select id="subject" name="subjects" >
            
            <option value="CSW2">CSW2</option>
            <option value="COA">COA</option>
            <option value="AD1">AD1</option>
            <option value="PME">PME</option>
            <option value="ADM">ADM</option>
            
          <textarea name="descriptions" rows="8" cols="63">Brief description about the note/book.</textarea>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>