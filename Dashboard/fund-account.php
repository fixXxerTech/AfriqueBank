<?php
  // Create database connection
session_start();

require('../config.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta http-equiv="refresh" content="1800;url=logout.php" />
      <meta charset="utf-8" />
      <title>Afrique Bank - Welcome <?php echo $_SESSION['uname']?>.</title>
          <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Favicon -->
      <link rel="shortcut icon" href="../images/favicon.png">
      <!-- Template CSS Files -->
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/magnific-popup.css">
      <link rel="stylesheet" href="../css/select2.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/skins/orange.css">
      <!-- Live Style Switcher - demo only -->
      <link rel="alternate stylesheet" type="text/css" title="orange" href="../css/skins/orange.css" />
      <link rel="alternate stylesheet" type="text/css" title="green" href="../css/skins/green.css" />
      <link rel="alternate stylesheet" type="text/css" title="blue" href="../css/skins/blue.css" />
      <link rel="stylesheet" type="text/css" href="../css/styleswitcher.css" />
      <!--  W3 Schools CDNs  -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- Template JS Files -->
      <script src="../js/modernizr.js"></script>
   </head>
   <body>
      <!-- SVG Preloader Starts -->
      <div id="preloader">
         <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
               <filter id="dropshadow" height="130%">
                  <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                  <feOffset dx="0" dy="0" result="offsetblur"/>
                  <feFlood flood-color="red"/>
                  <feComposite in2="offsetblur" operator="in"/>
                  <feMerge>
                     <feMergeNode/>
                     <feMergeNode in="SourceGraphic"/>
                  </feMerge>
               </filter>
               <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                  c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                  l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                  c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                  c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                  l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                  C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                  C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                  C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
         </div>
      </div>
      <!-- Wrapper Starts -->
      <div class="wrapper" style="background: white">
         <!-- Header Starts -->
         <header class="header" style="background: white">
               <div class="container">
                  <div class="row">
                     <!-- Logo Starts -->
                       <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                                <a href="index.php" >
                                    <img id="logo" class="img-responsive logo-img" src="../images/afriquebank_logo.png" alt=" Afrique Bank logo">
                                </a>
                            </div>
                     <!-- Logo Ends -->
                     <!-- Statistics Starts -->
                     <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                           <li>
                              <h6>9,450 USD</h6>
                              <span>Last trade price</span>
                           </li>
                           <li>
                              <h6>+5.26%</h6>
                              <span>24 hour price</span>
                           </li>
                           <li>
                              <h6>12.820 BTC</h6>
                              <span>24 hour volume</span>
                           </li>
                           <li>
                              <h6>2,231,775</h6>
                              <span>active traders</span>
                           </li>
                           <li>
                              <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                              <span>Live Bitcoin price</span>
                           </li>
                        </ul>
                     </div>
                     <!-- Statistics Ends -->
                     <!-- User Sign In/Sign Up Starts -->
                     <div class="col-md-3 col-lg-3" style="margin:3px 0; padding:2px 0">
                        <ul class="unstyled user">
                           <li class="sign-in"><a href="logout.php" class="btn btn-primary"><i class=""></i> sign Out</a></li>
                           <li class="sign-up"><a href="user-profile.php" class="btn btn-primary"><i class="fa fa-user-plus"></i> Profile</a></li>
                        </ul>
                     </div>
                     <!-- User Sign In/Sign Up Ends -->
                  </div>
               </div>
               <!-- Navigation Menu Starts -->
               <nav class="site-navigation navigation" id="site-navigation">
                  <div class="container">
                     <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="../index.php">
                           <img id="logo" class="img-responsive logo-img" src="../images/afriquebank_logo.png" alt=" Afrique Bank logo">
                        </a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                           <!-- Main Menu Starts -->
                           <ul class="nav navbar-nav">
                              <li ><a href="dashboard-home.php">Dashboard</a></li>
                              <li class="active"><a href="fund-account.php">Fund Account</a></li>
                              <li><a href="withdraw-funds.php">Withdraw Funds</a></li>
                              <li><a href="p2p.php">Afrique Exchange</a></li>
                              <li><a href="posttrade.php">Post A Trade</a></li>
                           </ul>
                           <!-- Main Menu Ends -->
                        </div>
                     </div>
                  </div>
                  <!-- Search Input Starts -->
                  <div class="site-search">
                     <div class="container">
                        <input type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                     </div>
                  </div>
                  <!-- Search Input Ends -->
               </nav>
               <!-- Navigation Menu Ends -->
            </header>
         <!-- Header Ends -->
         <!-- Banner Area Starts -->
         <section class="">
            <div class="banner-overlay">
               <div class="banner-text text-center">
                  <div class="container">
                     <!-- Section Title Starts -->
                     <div class="row text-center">
                        <div class="col-xs-12">
                           <!-- Title Starts -->
                           <!-- <h2 class="title-head">Welcome <span>{{ User }}</span></h2> -->
                           <!-- Title Ends -->
                           <hr>
                           <!-- Breadcrumb Starts -->
                           <ul class="breadcrumb">
                              <li><a href="index.php"> Dashboard</a></li>
                              <li>Fund Account</li>
                           </ul>
                           <!-- Breadcrumb Ends -->
                        </div>
                     </div>
                     <!-- Section Title Ends -->
                  </div>
               </div>
            </div>
         </section>
         <!-- Banner Area Ends -->
         <h2 class="title-head text-center"><span style="color:#7c5000"> Hello</span> <span><?php echo $_SESSION['uname']; ?></span></h2>
         <!-- Section Services Starts -->
         <section class="services container">
            <div class="row">
              <!-- Top rows Start -->
               <div class="col-md-12" style="padding-bottom:40px">
                  <?php include 'investment.php' ?>
                  </div>
              <!-- Top rows End -->


               <!-- Service Box Starts -->
               <div class="col-md-12 text-center fund-wallet-form container">
                  <div>
                     <img id="crypto-investment" src="../images/icons/orange/cost-efficiency.png" alt="invest crypto">
                     <div class="service-box-content">
                        <h3 class="" style="color: #7c5000">Crypto Investment</h3>
                        <p class="info-form">Fund your investment account</p>
                        <div class="form-container container">
                           <div>
                              <!-- Section Title Starts -->
                              <div class="row text-center">
                              </div>
                              <!-- Section Title Ends -->
                              <!-- Form Starts -->
                              <form method="post" action="fund.php" id="fundform">
                                <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left;  font:inherit;">Choose investment Plan</label>
                                    <select class="form-control" name="plan" id="investment-plan" required>
                                      <!--<option value="">...</option>-->
                                      <option value="beginners">BEGINNERS | MIN:$10,000 MAX:$19,000</option>
                                      <option value="standard">STANDARD PLANAN | MIN:$20,000 MAX:$49,000</option>
                                      <option value="advanced">ADVANCED PLAN | MIN:$50,000 MAX:$99,000</option>
                                      <option value="business">BUSINESS PLAN | MIN:$100,000 MAX: INFINITY</option>
                                    </select>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose investment Option</label>
                                    <select class="form-control" name="option" id="investment-plan" type="text" required>
                                      <optgroup label="Cryptocurrency" >
                                        <!--<option value="">...</option>-->
                                        <option value="Bitcoin">Bitcoin</option>
                                        <option value="Ethereum">Ethereum</option>
                                        <option value="Altcoin">Altcoin</option>
                                        <option value="Litecoin">Litecoin</option>
                                        <option value="Libra">Libra (LIBRA)</option>
                                        <option value="Bitcoin-cash">Bitcoin Cash</option>
                                        <option value="Tether">Tether (USDT)</option>
                                      </optgroup>
                                      <optgroup label="Stocks" >
                                        <option value="Apple">Apple</option>
                                        <option value="Google">Google</option>
                                        <option value="Microsoft">Microsoft</option>
                                        <option value="GAZPROM">GAZPROM</option>
                                        <option value="Cannabis">Cannabis</option>
                                        <option value="GOLD">GOLD</option>
                                        <option value="MCDONALDS">MCDONALDS</option>
                                        <option value="BOEING">BOEING</option>
                                        <option value="NIKE">NIKE</option>
                                        <option value="DOW JONES">DOW JONES</option>
                                      </optgroup>
                                    </select>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose investment amount</label>
                                    <input class="form-control" name="amount" id="amount-to-invest" placeholder="amount to invest" type="text" required>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Withdrawal Address</label>
                                    <input class="form-control" name="withdrawal_address" id="withdrawal-address" placeholder="Your withdrawal address" type="text" required>
                                 </div>
                                 
                                 
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose Payment Method</label>
                                    <select class="form-control" name="payment" id="investment-plan" required>
                                      <!--<option value="">...</option>-->
                                      <option value="bitcoin">Bitcoin</option>
                                      <option value="paypal">Paypal</option>
                                      
                                    </select>
                                 </div>
                                 
                                 
                                  <div class="form-group">
                                 <input class="form-control" name="userid" value="<?php echo $_SESSION['id']; ?>" id="withdrawal-address" placeholder="Your withdrawal address" type="hidden" required>
                                 </div>
                                 
                                 
                                 
                                 <div class="form-group text-center" style="padding-bottom: 1em;">
                                    <button class="btn btn-primary sub" type="button" >Submit</button>
                                 </div>
                                 
                                 <!-- Input Field Ends -->
                                 <!-- Submit Form Button Starts -->
                                
                                 <!-- Submit Form Button Ends -->
                              </form>
                              
                              <div class="step2 text-center">
                                  	    <i class="fa fa-cog fa-spin fa-5x" style="color:#ffae11;"></i>
						    <p>Processing Funds Depost</p>
                              </div>
                              
                              
                              <div class="step3 text-center">
                                  	    <i class="fa fa-check fa-5x" style="color:#ffae11;"></i>
						    <p>Funds Request Proceeding</p>
                              </div>
                              
                              
                              </div>
                              <!-- Form Ends -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Service Box Ends -->               
            </div>
            <!-- Modal -->
            
            <!-- Modal Ends -->
         </section>
         <!-- Section Services Ends -->
         <!-- Footer Starts -->
         <footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
               <div class="container">
                  <div class="row">
                     <!-- Footer Widget Starts -->
                     <div class="col-md-5">
                        <div class="footer-meter-block">
                           <!-- TradingView Widget BEGIN -->
                           <div class="tradingview-widget-container">
                              <div class="tradingview-widget-container__widget"></div>
                              <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/GBPUSD/?exchange=FX" rel="noopener" target="_blank"><span class="blue-text">GBPUSD Rates</span></a> by Afrique Bank</div>
                              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                 {
                                 "symbol": "FX:GBPUSD",
                                 "width": "100%",
                                 "height": "100%",
                                 "locale": "en",
                                 "dateRange": "12M",
                                 "colorTheme": "dark",
                                 "trendLineColor": "rgba(230, 145, 56, 1)",
                                 "underLineColor": "rgba(0, 0, 0, 0.15)",
                                 "isTransparent": true,
                                 "autosize": true,
                                 "largeChartUrl": ""
                                 }
                              </script>
                           </div>
                           <!-- TradingView Widget END -->
                        </div>
                     </div>
                     <!-- Footer Widget Ends -->
                     <!-- Footer Widget Starts -->
                     <div class="col-sm-12 col-md-5">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                           <div>
                              <h5>$198.76B</h5>
                              <span>Market cap</span>
                           </div>
                           <div>
                              <h5>243K</h5>
                              <span>daily transactions</span>
                           </div>
                           <div>
                              <h5>369K</h5>
                              <span>active accounts</span>
                           </div>
                           <div>
                              <h5>127</h5>
                              <span>supported countries</span>
                           </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                     </div>
                     <!-- Footer Widget Ends -->
                  </div>
               </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <!-- Copyright Text Starts -->
                        <p class="text-center"><a href="../index.php" target="_blank">Afrique Bank.</a></p>
                        <!-- Copyright Text Ends -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Footer Bottom Area Ends -->
         </footer>
         <!-- Footer Ends -->
         <!-- Back To Top Starts  -->
         <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
         <!-- Back To Top Ends  -->
         <!-- Template JS Files -->
         <script src="../js/jquery-2.2.4.min.js"></script>
         <script src="../js/bootstrap.min.js"></script>
         <script src="../js/select2.min.js"></script>
         <script src="../js/jquery.magnific-popup.min.js"></script>
         <script src="../js/custom.js"></script>
         <!-- Live Style Switcher JS File - only demo -->
         <script src="../js/styleswitcher.js"></script>
         
         <script>
            
                   $(function () {
 $('.step2').hide();
             $('.step3').hide();
             
           
    
     $(".sub").click(function(){
            $("#fundform").hide();
            $(".step2").show();
            setTimeout(function() { 
        // $('#regform').submit();
        // $(".step3").show();
        
        $(".step2").hide();
        $(".step3").show();
        
        setTimeout(function() {
           $('#fundform').submit()
        // $(".step4").hide();
    }, 2000)
            }, 5000);
          });


     

      });
         </script>
      </div>
      <!-- Wrapper Ends -->
   </body>
</html>