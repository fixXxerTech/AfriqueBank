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

      <style>

      </style>
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
                             <li><a href="dashboard-home.php">Dashboard</a></li>
                              <li><a href="fund-account.php">Fund Account</a></li>
                              <li><a href="withdraw-funds.php">Withdraw Funds</a></li>
                              <li ><a href="p2p.php">Afrique Exchange</a></li>
                              <li class="active"><a href="posttrade.php">Post A Trade</a></li>
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
         <h2 class="title-head text-center"><span style="color:#7c5000"> Hello </span><span><?php echo $_SESSION['uname']; ?></span></h2>

<div class="container">
<h2>Create a bitcoin trade advertisement</h2>

<p>Advertisement rules and requirements
<ul>
<li> For your ads to display you need to have Bitcoins in your LocalBitcoins wallet.</li>
<li> The advertiser pays the service fee. The user who posts an ad is charged 1% of the total trade volume for each completed trade.</li>
<li> Once a trade is opened the price is final, except when there is a clear mistake in the pricing.</li>
<li> You are not allowed to buy or sell Bitcoin on behalf of someone else (brokering).</li>
<li> You may only send and receive payment using accounts that are registered in your own name. Third party payments are not allowed.</li>
<li> You must provide your payment details in the advertisement or in the trade chat.</li>
<li> All communication must happen on LocalBitcoins.com.</li>
<li> Payment methods marked High Risk have a significant risk of fraud. Be careful and always ID verify your trading partners when using high risk payment methods.</li>
</ul>

</p>
</div>
         <!-- Section Services Starts -->
               <div class="col-md-12 text-center fund-wallet-form container" style="background-color: white; margin-bottom:10px;">
                  <div>
                     <img id="crypto-investment" src="../images/icons/orange/cost-efficiency.png" alt="invest crypto">
                     <div class="service-box-content">
                        <h3 class="" style="color: #7c5000">Post a Trade</h3>
                        <!-- <p class="info-form">Fund your investment account</p> -->
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
                                    <label style="float: left;  font:inherit;">Choose Trade Type</label>
                                    <select class="form-control" name="action" id="investment-plan" required>
                                      <!--<option value="">...</option>-->
                                      <option value="buy">BUY</option>
                                      <option value="sell">SELL</option>
                                    </select>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose Currency</label>
                                    <select class="form-control" name="option" id="investment-plan" type="text" required>
                                      <optgroup label="Cryptocurrency" >
                                        <!--<option value="">...</option>-->
                                        <option value="Bitcoin">Bitcoin</option>
                                        <option value="Ethereum">Ethereum</option>
                                        <option value="Litecoin">Litecoin</option>
                                        <option value="Libra">TRON</option>
                                        <option value="Bitcoin-cash">Bitcoin Cash</option>
                                        <option value="Tether">Tether (USDT)</option>
                                      </optgroup>
                                      <!-- <optgroup label="Stocks" >
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
                                      </optgroup> -->
                                    </select>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose Payment Method</label>
                                   <select class="form-control" name="paymthd" id="payment_method" required="">
    <option value="NATIONAL_BANK">National bank transfer</option>
<option value="SEPA">SEPA (EU) bank transfer</option>
<option value="SPECIFIC_BANK">Transfers with specific bank</option>
<option value="INTERNATIONAL_WIRE_SWIFT">International Wire (SWIFT)</option>
<option value="OTHER">Other online payment</option>
<option value="CASH_DEPOSIT">Cash deposit</option>
<option value="ECOCASH">EcoCash</option>
<option value="HAL_CASH">Hal-cash</option>
<option value="SWISH">Swish</option>
<option value="VIPPS">Vipps</option>
<option value="MOBILEPAY_DANSKE_BANK">MobilePay FI</option>
<option value="QIWI">QIWI</option>
<option value="TELE2">Mobile top-up</option>
<option value="SBERBANK">Sberbank</option>
<option value="TINKOFF">Tinkoff</option>
<option value="ALFA_BANK">Alfa-Bank</option>
<option value="VTB_BANK">VTB Bank (VTB)</option>
<option value="CARD_TO_CARD_RUSSIA_VISA">Visa - Visa</option>
<option value="CARD_TO_CARD_RUSSIA_MASTERCARD">Mastercard - Mastercard</option>
<option value="CARD_TO_CARD_RUSSIA">Card to card</option>
<option value="MIR">Mir</option>
<option value="SBP_FAST_TRANSFER">SBP - Fast Bank Transfer</option>
<option value="BANK_TRANSFER_IMPS">IMPS Bank Transfer India</option>
<option value="UPI_TRANSFER">UPI Transfer</option>
<option value="PAYTM">PayTM</option>
<option value="LYDIA">Lydia</option>
<option value="INTERAC">Interac e-transfer</option>
<option value="PINGIT">Pingit</option>
<option value="PAYM">Paym</option>
<option value="PYC">PYC</option>
<option value="ALIPAY">Alipay</option>
<option value="SUPERFLASH">Superflash</option>
<option value="CHASE_QUICKPAY">Chase Quickpay</option>
<option value="CHIPPER_CASH">Chipper Cash</option>
<option value="OKPAY">OKPay</option>
<option value="PAYPAL">Paypal</option>
<option value="WEBMONEY">WebMoney</option>
<option value="MONEYBOOKERS">Moneybookers / Skrill</option>
<option value="NETELLER">Neteller</option>
<option value="APPLE_PAY">Apple Pay</option>
<option value="TWINT">TWINT</option>
<option value="WU">Western Union</option>
<option value="PostePay">PostePay</option>
<option value="MONEYGRAM">Moneygram</option>
<option value="CASHIERS_CHECK">Cashier&#39;s check</option>
<option value="VENMO">Venmo</option>
<option value="ZELLE">Zelle</option>
<option value="DWOLLA">Dwolla</option>
<option value="PERFECT_MONEY">Perfect Money</option>
<option value="CASHU">CashU</option>
<option value="PAYZA">Payza</option>
<option value="BLUEBIRD_CARD">Bluebird Card</option>
<option value="REVOLUT">Revolut</option>
<option value="GREENDOT_CARD">GreenDot Card</option>
<option value="ASTROPAY">AstroPay</option>
<option value="MPESA_KENYA">M-PESA Kenya (Safaricom)</option>
<option value="MPESA_TANZANIA">M-PESA Tanzania (Vodacom)</option>
<option value="PAYID">PayID</option>
<option value="OTHER_ONLINE_WALLET">Other Online Wallet</option>
<option value="OTHER_ONLINE_WALLET_GLOBAL">Other Online Wallet (Global)</option>
<option value="OTHER_REMITTANCE">Other Remittance</option>
<option value="ADVCASH">advcash</option>
<option value="ALTCOIN_ETH">Ethereum altcoin</option>
<option value="ALTCOIN_LTC">Litecoin altcoin</option>
<option value="ALTCOIN_XLM">Stellar altcoin</option>
<option value="ALTCOIN_XRP">Ripple altcoin</option>
<option value="ALTCOIN_XVG">Verge altcoin</option>
<option value="ALTCOIN_OKB">OKB altcoin</option>
<option value="BITMAIN_COUPON">Bitmain Coupon</option>
<option value="CASH_AT_ATM">Cash at ATM</option>
<option value="CREDITCARD">Credit card</option>
<option value="EASYPAISA">Easypaisa</option>
<option value="GOOGLEWALLET">Google Pay</option>
<option value="HYPERWALLET">hyperWALLET</option>
<option value="MOBILEPAY_DANSKE_BANK_DK">MobilePay</option>
<option value="MOBILEPAY_DANSKE_BANK_NO">MobilePay NO</option>
<option value="PAXUM">Paxum</option>
<option value="PAYEER">Payeer</option>
<option value="PAYONEER">Payoneer</option>
<option value="RIA">RIA Money Transfer</option>
<option value="SERVE2SERVE">Serve2Serve</option>
<option value="SQUARE_CASH">Cash App</option>
<option value="TIGOPESA_TANZANIA">Tigo-Pesa Tanzania</option>
<option value="TRANSFERWISE">Transferwise</option>
<option value="WALMART2WALMART">Walmart 2 Walmart</option>
<option value="WECHAT">WeChat</option>
<option value="WORLDREMIT">Worldremit</option>
<option value="XOOM">Xoom</option>
<option value="YANDEXMONEY">Yandex Money</option>
</select>
                                 </div>
                                 <!-- Input Field Ends -->
                                 <!-- Input Field Starts -->
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Choose Currency</label>
                                   

                                    <select class="form-control" name="currency" id="currencyList" required>
    <option value="USD" selected="selected" label="US dollar">USD</option>
    <option value="EUR" label="Euro">EUR</option>
    <option value="JPY" label="Japanese yen">JPY</option>
    <option value="GBP" label="Pound sterling">GBP</option>
    <option disabled>──────────</option>
    <option value="AED" label="United Arab Emirates dirham">AED</option>
    <option value="AFN" label="Afghan afghani">AFN</option>
    <option value="ALL" label="Albanian lek">ALL</option>
    <option value="AMD" label="Armenian dram">AMD</option>
    <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
    <option value="AOA" label="Angolan kwanza">AOA</option>
    <option value="ARS" label="Argentine peso">ARS</option>
    <option value="AUD" label="Australian dollar">AUD</option>
    <option value="AWG" label="Aruban florin">AWG</option>
    <option value="AZN" label="Azerbaijani manat">AZN</option>
    <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
    <option value="BBD" label="Barbadian dollar">BBD</option>
    <option value="BDT" label="Bangladeshi taka">BDT</option>
    <option value="BGN" label="Bulgarian lev">BGN</option>
    <option value="BHD" label="Bahraini dinar">BHD</option>
    <option value="BIF" label="Burundian franc">BIF</option>
    <option value="BMD" label="Bermudian dollar">BMD</option>
    <option value="BND" label="Brunei dollar">BND</option>
    <option value="BOB" label="Bolivian boliviano">BOB</option>
    <option value="BRL" label="Brazilian real">BRL</option>
    <option value="BSD" label="Bahamian dollar">BSD</option>
    <option value="BTN" label="Bhutanese ngultrum">BTN</option>
    <option value="BWP" label="Botswana pula">BWP</option>
    <option value="BYN" label="Belarusian ruble">BYN</option>
    <option value="BZD" label="Belize dollar">BZD</option>
    <option value="CAD" label="Canadian dollar">CAD</option>
    <option value="CDF" label="Congolese franc">CDF</option>
    <option value="CHF" label="Swiss franc">CHF</option>
    <option value="CLP" label="Chilean peso">CLP</option>
    <option value="CNY" label="Chinese yuan">CNY</option>
    <option value="COP" label="Colombian peso">COP</option>
    <option value="CRC" label="Costa Rican colón">CRC</option>
    <option value="CUC" label="Cuban convertible peso">CUC</option>
    <option value="CUP" label="Cuban peso">CUP</option>
    <option value="CVE" label="Cape Verdean escudo">CVE</option>
    <option value="CZK" label="Czech koruna">CZK</option>
    <option value="DJF" label="Djiboutian franc">DJF</option>
    <option value="DKK" label="Danish krone">DKK</option>
    <option value="DOP" label="Dominican peso">DOP</option>
    <option value="DZD" label="Algerian dinar">DZD</option>
    <option value="EGP" label="Egyptian pound">EGP</option>
    <option value="ERN" label="Eritrean nakfa">ERN</option>
    <option value="ETB" label="Ethiopian birr">ETB</option>
    <option value="EUR" label="EURO">EUR</option>
    <option value="FJD" label="Fijian dollar">FJD</option>
    <option value="FKP" label="Falkland Islands pound">FKP</option>
    <option value="GBP" label="British pound">GBP</option>
    <option value="GEL" label="Georgian lari">GEL</option>
    <option value="GGP" label="Guernsey pound">GGP</option>
    <option value="GHS" label="Ghanaian cedi">GHS</option>
    <option value="GIP" label="Gibraltar pound">GIP</option>
    <option value="GMD" label="Gambian dalasi">GMD</option>
    <option value="GNF" label="Guinean franc">GNF</option>
    <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
    <option value="GYD" label="Guyanese dollar">GYD</option>
    <option value="HKD" label="Hong Kong dollar">HKD</option>
    <option value="HNL" label="Honduran lempira">HNL</option>
    <option value="HKD" label="Hong Kong dollar">HKD</option>
    <option value="HRK" label="Croatian kuna">HRK</option>
    <option value="HTG" label="Haitian gourde">HTG</option>
    <option value="HUF" label="Hungarian forint">HUF</option>
    <option value="IDR" label="Indonesian rupiah">IDR</option>
    <option value="ILS" label="Israeli new shekel">ILS</option>
    <option value="IMP" label="Manx pound">IMP</option>
    <option value="INR" label="Indian rupee">INR</option>
    <option value="IQD" label="Iraqi dinar">IQD</option>
    <option value="IRR" label="Iranian rial">IRR</option>
    <option value="ISK" label="Icelandic króna">ISK</option>
    <option value="JEP" label="Jersey pound">JEP</option>
    <option value="JMD" label="Jamaican dollar">JMD</option>
    <option value="JOD" label="Jordanian dinar">JOD</option>
    <option value="JPY" label="Japanese yen">JPY</option>
    <option value="KES" label="Kenyan shilling">KES</option>
    <option value="KGS" label="Kyrgyzstani som">KGS</option>
    <option value="KHR" label="Cambodian riel">KHR</option>
    <option value="KID" label="Kiribati dollar">KID</option>
    <option value="KMF" label="Comorian franc">KMF</option>
    <option value="KPW" label="North Korean won">KPW</option>
    <option value="KRW" label="South Korean won">KRW</option>
    <option value="KWD" label="Kuwaiti dinar">KWD</option>
    <option value="KYD" label="Cayman Islands dollar">KYD</option>
    <option value="KZT" label="Kazakhstani tenge">KZT</option>
    <option value="LAK" label="Lao kip">LAK</option>
    <option value="LBP" label="Lebanese pound">LBP</option>
    <option value="LKR" label="Sri Lankan rupee">LKR</option>
    <option value="LRD" label="Liberian dollar">LRD</option>
    <option value="LSL" label="Lesotho loti">LSL</option>
    <option value="LYD" label="Libyan dinar">LYD</option>
    <option value="MAD" label="Moroccan dirham">MAD</option>
    <option value="MDL" label="Moldovan leu">MDL</option>
    <option value="MGA" label="Malagasy ariary">MGA</option>
    <option value="MKD" label="Macedonian denar">MKD</option>
    <option value="MMK" label="Burmese kyat">MMK</option>
    <option value="MNT" label="Mongolian tögrög">MNT</option>
    <option value="MOP" label="Macanese pataca">MOP</option>
    <option value="MRU" label="Mauritanian ouguiya">MRU</option>
    <option value="MUR" label="Mauritian rupee">MUR</option>
    <option value="MVR" label="Maldivian rufiyaa">MVR</option>
    <option value="MWK" label="Malawian kwacha">MWK</option>
    <option value="MXN" label="Mexican peso">MXN</option>
    <option value="MYR" label="Malaysian ringgit">MYR</option>
    <option value="MZN" label="Mozambican metical">MZN</option>
    <option value="NAD" label="Namibian dollar">NAD</option>
    <option value="NGN" label="Nigerian naira">NGN</option>
    <option value="NIO" label="Nicaraguan córdoba">NIO</option>
    <option value="NOK" label="Norwegian krone">NOK</option>
    <option value="NPR" label="Nepalese rupee">NPR</option>
    <option value="NZD" label="New Zealand dollar">NZD</option>
    <option value="OMR" label="Omani rial">OMR</option>
    <option value="PAB" label="Panamanian balboa">PAB</option>
    <option value="PEN" label="Peruvian sol">PEN</option>
    <option value="PGK" label="Papua New Guinean kina">PGK</option>
    <option value="PHP" label="Philippine peso">PHP</option>
    <option value="PKR" label="Pakistani rupee">PKR</option>
    <option value="PLN" label="Polish złoty">PLN</option>
    <option value="PRB" label="Transnistrian ruble">PRB</option>
    <option value="PYG" label="Paraguayan guaraní">PYG</option>
    <option value="QAR" label="Qatari riyal">QAR</option>
    <option value="RON" label="Romanian leu">RON</option>
    <option value="RON" label="Romanian leu">RON</option>
    <option value="RSD" label="Serbian dinar">RSD</option>
    <option value="RUB" label="Russian ruble">RUB</option>
    <option value="RWF" label="Rwandan franc">RWF</option>
    <option value="SAR" label="Saudi riyal">SAR</option>
    <option value="SEK" label="Swedish krona">SEK</option>
    <option value="SGD" label="Singapore dollar">SGD</option>
    <option value="SHP" label="Saint Helena pound">SHP</option>
    <option value="SLL" label="Sierra Leonean leone">SLL</option>
    <option value="SLS" label="Somaliland shilling">SLS</option>
    <option value="SOS" label="Somali shilling">SOS</option>
    <option value="SRD" label="Surinamese dollar">SRD</option>
    <option value="SSP" label="South Sudanese pound">SSP</option>
    <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
    <option value="SYP" label="Syrian pound">SYP</option>
    <option value="SZL" label="Swazi lilangeni">SZL</option>
    <option value="THB" label="Thai baht">THB</option>
    <option value="TJS" label="Tajikistani somoni">TJS</option>
    <option value="TMT" label="Turkmenistan manat">TMT</option>
    <option value="TND" label="Tunisian dinar">TND</option>
    <option value="TOP" label="Tongan paʻanga">TOP</option>
    <option value="TRY" label="Turkish lira">TRY</option>
    <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
    <option value="TVD" label="Tuvaluan dollar">TVD</option>
    <option value="TWD" label="New Taiwan dollar">TWD</option>
    <option value="TZS" label="Tanzanian shilling">TZS</option>
    <option value="UAH" label="Ukrainian hryvnia">UAH</option>
    <option value="UGX" label="Ugandan shilling">UGX</option>
    <option value="USD" label="United States dollar">USD</option>
    <option value="UYU" label="Uruguayan peso">UYU</option>
    <option value="UZS" label="Uzbekistani soʻm">UZS</option>
    <option value="VES" label="Venezuelan bolívar soberano">VES</option>
    <option value="VND" label="Vietnamese đồng">VND</option>
    <option value="VUV" label="Vanuatu vatu">VUV</option>
    <option value="WST" label="Samoan tālā">WST</option>
    <option value="XAF" label="Central African CFA franc">XAF</option>
    <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
    <option value="XOF" label="West African CFA franc">XOF</option>
    <option value="XPF" label="CFP franc">XPF</option>
    <option value="ZAR" label="South African rand">ZAR</option>
    <option value="ZMW" label="Zambian kwacha">ZMW</option>
    <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
</select>
                       </div>
                                 
                                 
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Minimum Transaction Limit</label>
                                    <input class="form-control" name="mintrans" id="withdrawal-address" placeholder="Your withdrawal address" type="text" required>
                                    
                                 </div>
                                 
                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Maximum Transaction Limit</label>
                                    <input class="form-control" name="maxtrans" id="withdrawal-address" placeholder="Your withdrawal address" type="text" required>
                                    
                                 </div>


                                 <div class="form-group">
                                    <label style="float: left; font:inherit;">Terms of trade and payment</label>
                                    <textarea class="form-control" name="terms" id="withdrawal-address" placeholder="All additional information needed to make the trade successful" type="text" required rows="10"> </textarea>
                                    
                                 </div>
                                 
                                  <div class="form-group">
                                 <input class="form-control" name="userid" value="<?php echo $_SESSION['id']; ?>" id="withdrawal-address" placeholder="Your withdrawal address" type="hidden" required>
                                 </div>
                                 
                                 <div class="form-group">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> <span style="color:#ffae11;">I Agree to the Terms and Conditions</span>
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
                <p>Processing Trade Post</p>
                              </div>
                              
                              
                              <div class="step3 text-center">
                                        <i class="fa fa-check fa-5x" style="color:#ffae11;"></i>
                <p>Successful, Proceeding...</p>
                              </div>
                              
                              
                              </div>
                              <!-- Form Ends -->
                           </div>
                        </div>
                     </div>
                  </div>
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