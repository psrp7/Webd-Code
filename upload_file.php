<?php
if(isset($_FILES['image'])){
   $errors = array();
   $file_name = $_FILES['image']['name'] ?? '';
   $file_size = $_FILES['image']['size'] ?? '';
   $file_type = $_FILES['image']['type'] ?? '';

   if(!empty($file_name)) {
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

      $extensions = array("jpeg","jpg","png");

      if(!in_array($file_ext, $extensions)){
         $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2 * 1024 * 1024) {
         $errors[] = 'File size must be exactly 2 MB';
      }

      if(empty($errors)) {
         move_uploaded_file($file_tmp, "images/".$file_name);
         echo "Success";
      } else {
         print_r($errors);
      }
   }
}
?>

<html>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
         
         <ul>
            <li>Sent file: <?php echo isset($_FILES['image']['name']) ? $_FILES['image']['name'] : ''; ?>
            <li>File size: <?php echo isset($_FILES['image']['size']) ? $_FILES['image']['size'] : ''; ?>
            <li>File type: <?php echo isset($_FILES['image']['type']) ? $_FILES['image']['type'] : ''; ?>
         </ul>
      </form>
   </body>
</html>
