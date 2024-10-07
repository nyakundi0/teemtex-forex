<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login");
    exit();
}
?>
<!DOCTYPE >
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TeemTex</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
     <meta name="description" content="The best trading platform">
    
    <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
     <meta name="msapplication-TileImage" content="/static/images/logo1.png">



    <!-- favicon CSS -->
   
    <!-- fonts -->
    <link href="fonts/sfuidisplay.css" rel="stylesheet">
   
    <!-- Icon fonts -->
    
    <!-- Plugins CSS -->

    <script src="https://kit.fontawesome.com/d29c658617.js" crossorigin="anonymous"></script>


    <link href="/static/css/homex.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
   
  <link href="/css/sidenav.css" rel="stylesheet">

   


  <link href="/css/animate.css" rel="stylesheet">



    

  <link href="/css/all.min.css" rel="stylesheet">

 

  <link href="/css/awesome.min.css" rel="stylesheet">


  

  
  <link href="/css/slick.css" rel="stylesheet">


  

  <link href="/css/odometer.css" rel="stylesheet">


 

  <link href="/css/mains4.css" rel="stylesheet">



  <link href="/css/homex.css" rel="stylesheet">
   



  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">


  <style>
        .spinner {
            margin: 300px auto 0;
            width: 70px;
            text-align: center;
        }

        .spinner>div {
            width: 18px;
            height: 18px;
            background-color: #191914;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
            background-color: #2093ed;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
            background-color: #ff2b63;
        }

        @-webkit-keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0)
            }

            40% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes sk-bouncedelay {
            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        /* Sidebar styles */
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: black;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: aqua;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 15px;
            margin-left: 50px;
        }

        /* Page content to be shifted right */
        #main {
            transition: margin-left .5s;
            padding: 16px;
        }
    </style>

       
</head>


<!--pre loader-->







<body class="theme-royal-blue" style="background-color:rgb(0, 204, 255) ;" data-spy="scroll"  data-animation="true" data-appearance="dark"   >

   <!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Sidebar -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="myaccount"><i class="fas fa-user"></i> My Account</a>
    <a href="withdraw"><i class="fas fa-wallet"></i> Withdraw</a>
    <a href="transactions"><i class="fas fa-exchange-alt"></i> Transactions</a>
    <a href="activetrades"><i class="fas fa-chart-line"></i> Active Trades</a>
    <a href="tradinghistory"><i class="fas fa-history"></i> Trading History</a>
    <a href="referral"><i class="fas fa-user-friends"></i> Refer a Friend</a>
    <a href="referrals"><i class="fas fa-users"></i> Referrals</a>
    <a href="terms"><i class="fas fa-file-contract"></i> Terms & Conditions</a>
    <a href="privacy-policy"><i class="fas fa-shield-alt"></i> Our Privacy Policy</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

 <!-- JavaScript to open/close sidebar -->
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>


<div >


          <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            
              <script> 
                  $(document).ready(function(){
                  setInterval(function(){
                      $("#chat-page").load(window.location.href + " #chat-page" );
                  }, 2000);
                  });
              </script>

  
          
                      
<div   style="background-color:rgb(31, 31, 31);height: 100px;position: fixed;width: 100%;top: 0px;">
  <span style="font-size:30px;cursor:pointer;margin: 15px;opacity: 0.9;color: whitesmoke;" onclick="openNav()">&#9776;</span>
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

 
  <span id="chat-page" style="color:whitesmoke ;">Balance : Ksh0.0
 
   
    </span>
 


<a href="deposit" class="btn btn-success" style="color:white;position: absolute;right: 10px;margin: 10px;font-size: 15px;">Deposit</a>





</div>

<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <link rel="stylesheet" href="/static/css/login2.css"/>
       <meta name="theme-color" content=" rgba(2, 1, 15, 0.822)">
   
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
        {
            "colorTheme": "light",
            "dateRange": "1D",
            "showChart": true,
            "locale": "en",
            "width": "100%",
            "height": "100%",
            "largeChartUrl": "",
            "isTransparent": false,
            "showSymbolLogo": true,
            "showFloatingTooltip": false,
            "plotLineColorGrowing": "rgba(0, 0, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(204, 0, 0, 0.08)",
            "scaleFontColor": "rgba(120, 123, 134, 1)",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
            "tabs": [{
                "title": "Forex",
                "symbols": [
                    {"s": "FX:EURUSD", "d": "EUR/USD"},
                    {"s": "FX:GBPUSD", "d": "GBP/USD"},
                    {"s": "FX:USDJPY", "d": "USD/JPY"},
                    {"s": "FX:USDCHF", "d": "USD/CHF"},
                    {"s": "FX:AUDUSD", "d": "AUD/USD"},
                    {"s": "FX:USDCAD", "d": "USD/CAD"},
                    {"s": "OANDA:EURNZD", "d": "EUR/NZD"},
                    {"s": "OANDA:EURGBP", "d": "EUR/GBP"},
                    {"s": "OANDA:AUDJPY", "d": "AUD/JPY"},
                    {"s": "OANDA:CADJPY", "d": "CAD/JPY"},
                    {"s": "OANDA:GBPJPY", "d": "GPB/JPY"}
                ],
                "originalTitle": "Forex"
            }]
        }
    </script>
  </div>
  <!-- TradingView Widget END -->

<div href="logout" class="text-center" style="position:absolute;width:100%;bottom:30px;padding:18px;position: fixed;">
    <a href="trade"  class="btn btn-info " style="width:120px;">Trade</a>
      <a type="button" href="withdraw" class="btn btn-success"  style="color:white;width:120px">Withdraw</a>
    </div>
    
    <div style="position: fixed; left: 0; bottom: 0; z-index: 999999; width: 100%;">
     
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  			<div style="margin-top: 100px;"></div>
  
  			<div class="modal-dialog" role="document" >
  				<div class="modal-content modal-content-bg" style="background: black;border-radius:5px;border-radius:5px;color: white;">
  					<div class="modal-header">
  						<strong class="modal-title method-name " id="exampleModalLabel">Deposit</strong>
  						<a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
  							<span aria-hidden="true" style="color:black">&times;</span>
  						</a>
  					</div>
  					<form action="deposit" method="post" class="withdraw" >
  
  					<input type="hidden" name="csrfmiddlewaretoken" value="uqjBeeWCqqYsPsnlPwGMG4Sops6SlF7K2h6uik1sm1c3ckIhpLN2oZ7q8oGvTSU1">
  
  					     <div class="modal-body">
                 
  							<div class="form-group">
                  <input type="hidden" name="robot" value="3">
  							</div>
                                       
                
                 	<div class="form-group">
  									<label>Phone</label>
  									
  									<div class="input-group">
  										<input id="amount" type="number" placeholder="0722000000" value="" class="form-control form-control-lg"  name="phone" required autocomplete="off" style="background-color:white;color:black">
  									
  								</div>
                  
                  
                             
  									<div class="form-group">
  									<label>Amount in Ksh</label>
  									
  									<div class="input-group">
  										<input id="amount" type="number" placeholder="0.0" class="form-control form-control-lg"  name="amount" required autocomplete="off" style="background-color:white;color:black">
  									
  								</div>
  							</div>
  													</div>
  						<div class="modal-footer " >
  							<div class="text-center">
  							<button type="submit" class="btn btn-md btn-primary">Deposit</button>
  						   </div>
  						</div>
  					</form>
  				</div>
  			</div>
  		</div>
  
  		</div>
     
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div style="margin-top: 100px;"></div>

    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-bg" style="background: black; border-radius: 5px; color: White;">
            <div class="modal-header">
                <strong class="modal-title method-name" id="exampleModalLabel">Withdraw</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: black">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="withdrawForm" action="withdraw" method="post" onsubmit="return validateAmount(this, 100);">
                    <input type="hidden" name="csrfmiddlewaretoken" value="uqjBeeWCqqYsPsnlPwGMG4Sops6SlF7K2h6uik1sm1c3ckIhpLN2oZ7q8oGvTSU1">
                    <div class="form-group">
                        <label for="amount">Amount in Ksh</label>
                        <input id="amount" type="number" class="form-control" name="amount" placeholder="0.0" required style="background-color: white; color: black">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Withdraw</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function validateAmount(form, minAmount) {
    var amountInput = parseFloat(form.amount.value); // Ensure it's treated as a number
    if (amountInput < minAmount || isNaN(amountInput)) {
        alert("The minimum withrawal amount is Ksh. " + minAmount);
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
</script>


<div class="text-right">
        <a href="https://wa.me/254742139721" ><i class="fab fa-whatsapp" style="background-color:green;border-radius:50%;font-size:25px;position:fixed;bottom:250px;right:20px;padding:15px;color:white"></i><a>
        </div>
        
  <div class="text-left">
          <a href="mailto:teemtex001@gmail.com" ><i class="fa fa-envelope" style="background-color:rgb(215, 34, 34);border-radius:50%;font-size:25px;position:fixed;bottom:150px;right:20px;padding:15px;color:white"></i><a>
          </div>
	<div style="position: fixed; left: 0; bottom: 0; z-index: 999999; width: 100%;">
		<div style="width: 100%; background-color: #000; overflow:hidden; box-sizing: border-box; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px;">
			<div style="height:40px;">
				<iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
				 </iframe>
			</div>
			</div>
		</div>     
		</body>
</html>