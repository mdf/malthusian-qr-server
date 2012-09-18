<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>QR Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="./static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="./static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="./static/bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./static/bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./static/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href=".../static/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./static/bootstrap/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="./static/jquery-1.8.1.js"></script>
    <script src="./static/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
    
    $(function()
    {
   		$("#qrform").submit(function(e) {
   			e.preventDefault();	
   		    var values = $("#qrform").serializeArray();
   		    var v = values[0];
   		    var playerid = v["value"];
   		    if(playerid.length==0)
   	   		    return;
   		   	$("#qr").html("<img src=\"api/qr_gen.php?id="+v["value"]+"\">");

		});

		
	});
	</script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">QR Test</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="#">QR Code</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
		<h2>Generate QR Code</h2>
		<form class="form-inline" id="qrform">
			<input class="input-large" id="player" type="text" name="player" placeholder="Player"/>
			<input type="submit" value="Submit" />
		</form>
		<div id="qr"></div>
	</div> 
    

  </body>
</html>
