<?php 


$conn = mysqli_connect("localhost", "shippedi_rajat", "YZ2H=*GH,2ZR", "shippedi_contact_form"); 
if(isset($_POST['confirm']))
{

    $tid = mysqli_real_escape_string($conn,$_POST['tid']);

         
    $query = "UPDATE `booking` SET `status`='CONFIRM' WHERE `tid`='$tid'";
    $results=mysqli_query($conn, $query);
    
    $query = "SELECT * FROM `booking` WHERE `tid`='$tid' & `status`='CONFIRM'" ;
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);

    $results=mysqli_query($db, $query);

    $sname=$data['sender'];
    $rname=$data['receiver'];
    $sphone=$data['sender phone'];
    $rphone=$data['receiver phone'];
    $region=$data['region'];
    $medium=$data['medium'];
    $content=$data['content'];
    $sloc=$data['sender location'];
    $rloc=$data['receiver location'];
    $weight=$data['weight'];
    $pdate=$data['pickup date'];
    $message=$data['message'];
    $famount=$data['famount'];

      
        $to = "accounts@shippedindia.com"; // You can change here your Email
        $subject = "'$sname' has been sent a mail"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Sender's name: </strong></td>
                            <td style='width:400px'>$sname</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Receiver's Name: </strong></td>
                            <td style='width:400px'>$rname</td>
                        </tr>                       
                         <tr>
                            <td style='width:150px'><strong>Sender phone: </strong></td>
                            <td style='width:400px'>$sphone</td>
                        </tr>                        
                        <tr>
                            <td style='width:150px'><strong>Receiver Phone:</strong></td>
                            <td style='width:400px'>$rphone</td>
                        </tr>                        
                        <tr>
                            <td style='width:150px'><strong>Region: </strong></td>
                            <td style='width:400px'>$region</td>
                        </tr>                        
                        <tr>
                            <td style='width:150px'><strong>Medium: </strong></td>
                            <td style='width:400px'>$medium</td>
                        </tr>                        
                        <tr>
                            <td style='width:150px'><strong>Content: </strong></td>
                            <td style='width:400px'>$content</td>
                        </tr>                       
                         <tr>
                            <td style='width:150px'><strong>Sender Location</strong></td>
                            <td style='width:400px'>$sloc</td>
                        </tr>                        
                        <tr>
                            <td style='width:150px'><strong>Weight: </strong></td>
                            <td style='width:400px'>$weight: </td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Pickup Date: </strong></td>
                            <td style='width:400px'>$pdate</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$message</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Amount: </strong></td>
                            <td style='width:400px'>$famount</td>
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
                    alert('YOUR ORDER IS CONFIRMED.');
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

<!DOCTYPE html>
<html>
<head>
	<title>CONFIRMATION</title>
  
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
	
</head>

<style type="text/css">
	
.thank h1 {

	font-size: 50px;
	font-family: cursive;
	object-position: center;
	text-align: center;
	color: #fd7e14;
	text-shadow: 10px;
	animation-name: thank;

}

.thank p {
	font-size: 20px;
	font-weight: 5px;
	object-position: center;
	color: black;
	text-align: center;
}

.thank a {

	object-position: center;
	display: flex;
	margin:auto;
    border: solid #000 1px;
    color: #fff;
    background-color: #fd7e14;
    padding: 7px 25px;
    width: 60px;
    text-align: center;
    font-size: 20px;
    font-weight: 300;
    font-family: cursive;
    text-shadow: 5px;
	}







</style>
<body>
<div class="thank">
		<h1 id="thankyou">THANK YOU !!</h1>
		<p>We will contact you soon.</p>
		<a href="index.html">Home</a>

</div>

</body>
<script type="text/javascript">
	
	var heading = document.getElementById("thankyou");


	setInterval(function(
		heading = welcome	
		),5000);


</script>
</html>
