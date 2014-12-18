<?php
  echo $_POST['first_name'];
  echo $_REQUEST['first_nme'];
  var_dump($FILES);
?>

  Array(
  [photo]=>Array(
             [name]=>me.jpg
             [type]=>image/jpeg
             [tmp_name]=>C:\Users\username\AppData\Local\Temp\php10FF.tmp
             [error]=>0
             [size]=>3256128

<?php
  define("SITE_ROOT", "F:\\Study\\Server2go");
  $fileUploaded = false;
  if(isset($_FILES['photo']))
  {
    $fileInfo=$_FILES['photo'];
    $tmpFilePath=$fileInfo['tmp_name'];
    $saveFilePath=SITE_ROOT."\\upload\\".$fileInfo['name']; //    так делать нельзя!
    $saveFilePath=SITE_ROOT."\\upload\\".unikid();
    $fileUploaded=move_uploadedfile($tmpFilePath, $savefilePath);
  }
  echo ($fileUploaded)?"file was uploaded successfully":
                       "file was not uploaded";
    
