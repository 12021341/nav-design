<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="description" content="Unit 7, 2nd Floor, JRS Building, Brgy. H. C. Conception, Maharlika Highway, 3100 CABANATUAN CITY PHILIPPINES">
    <meta name="author" content="Nonito Villarosa">

    <title>Nav | Design</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
<!--    <link href="css/screen.css" rel="stylesheet">-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="icon" type="image/png" href="/images/logos.png" /> 

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav justified" style="margin-left:-125px;">
                      <li>
                        <a href="index.php">HOME</a>
                    </li>
                    <li>
                        <a href="profile.html">PROFILE</a>
                    </li>
                    <li>
                        <a href="work.html">WORK</a>
                    </li>
                    <li>
                        <a href="contact.php" class="active">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div id="mainwrap" >
        <div class="container">
            <div class="conwrapper">
                <div class="contactwrapper">
                    <b class="heading">Address</b>
                <div class="innercontact"><p></p>
                    <div id="navD">
                            NAVD+C - Metro Manila
                    </div>
                    <div id="whitecontact">Makati Corporate Office: 28/F CityLand Pasong Tamo Tower, Unit 2807, 2210 Chino Roces Avenue, 1230 Makati City, Metro Manila, Philippines 
                    <p>Tel/Fax: +63 2 8938909 ext.802</p>
                    </div>
                        <!--<table class="contentTable"> 
                        <tr>
                          <td><label class="labelContact">Tel/Fax (L)</label></td>
                         <td><h7>Tel/Fax: +63 2 8938909 ext.802</h7></td>
                         </tr>
                        </table>
                            -->
                    <div id="navD">
                            NAVD+C - Cabanatuan
                    </div>
                    <div id="whitecontact">2/F JRS Building, Unit 7, H.C. Concepcion, Maharlika Highway, 3100 Cabanatuan City, Philippines
                    <p>Tel/Fax: +63 44 9601300</p>
                    </div>
                    
                        
                    <!-- table class="contentTable"> 
                        <tr>
                         <td><label class="labelContact">Tel/Fax (L)</label></td>
                         <td><h7>+63 44 9601300</h7></td>
                         </tr>
                        </table> -->
                    
                    <div id="navD">
                            NAVD+C - Singapore
                    </div>
                    <div id="whitecontact">Blk. 39, Tanglin Halt Road, Unit #01-119V, Singapore 143039
                    <p>Telephone: +65 86600443</p>
                    </div>
                        <!-- <table class="contentTable"> 
                        <tr>
                         <td><label class="labelContact">Telephone (I)</label></td>
                         <td><h7>+65 86600443</h7></td>
                         </tr>
                        </table>
                    -->
                    
<!--
            <table class="contentTable">
                  <tr>
                    <td><label class="labelContact">Tel/Fax (L)</label></td>
                    <td><h7>+63 2 8938909 ext.802</h7></td>
                  </tr>
                  <tr>
                    <td><label class="labelContact">Telephone (I)</label></td>
                    <td><h7>+65 8660 0443 (SG)</h7></td>
                  </tr>
                  <tr>
                    <td><label class="labelContact">E-mail</label></td>
                    <td><h7>info@nav-design.com</h7></td>
                  </tr>
                <tr>
                    <td><label class="labelContact">Website</label></td>
                    <td><h7>www.nav-design.com</h7></td>
                  </tr>
            </table>
-->      
            <b class="heading">Email</b>
            <p id ="subheading">info@navdesign.com
            </p>
                    
            <b class="heading">Enquiry</b>
            <p></p>
            <form action="mailer.php" method="POST">
                <table id="contactForm">
                      <tr>
                        <td><label class="labelContact">Name:<label class="control-label"></label></label></td>
                        <td><input type="text" name="first_name" placeholder="Name"></td>

                      </tr>
                      <tr>
                        <td><label class="labelContact">Company:</label></td>
                        <td><input type="text" name="company" placeholder="Company"></td>
                      </tr>
                      <tr>
                        <td><label class="labelContact">E-mail:<label class="control-label"></label></label></td>

                        <td><input type="email" name="email" placeholder="E-mail"></td>
                      </tr>
                    <tr>
                        <td><label class="labelContact">Phone:<label class="control-label"></label></label></td>
                        <td><input type="text" name="phone" placeholder="Phone"></td>
                      </tr>
                </table>            
                    
                <div class="message">
                    <p class="fonto" style='text-align:left'>Message:<label class="control-label"></label></p>
                        <textarea rows="7" cols="45" name="comment" wrap="hard"></textarea>
                </div>
               <!-- <div class="recaptcha-wrap">   
                   <div class="g-recaptcha" data-sitekey="6LdklhITAAAAADGr43pdhvOXPQ6UY4IXZgu2uONJ" style="transform:scale(0.7);transform-origin:0;-webkit-transform:scale(0.7);
transform:scale(0.7);-webkit-transform-origin:0 0;transform-origin:0 0;"></div>
                   </div>-->

                <style>
                    @media screen and (max-height: 575px){
                    #rc-imageselect, .g-recaptcha {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}
                }
                .recaptcha-wrap{
                    float: left;
                }
                </style>
                <button type="submit" id="submit" class="btn btn-default btn-xs">SEND</button>
        </form>
        </div>             
     </div>
  </div>    <!-- /end of container -->
 </div>
</div>
    
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->`
    <script src="js/bootstrap.min.js"></script>
    <script>
        
//        if(g-recaptcha.getResponse() == ""){
//            alert("You can't proceed!");
//        }else{
//            alert("Thank you");
//        }
//         if(grecaptcha.getResponse() == ""){
//            alert("You can't proceed!");
//        }else{
//            alert("Thank you");
//        }
        
    var width = $('.justified').width();
$('.justified').css('margin-left', '-' + (width / 2)+'px');

<?php if(isset($_GET['failed'])){ ?>
        <?php if($_GET['failed'] == 'true') { ?>
        alert('Please complete all necessary information');

        <?php }else if($_GET['failed'] == 'false'){ ?>
            alert('Thank you for your enquiry! Your informations are kept safely. We will notify you soon!');

        <?php } ?>  

    <?php } ?> 
        

    </script>
    

    
</body>

</html>
