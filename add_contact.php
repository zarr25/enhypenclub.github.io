<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
  $contact_name = $_POST['contact_name'];
  $contact_studid = $_POST['contact_studid'];
  $contact_desc = $_POST['contact_desc'];
  $contact_email = $_POST['contact_email'];
  $contact_phone = $_POST['contact_phone'];
   

   $sql = "INSERT INTO `contact`(`contact_id`, `contact_name`, `contact_studid`, `contact_desc`,'contact_email','contact_phone') VALUES (NULL,'$contact_name','$contact_studid','$contact_desc','$contact_email','$contact_phone')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: contact.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Enhypen Official Club Contacts</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: yellow;">
       Contact Form of Enhypen Official Club
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Contacts</h3>
         <p class="text-muted">Complete the form below to add a new contact</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:500px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Contact Name:</label>
                  <input type="text" class="form-control" name="contact_name" placeholder="Please insert your contact name">
               </div>

               <div class="col">
                  <label class="form-label">Member ID:</label>
                  <input type="text" class="form-control" name="contact_studid" placeholder="202XXXXXX">
               </div>
			   
			   <div class="col">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="contact_desc" placeholder="Insert your description">
               </div>
			   
			   <div class="col">
                  <label class="form-label">Email:</label>
                  <input type="text" class="form-control" name="contact_email" placeholder="Insert your email">
               </div>
			   
			   <div class="col">
                  <label class="form-label">Phone Number:</label>
                  <input type="text" class="form-control" name="contact_phone" placeholder="Insert your phone number">
               </div>
            </div>

            
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="contact.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>