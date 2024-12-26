<?php
    if(isset($_POST['submit']))
    {
             $name = $_POST['fname'];
            $email = $_POST['email'];
            $contact = $_POST['number'];
            $message = $_POST['fmessage'];
         
        $to = "accounts@shippedindia.com"; // You can change here your Email
        $subject = "'$name' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$contact</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <info@shippedindia.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

         
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                </script>";
        }
    }
?>

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
            header("Location: index.html");
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

