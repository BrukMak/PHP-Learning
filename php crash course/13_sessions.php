<?php
/*
Sessions are a way to store information (in variables) to be used accross multiple pages.
Its stored on the server
 */

session_start();
 if (isset($_POST['submit'])){
    //  echo "Inserted Name: ";
     $username =  filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    //  echo $name; 
    //  echo "Inserted Email: ";
     $password = $_POST['password'];

     if($username == 'bruk' && $password == 'p'){
        $_SESSION['username'] = $username;
        header('Location: /php%20crash%20course/extras/dashboard.php');
     }
     else{
        echo 'Incorrect Username or Password';
           }
 }
 
 ?>
 
 
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
     <div>
         <label for="username">Username: </label>
         <input type="text" name="username">
     </div>
     <br>
     <div>
     
         <label for="password">Password: </label>
         <input type="password" name="password">
     </div>
     <br>
     <div>
         <input type="submit" value = "Submit" name="submit">
     </div>
 </form>
 


