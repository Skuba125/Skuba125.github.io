<?php

if (isset($_POST['submit'])) {

  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg','jpeg','png','pdf','gif','doc','docx','ppt','pptx','xls','xlsx','mp3','mp4','wav' ,'mpg', 'mov', 'wmv', 'm4v', 'ins','isf', 'te', 'xbk', 'ist', 'gno', 'txt');

  if (in_array($fileActualExt, $allowed)) {

    if ($fileError === 0) {

      if ($fileSize < 1000000) {

        $fileNameNew = uniqid('', true) . "." . $fileActualExt;

        $fileDestination = 'uploads/' . $fileNameNew;

        move_uploaded_file($fileTmpName, $fileDestination);

        header("Location: index.php?upload=success");
      }
      else {
        echo "File túl nagy!";
      }
    }
    else {
      echo "Hiba történt a file feltöltése közben!";
    }
  }
  else {
    echo "Nem lehet ilyen tipusú filet!";
  }

}
