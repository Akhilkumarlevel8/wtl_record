<html>
<body>
<form method="post">        
Enter a Number/String: <input type="text" name="num"/><br>  
<button type="submit">Check</button>  
</form>  
</body>
</html>
<?php   
    if($_POST)  
    {  
        //get the value from form  
        $num = $_POST['num'];  
        //reversing the number  
        $reverse = strrev($num);  
          
        //checking if the number and reverse is equal  
        if($num == $reverse){  
            echo "The number/string $num is Palindrome";     
        }else{  
            echo "The number/string $num is not a Palindrome";   
        }  
}     
      ?>
