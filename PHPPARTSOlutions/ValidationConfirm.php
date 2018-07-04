<!DOCTYPE html>
<html>
   <head>
      <title>Validation Confirm</title>
      <link href="style.css" rel="stylesheet" type="text/css">

   </head>
   <body>
      <div class="pageContainer centerText">
         <?php
         include 'ValidationUtilities.php';

         //Retrieve inputs (using helper function)
         $email = $_POST['email'];
         $fname = $_POST['fname'];
         $phone = $_POST['phone'];
         $state = $_POST['state'];
         $birthday = $_POST['birthday'];
         $age = $_POST['age'];
         $phone = $_POST['phone'];

         //set validation flag
         $IsValid = true;

         echo "<p class='centeredNotice'>";
         //email
         if (!fIsValidEmail($email)) {
            echo "Invalid email<br>";
            $IsValid = false;
         }
        
         if (!fIsValidLength($fname, 2, 20)) {
            echo "Enter first name (2-20 characters)<br>";
            $IsValid = false;
         }

         if (!fIsValidPhone($phone)) {
            echo "Enter 10 digit phone number<br>";
            $IsValid = false;
         }

         if (!fIsValidStateAbbr($state)) {
            echo "Enter 2-character state abbreviation<br>";
            $IsValid = false;
         }

         if (!fIsValidDate($birthday)) {
            echo "Enter the correct birthday<br>";
            $IsValid = false;
         }

         if (!fIsValidRange($age, 1, 99)) {
            echo "Enter age from 1 to 99<br>";
            $IsValid = false;
         }

         echo "</p>";
         if (!$IsValid) {
            //at least one element not valid. Echo a message and stop execution
            echo "<img class='validImage' src='red_x.png' /><br><br>
            <p><input type='button' class='button' value='<< Go Back <<' onClick='history.back()'><br></p>";
            //stop execution. 
            exit();
         }
         //all inputs are valid. 
            echo "<div class='center'>
            <img class='validImage' src='valid.png' />
            <h3>All inputs have valid formats!</h3>
            Email: $email <br>
            First name: $fname <br>
            Phone: $phone <br>
            State: $state <br>
            ";
         ?>
      </div>
   </body>
</html>
