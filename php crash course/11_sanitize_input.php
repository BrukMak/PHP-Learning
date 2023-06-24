
<?php

if (isset($_POST['submit'])){
    echo "Inserted Name: ";
    $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name; 
    echo "Inserted Email: ";
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);  
}
 
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
