<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation backend</title>
</head>
<body>
<?php 
    $name = $email = $gender = $comment = $num = $age ="";

    if($_SERVER["REQUEST_METHOD"]=="POST"  && !empty($_POST["num"]) == true  && !empty($_POST["name"]))
    {

                     
            if((preg_match ("/^[a-zA-z]*$/", $name))  == true)
            {        
                $name = test_input($_POST["name"]);
                
            }else
            {
                echo "Enter a valid name";
                echo "<br>";
            }
        
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);

        if(!empty($_POST["gender"]) == true)
        $gender = test_input($_POST["gender"]);
     else
        echo "Please kindly enter your age ";
       



    
         if ($_POST["num"] > 999999999 && $_POST["num"] <= 9999999999    )
            $num = test_input($_POST["num"]);
          else
            echo "this number is not valid the number should be 10 digit only ";
        


            if( !empty($_POST["age"]) == true){
            
            }
               

            if( !empty($_POST["age"]) == true)
            {
                if($_POST["age"]  > 0 && $_POST["age"] < 150)
           
                $age = test_input($_POST["age"]);
             else {
                echo "Enter a Valid age";
              }
          }else{
            echo "Please enter your age ";
          }
               
        
    }
     
    else{
     
        echo "Please Fill the required info.";
        echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<style>
    .div1{
        background-color:rgb(245, 217, 217);
      margin: 5rem;
      margin-left: 300px;
      margin-right: 45%;
      padding:2rem;
      border:solid black 2px;
    }
</style>
<div class="div1">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    
    <label for="name">Name: </label>
    <input type="text" name="name">
    <br>
    <label for="email">Email: </label required>
    <input type="Email" name="email">
    <br>
    Gender:
    <input type="radio" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" name="gender" value="female">
    <label for="female">Female</label>
    <br>
    <label for="comment">Comment: </label>
    <textarea name="comment" cols="30" rows="10"></textarea>
    <br>
    <label for="number">Phone: </label>
    <input type="number" name="num">
    <br>
    <label for="age">Age: </label>
    <input type="number" name="age">
    <br>
    <input type="submit">

    <?php 
   
    echo ' <h2>Your response</h2> Name : '. $name .'<br>Email : ' . $email . '<br>Gender: ' .$gender. '<br>Comment : ' .$comment. '<br>phone : ' .$num.'<br>age : '.$age.'';
    ?>
    
</form>
</div>
   
</body>
</html>
