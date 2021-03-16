<?php session_start(); ?>
<html>
<head>
    <meta charset='utf-8' name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=na, minimal-ui'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='materialize/css/materialize.css'> -->
     <!-- <script src='materialize/js/materialize.js'></script>  -->
     <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <link rel="stylesheet" type="text/css" href="../css/snap.css" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel='stylesheet' type='text/css' media='screen' href='../css/materialize.css'>
</head>
<body>
<?include 'menu.html';?>
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p style="font-size: 25px; font-weight: bold">Задать вопрос</p>
				<p class="font18" align="justify">Здесь можно оставить обращение по любому интересующему вопросу: качество услуг, улучшение сервиса, пожелания, предложения. Ни одно сообщение не останется без внимания специалистов отдела качества Спутник!</p>
				<br>
			</div>


			<div class="col-md-12">

				<form enctype="multipart/form-data"   action="mail.php" method="post">
				  
				  	<label class="hidden-xs hidden-sm col-md-2 control-label font18 required" for="Feed_name"><span class="required"></span></label>				
						<input class="form-control font20 feed__name" placeholder="Имя*" name="Feed_name" id="Feed_name" type="text" maxlength="20" style="color:black;"/>										
				  	<label class="hidden-xs hidden-sm col-md-2 control-label font18 required" for="Feed_number"> <span class="required"></span></label>				  	
						<input class="form-control font20 feed__number" placeholder="Номер*" name="Feed_number" id="Feed_number" type="text" maxlength="15" />											

				  	<label class="hidden-xs hidden-sm col-md-2 control-label font18 required" for="Feed_email"> <span class="required"></span></label>				  	
						<input class="form-control font20 feed__email" placeholder="E-mail*" name="Feed_email" id="Feed_email" type="text" />											
		  		
				  	<label class="hidden-xs hidden-sm col-md-2 control-label font18 required" for="Feed_msg"> <span class="required"></span></label>				  	
						<textarea rows="3" class="form-control font20 feed__msg" placeholder="Сообщения*" name="Feed_msg" id="Feed_msg"></textarea>								
		  		
												
                 
                  <br>
				
				    <div class="col-sm-offset-2 col-sm-12">
				      <button type="submit" class="btn btn-warning feed_send" name="submit">Отправить</button>
				    </div>
				
                </div>
				</form>			</div>


		</div>
	</div>
    <? include 'menu2.html';?>
</body>
</html>