
<?php

if (isset($_POST['submit'])){
    echo "Inserted Name: ";
    echo $_POST['name']."<br>"; 
    echo "Inserted Email: ";
    echo $_POST['email'];  
}
 
?>


<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>? name=BBB& age=30">Click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
    
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <input type="submit" value = "Submit" name="submit">
    </div>
</form>
