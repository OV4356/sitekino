<!DOCTYPE html>
<html>
	<head>
		<link href="smart.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>Кинотеатр HOLLYWOOD</title>
		<style>
			.gradient {
				background: #fefcea;
				background: linear-gradient(to top,#778899, #2F4F4F);
				border-top: 1px solid #333;
				border-bottom: 1px solid #333;
				margin-top:0px;
				margin-bottom:0px;
				width:100%;
			}
		</style>
		<meta name="keywords" content="кино, фильмы, развлечения, кинотеатр">
		<meta name="description" content="Кинотеатр  ">
		<link rel="icon" href="favicon.ico" type="image/x-icon" /> 
		<link rel="shortcut icon" href="star.ico" type="image/x-icon" />
	</head>
	
	<body>
		<div class="header">	
			<div>
			<img width="100%" src="h3.jpg">
			</div>
			
			<ul class="menu gradient"> 
				<li><a href="tab.php">Главная</a></li>
				<li><a href="about.php">О кинотеатре</a></li>
				<li><a href="news.php">Новости и акции</a></li>
				<li><a href="buy.php">Забронировать</a></li>
		   </ul>			
	   </div>
	   
		
		
		
			<div class="text"> 				
			<h1>Забронировать билеты</h1>
			
			<div class="vvod">
			<form method="post" action="bue.php">
			<p>Введите фамилию бронирующего:<br><input type="text" name="name"/></p>
			<p>Выберите дату сеанса:<br><input type="text" name="data" /></p> 
			<?
			$name = $_POST['name'];
			$data = $_POST['data'];
			?>
	
			
			<p></p>
			
			<p></p>
			</div>
			
			
			
			
			
				<div class="kino">
				<p>Выберте фильм и время:</p>
				<table>
				<tr><td><img width="150px" src="p1.jpg"></td>
				<td><img width="150px" src="p2.jpg"></td>
				<td><img width="150px" src="p3.jpg"></td></tr>
				<tr><td style="padding-top:50px">10:10</td><td style="padding-top:50px">13:30</td>
				<td style="padding-top:50px">15:45</td></tr>
				<tr><td style="padding-top:50px">17:30</td>
				<td style="padding-top:50px">19:30</td><td style="padding-top:50px">20:50</td></tr>
				<tr><td style="padding-top:50px">22:45</td></tr>
				</table>
				<p>Выберите фильм:<br><input type="text" name="film"/></p> 
				<p>Выберите время сеанса:<br><input type="text" name="time"/></p> 
				</div>
				
				<div class="place">
				<br><p>Выберите место:</p>
				<br><p><img width="70%" src="place.png">
				<p>Ряд:<br><input type="text" name="rad" /></p>
				<p>Места:<br><input type="text" name="mesto" /></p>
				</div>
				<?
				$film = $_POST['film'];
				$time = $_POST['time'];
				$rad = $_POST['rad'];
				$mesto = $_POST['mesto'];
				?>
				
				
				
				<br>
			<p style="text-align:right;
			margin-bottom:0;"><input type="submit" name = "add">
			<br>
			<br><br><br>
				</form></div>
				<? 
				
				$check_connect = mysql_connect("localhost","root","");
				mysql_select_db("Kino");
				mysql_set_charset("utf8");
				if(isset($_POST['add'])){ 
				$res = mysql_query("SELECT COUNT(*) FROM Kino");
				$row = mysql_fetch_row($res);
				$total = $row[0];
				$total = $total + 1;
					$sql = mysql_query("INSERT INTO Kino VALUES('$total', '$name', '$data', '$film', '$time', $rad, $mesto)");

				}
				mysql_close();

		?>
		
	
		<div class="footer gradient">
			

	
				<ul class="bottom" style="padding-left:10%">
					<li><a href="#" style="color: black;  text-transform: none;"> Мы в соцсетях:</a></li>
					<li><a href="#" style="color: black; text-transform: none;"> Вконтакте</a></li>
					<li><a href="#" style="color: black; text-transform: none;"> Facebook</a></li>
					<li><a href="#" style="color: black; text-transform: none;"> Instagram</a></li>
				</ul>
		
				<div class="bottom" style="color: black; padding-left:25%"> 2019 © HOLLYWOOD.ru Все права защищены. 
				<br>При копировании материалов ссылка на сайт обязательна. </div>
			
			</div>
	
			
		</div>
	</body>
</html>
