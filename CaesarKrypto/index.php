<!DOCTYPE>
<html>
<head>
	<title>Enkripsi Caesar</title>
	<?php
	include "library/import.php";
	?>
</head>
<body>
<div class="container">
<div class="col-md-offset-2">
<h2>Proses Enkripsi Metode Caisar</h2>
</div>
     <div class="col-md-12">
     <div class="col-md-6 col-md-offset-2">
     <div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title">Enkripsi Pesan</h3>
     </div>
     <div class="panel-body">
     <form class="form-horizontal" method="POST" action="prosesenkripsi.php" name="myform" >
     <fieldset>

         <div class="form-group">
         <label for="textArea" class="col-lg-2 control-label">Isi Pesan</label>
         <div class="col-lg-10">
            <textarea name="kalimat" id="file-content" class="form-control" rows="3"></textarea>
         </div>
       </div>
      
    <script type="text/javascript">
        function readSingleFile(e) {
        var file = e.target.files[0];
        if (!file) {
          return;
        }
        var reader = new FileReader();
        reader.onload = function(e) {
          var contents = e.target.result;
          displayContents(contents);
        };
        reader.readAsText(file);
        }

        function displayContents(contents) {
        var element = document.getElementById('file-content');
        element.textContent = contents;
        }

        document.getElementById('file-input')
        .addEventListener('change', readSingleFile, false);
        </script>
       <div class="form-group">
         <label for="inputEmail" class="col-lg-2 control-label">Key</label>
         <div class="col-lg-10">
           <input type="text" name="kunci" class="form-control"  placeholder="masukan kunci" required>
         </div>
       </div>

       <div class="form-group">
         <div class="col-lg-10 col-lg-offset-2">
           <button type="reset" class="btn btn-danger">Cancel</button>
           <button name="submit"  class="btn btn-primary" value="Kirim" id="kirim">Enkrip</button>
         </div>
       </div>
       
     </fieldset>
     </form>
     </div>
     </div>

</body>
</html>

