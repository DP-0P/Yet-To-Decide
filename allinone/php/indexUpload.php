<?php include 'filesLogic.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/styleUpload.css">
  <title>Files Upload</title>
</head>

<body>
  <h3>Upload File</h3>
  <div class="container">
    <form action="index.php" method="post" enctype="multipart/form-data">

      <div class="row">
        
        <div class="col-75">


          



<div class="file-upload">
  <div class="file-select">
    <div class="file-select-button" id="fileName">Choose File</div>
    <div class="file-select-name" id="noFile">No file chosen...</div> 
    <input type="file" name="myfile" id="upload">
  </div>
</div>


        </div>



      










      </div>

      <div class="row">
        <div class="col-25">
          <label for="subject">Subject:</label>
        </div>

        <div class="col-75">
          <select id="subject" name="subjects">
            <option value="AD1">AD1</option>
            <option value="ADM">ADM</option>
            <option value="COA">COA</option>
            <option value="CSW2">CSW2</option>
            <option value="PME">PME</option>
          </select><br><br>
        </div>


      </div>




      <div class="row">
        <div class="col-25">
          <label for="desc">Description:</label><br><br>
        </div>

        <div>
          <textarea id="description" name="descriptions" rows="8" cols="63" placeholder="Brief description about the note/book." style="height:200px"></textarea><br><br>

        </div>
      <div>
        <input type="submit" value="Submit">
      </div>
      </div>



    </form>
  </div>
</body>

</html>