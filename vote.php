<?php include("header.php") ?>

<div class="border">
    <form action="vote.php" method="POST">
        <label>Name:</label><br>
        <input type="text" id="name" name="names"><br><br>
        
        <label>Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label>Message:</label><br>
        <input type="text" id="email" name="id_no"><br><br>
        
        <label for="option1">Option 1</label>
        <input type="radio" id="option1" name="option" value="option1"><br>
        
        <label for="option2">Option 2</label>
        <input type="radio" id="option2" name="option" value="option2"><br>
        
        <label for="option3">Option 3</label>
        <input type="radio" id="option3" name="option" value="option3"><br><br>
        
        <input type="submit" value="Submit" class="submit" name='submit'>
    </form>
</div>
<?php

    if(isset($_POST['submit'])){
        $names =mysqli_real_escape_string($conn,$_POST['names']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $id_no = mysqli_real_escape_string($conn,$_POST['id_no']);
        
        $sql = "INSERT INTO `voters_db`(`full_name`, `email_id`, `card_no`) VALUES ('$names','$email','$id_no')";
        $query = mysqli_query($conn, $sql);

        if(!$query){
            die("Connection Failed");
        }else{
            //echo "Finally";
        }
        mysqli_close($conn);

    }



?>
</body>
</html>
