<?php
$conn = mysqli_connect("localhost", "shippedi_rajat", "YZ2H=*GH,2ZR", "shippedi_contact_form"); // 

if(isset($_POST['submit'])){// Fetching variables of the form which travels in URL
$name = $_POST['fname'];
$email = $_POST['email'];
$contact = $_POST['number'];
$message = $_POST['fmessage'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = "INSERT INTO `form`(`name`, `email`, `number`, `message`) values ('$name', '$email', '$contact', '$message')";
$result = mysqli_query($conn, $query); 
if($result){
    echo "<br/><br/><span>Submitted successfully...!!</span>";
}
else{
    echo "<p>Submission Failed <br/> Some Fields are Blank....!!</p>";

}

}
else{
echo "<p>Submission Failed <br/> Some Fields are Blank....!!</p>";
}
}
close($connection); // Closing Connection with Server
?>

