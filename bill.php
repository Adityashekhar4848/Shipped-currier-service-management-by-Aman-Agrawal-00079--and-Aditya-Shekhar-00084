
<?php 

date_default_timezone_set("Asia/Kolkata");

$conn = mysqli_connect("localhost", "shippedi_rajat", "YZ2H=*GH,2ZR" ,"shippedi_contact_form"); // 

if(isset($_POST['Submit']))
{ // Fetching variables of the form which travels in URL

$sname=$_POST['sName'];
$rname=$_POST['rName'];
$sphone=$_POST['sPhone'];
$rphone=$_POST['rPhone'];
$region=$_POST['Region'];
$medium=$_POST['Medium'];
$content=$_POST['Content'];
$sloc=$_POST['sLocation'];
$rloc=$_POST['rLocation'];
$weight=$_POST['weight'];
$pdate=$_POST['PickupDate'];
$message=$_POST['message'];
$famount=100*$weight;
$tid=date("dmy-his").mt_rand(10,99);

if($sname !=''&&$rname !='')
{
//Insert Query of SQL
$query = "INSERT INTO `booking`(`sender`, `receiver`, `sender phone`, `receiver phone`, `region`, `medium`, `content`, `sender location`, `receiver location`, `weight`, `pickup date`, `message`, `famount`, `tid`) VALUES ('$sname', '$rname', '$sphone', '$rphone', '$region', '$medium', '$content', '$sloc', '$rloc', '$weight', '$pdate', '$message', '$famount', '$tid')";
$result = mysqli_query($conn, $query); 
if($result){
            echo '<script>
                    alert("Check your invoice now !!");
                </script>';
            }
}
else{
    echo "<p> Failed <br/> Some Fields are Blank....!!</p>";

    }

}
else{
echo "<p>Submission Failed <br/> Some Fields are Blank....!!</p>";
    }

 // Closing Connection with Server 

?>


 <!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Invoice</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <link rel="stylesheet" href="css/invoice.css">


</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


    <!-- Start header -->
    <header class="top-header2">
        <div class="header_top2">
            
            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:shippedindia@gmail.com"><img src="images/mail_icon.png" alt="#" />info@shippedindia.com</a></li>
                            <li><a href="tel:7976287451"><img src="images/phone_icon.png" alt="#" />+917976287451</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        
       <div id="container">

      <section id="invoice-title-number">
      
        <span id="title">Your Courier Details</span>
        
      </section>
      
      <div class="clearfix"></div>
      
      <section id="client-info">
        <div>
          <span class="bold"> <?php echo $sname; ?> </span>
        </div>
        
        <div>
          <span> <?php echo $sloc; ?> </span>
        </div>
        
        <div>
          <span> <?php echo $sphone; ?> </span>
        </div>
        
        <div>
        </br>
          <span class="bold"> <?php echo $rname; ?> </span>
        </div>
        
        <div>
          <span> <?php echo $rloc; ?> </span>
        </div>
        
        <div>
          <span> <?php echo $rphone; ?> </span>
        </div>
      </section>
      
      <div class="clearfix"></div>
      
     <table class="table">
     <thead>
       <th>Courier Content</th>
       <th>Medium</th>
       <th>Weight (in kg)</th>
       <th>Pickup Date</th>
       <th>Pickup Charge</th>

     </thead>
     <tbody>
        <tr>
            <td data-label="Content"> <?php echo $content; ?> </td>
            <td data-label="Medium"> <?php echo $medium; ?> </td>
            <td data-label="Weight"> <?php echo $weight; ?> </td>
            <td data-label="Pickup date"> <?php echo $pdate ?> </td>
            <td data-label="pickup Charge">Free</td>

        </tr>
     </tbody>
   </table>
      
      <section id="sums">
      
        <table cellpadding="0" cellspacing="0">
          <tr>
            <th>Amount Per Kg</th>
            <td >100</td>
          </tr>
           
                    <tr data-hide-on-quote="true" style="background-color:#fd7e14;">
            <th>Total Amount  </th>
            <td style="color: white; font-size:20px; margin-left:10px;"> <?php echo   $famount; ?> </td>
          </tr>
          
   
   
          
        </table>

        <div class="clearfix"></div>
        
      </section>
      
      <div class="clearfix"></div>

      <section id="invoice-info">
        <div>
          <span style="font-size: 20px; color: red; padding-top: -300px;">Final amount will be declared by our pickup executive</br> We will contact you soon</span> <span></span>
        </div>
        
        <br />

      </section>
      
     
      <div class="clearfix"></div>

      <div class="thank-you">Thank YOU</div>

      <div class="clearfix"></div>
    </div>

     <div id="contact" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="booking.php" method="POST"  >
                            <fieldset>
                                <div class="field center"  style="display: flex; justify-content: center; margin: auto;">
                                    <input type="hidden" name="tid" value="<?php echo $tid; ?>" >
                                    <button type="submit" name="confirm" style="  background-color: #fd7e14;
                                                                                transition-duration: 0.4s;
                                                                                  border: none;
                                                                                  margin: 2px;
                                                                                  margin-bottom: 10px;
                                                                                  color: white;
                                                                                  text-align: center;
                                                                                  text-decoration: none;
                                                                                  display: inline-block;
                                                                                  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                                                                                  font-size: 16px;"
                                                                                  
                                                                       >SUBMIT</button>
                                                                       
                                    <button type="submit" name="back" style="   background-color: #fd7e14; 
                                                                                  border: none;
                                                                                  transition-duration: 0.4s;
                                                                                  color: white;
                                                                                   margin: 2px;
                                                                                  text-align: center;
                                                                                  text-decoration: none;
                                                                                  display: inline-block;
                                                                                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                                                                                  font-size: 16px;"
                                                                                  
                                                                       >BACK</button>

                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2020 SHIPPEDINDIA designed by BBR</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
 
</body>

</html>