<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<style>
		.body{
			padding: 0px;
			margin: 0px;
		}
		/*site name background design*/
		.s1{
			position: absolute;
			height: 100px;
			width: 1350px;
			background-color: #154360 ;
			margin-top: 5px;
			margin-left: -8px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.s2{
			position: absolute;
			height: 90px;
			width: 1340px;
			background-color: #76D7C4;
			margin-top: 5px;
			margin-left: 4px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.s3{
			position: absolute;
			height: 70px;
			width: 1320px;
			background-color: #1B2631;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 10px;
			
		}
		/*.ss1 site size*/
		.ss1{
			position: absolute; 
			font-size: 55px;
			margin-left: 435px;
			color: #F7F9F9 ;
		}
		.menu1{
			position: absolute;
			height: 100px;
			width: 1350px;
			background-color: #4A235A;
			margin-top: 110px;
			margin-left: -10px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.menu2{
			position: absolute;
			height: 90px;
			width: 1340px;
			background-color: #E59866 ;
			margin-top: 5px;
			margin-left: 5px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.house{
			position: absolute; 
			font-size: 30px;
			margin-left: 10px;
			margin-top: 35px;
			color: #212F3D;
		}
		.house:hover{
			color:#F4F6F7 ;
		}
		.cars{
			position: absolute; 
			font-size: 30px;
			margin-left: 350px;
			margin-top: 35px;
			color: #212F3D;
		}
		.cars:hover{
			color:#F4F6F7 ;
		}
		.pac{
			position: absolute; 
			font-size: 30px;
			margin-left: 530px;
			margin-top: 35px;
			color: #212F3D;
		}
		.pac:hover{
			color:#F4F6F7 ;
		}
		.log1{
			position: absolute; 
			font-size: 30px;
			margin-left: 980px;
			margin-top: 20px;
			background-color: #063264 ;
			box-sizing: border-box;
			border-radius: 10px;
			height: 40px;
			width: 110px;
		}
		.log2{
			position: absolute; 
			font-size: 30px;
			margin-left: 13px;
			margin-top: 3px;
			color: #F7F8FA ;
			border-radius: 20px;
			height: 40px;
			width: 110px;
		}
		.log1:hover{
			background-color: #DC143C ;
		}
		.log2:hover{
			color: #7FFF00 ;
		}
		.man{
			position: absolute; 
			font-size: 30px;
			margin-left: 1150px;
			margin-top: 20px;
			background-color: #063264 ;
			box-sizing: border-box;
			border-radius: 10px;
			height: 40px;
			width: 110px;
		}
		.man1{
			position: absolute; 
			font-size: 30px;
			margin-left: 17px;
			margin-top: 3px;
			color: #F7F8FA ;
			border-radius: 20px;
			height: 40px;
			width: 110px;
		}
		.man:hover{
			background-color: #DC143C ;
		}
		.man1:hover{
			color: #7FFF00 ;
		}
		.v1{
			position: absolute; 
			font-size: 80px;
			margin-left: 100px;
			margin-top: 300px;
			color: #01331D;
		}
		.l1{
			position: absolute;
			height: 180px;
			width: 10px;
			background-color: #EA0707 ;
			margin-top: 260px;
			margin-left: 450px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.deal1{
			position: absolute; 
			font-size: 50px;
			margin-left: 550px;
			margin-top: 290px;
			color: #17202A;
		}
		.cars1{
			position: absolute; 
			font-size: 30px;
			margin-left: 570px;
			margin-top: 550px;
			background-color: #273746;
			box-sizing: border-box;
			border-radius: 10px;
			height: 50px;
			width: 203px;
			color: black;
		}
		.cars2{
			position: absolute; 
			font-size: 30px;
			margin-left: 13px;
			margin-top: 8px;
			color: #FDFEFE;
			border-radius: 20px;
			height: 40px;
			width: 200px;
		}
		.car1{
			position: absolute;
			height: 650px;
			width: 700px;
			background-color: #273746;
			margin-top: 598px;
			margin-left: 325px;
			box-sizing: border-box;
			border-radius: 70px;
		}
		.car2{
			position: absolute;
			height: 630px;
			width: 680px;
			background-color: #F9F58A;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 70px;
		}
		.car3{
			position: absolute;
			height: 610px;
			width: 660px;
			background-color: #17202A;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 70px;
		}
		.city1{
			position: absolute; 
			font-size: 30px;
			margin-left: 17px;
			margin-top: 20px;
			background-color: #D5F5E3;
			box-sizing: border-box;
			border-radius: 200px;
			height: 50px;
			width: 180px;
		}
		.city2{
			position: absolute; 
			font-size: 30px;
			margin-left: 10px;
			margin-top: 7px;
			color: #060606;
		}
		.city1:hover{
			background-color:#90EE90 ;
		}
		.city2:hover{
			color: #A52A2A;
		}
		a{
			text-decoration: none;
		}
		.out1{
			position: absolute; 
			font-size: 30px;
			margin-left: 218px;
			margin-top: 20px;
			background-color: #D5F5E3;
			box-sizing: border-box;
			border-radius: 200px;
			height: 50px;
			width: 220px;
		}
		.out2{
			position: absolute; 
			font-size: 30px;
			margin-left: 10px;
			margin-top: 7px;
			color: #060606;
		}
		.out1:hover{
			background-color:#90EE90 ;
		}
		.out2:hover{
			color: #A52A2A;
		}
		.ren1{
			position: absolute; 
			font-size: 30px;
			margin-left: 460px;
			margin-top: 20px;
			background-color: #D5F5E3;
			box-sizing: border-box;
			border-radius: 200px;
			height: 50px;
			width: 180px;
		}
		.ren2{
			position: absolute; 
			font-size: 30px;
			margin-left: 20px;
			margin-top: 7px;
			color: #060606;
		}
		.ren1:hover{
			background-color:#90EE90 ;
		}
		.ren2:hover{
			color: #A52A2A;
		}
		.l2{
			position: absolute;
			height: 10px;
			width: 630px;
			background-color: #F9B476;
			margin-top: 100px;
			margin-left: 13px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.back1{
			position: absolute;
			height: 110px;
			width: 580px;
			background-color: #F9E79F;
			margin-top: 120px;
			margin-left: 42px;
			box-sizing: border-box;
			border-radius: 10px;
			color: #17202A;
		}
		.your1{
			position: absolute; 
			font-size: 30px;
			margin-left: 140px;
			margin-top: 125px;
			color: #17202A;
		}
		.ac1{
			position: absolute; 
			font-size: 30px;
			margin-left: 46px;
			margin-top: 170px;
			color: #17202A;
		}
		.back2{
			position: absolute;
			height: 57px;
			width: 630px;
			background-color: #A3E4D7;
			margin-top: 250px;
			margin-left: 13px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.pic1{
			position: absolute; 
			font-size: 28px;
			margin-left: 40px;
			margin-top: 12px;
			color: #145A32;
		}
		.text1{
			position: absolute; 
			font-size: 30px;
			margin-left: 170px;
			margin-top: 6px;
			color: #17202A;
			height: 40px;
			width: 400px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.back3{
			position: absolute;
			height: 57px;
			width: 630px;
			background-color: #A3E4D7;
			margin-top: 320px;
			margin-left: 13px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.drop1{
			position: absolute; 
			font-size: 28px;
			margin-left: 40px;
			margin-top: 12px;
			color: #145A32;
		}
		.text2{
			position: absolute; 
			font-size: 30px;
			margin-left: 170px;
			margin-top: 6px;
			color: #17202A;
			height: 40px;
			width: 400px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.back4{
			position: absolute;
			height: 57px;
			width: 630px;
			background-color: #A3E4D7;
			margin-top: 390px;
			margin-left: 13px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.when1{
			position: absolute; 
			font-size: 28px;
			margin-left: 40px;
			margin-top: 12px;
			color: #145A32;
		}
		.text3{
			position: absolute; 
			font-size: 30px;
			margin-left: 170px;
			margin-top: 6px;
			color: #17202A;
			height: 40px;
			width: 400px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.back5{
			position: absolute;
			height: 57px;
			width: 200px;
			background-color: #E74C3C;
			margin-top: 530px;
			margin-left: 235px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.ser1{
			position: absolute; 
			font-size: 30px;
			margin-left: 18px;
			margin-top: 8px;
			color: #D7DBDD;
		}
		.back5:hover{
			background-color:#FFA500;
		}
		.ser1:hover{
			color: #FFEBCD;
		}
		.house2{
			position: absolute; 
			font-size: 30px;
			margin-left: -180px;
			margin-top: 800px;
			background-color: #17202A;
			box-sizing: border-box;
			border-radius: 10px;
			height: 50px;
			width: 375px;
			color: #FDFEFE;
		}
		.house3{
			position: absolute; 
			font-size: 30px;
			margin-left: 13px;
			margin-top: 8px;
			color: #FDFEFE;
			border-radius: 20px;
			height: 40px;
			width: 400px;
		}
		.hous1{
			position: absolute; 
			font-size: 30px;
			margin-left: -180px;
			margin-top: 849px;
			background-color: #17202A;
			box-sizing: border-box;
			border-radius: 10px;
			height: 100px;
			width: 1000px;
			color: #17202A;
		}
		.l4{
			position: absolute;
			height: 88px;
			width: 5px;
			background-color: #EA0707;
			margin-top: 4px;
			margin-left: -650px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.text4{
			position: absolute; 
			font-size: 25px;
			margin-left: 70px;
			margin-top: 5px;
			color: #FDFEFE;
			height: 40px;
			width: 250px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.ch1{
			position: absolute; 
			font-size: 30px;
			margin-left: -580px;
			margin-top: 10px;
			color: #FDFEFE;
		}
		.ch2{
			position: absolute; 
			font-size: 30px;
			margin-left: -380px;
			margin-top: 10px;
			color: #FDFEFE;
		}
		.ser3{
			position: absolute;
			height: 40px;
			width: 150px;
			background-color: #E74C3C;
			margin-top: -43px;
			margin-left: 810px;
			box-sizing: border-box;
			border-radius: 20px;
		}
		.ser4{
			position: absolute; 
			font-size: 28px;
			margin-left: 33px;
			margin-top: 5px;
			color: #D7DBDD;
		}
		.ser3:hover{
			background-color:#FFA500;
		}
		.ser4:hover{
			color: #FFEBCD;
		}
	</style>
</head>
<body bgcolor="#F9E79F">
<div class="s1">
	<div class="s2">
		<div class="s3">
			<form>
				<table>
					<tr>
						<td><b class="ss1">Welcome to VBOK</b></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="menu1">
	<div class="menu2">
	<table>
		<tr>
			<td><b></b></td>
			<td><b></b></td>
			<td><b></b></td>
		</tr>
		<tr>
			<td><a href=""> <b class="house"> House/Apartment</b></a></td>
			<td><a href=""> <b class="cars"> Cars</b></a></td>
			<td><a href=""><b class="pac">Packages</b></a></td>
			<td><a href=""><b class="log1"><div class="log2">Log in</div></b></a></td>
			<td><a href=""><b class="man"><div class="man1">Menu</div></b></a></td>
		</tr>
	</table>
	</div>
</div>
	<table>
		<tr>
			<td>
				<b class="v1">VBOK</b>
			</td>
			<td class="l1"></td>
			<td>
				<b class="deal1">Deals from your favourite booking sites</b>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<b class="cars1"><div class="cars2"> Cars Booking</div></b>
			</td>
		</tr>
	</table>
<div class="car1">
	<div class="car2">
		<div class="car3">
			<table>
				<tr>
					<td class="city1"><a href="" class="city2"><b>CITY TAXI</b></a></td>
					<td class="out1"><a href="" class="out2"><b>OUTSTATION</b></a></td>
					<td class="ren1"><a href="" class="ren2"><b>RENTALS</b></a></td>
				</tr>
				<tr>
					<td class="l2"></td>
				</tr>
				<div class="back1">
				<tr >
					<td class="your1"><b>Your everyday travel partner</b></td>
				</tr>
				<tr >
					<td class="ac1"><b>AC / NON AC Cabs for point to point travel</b></td>
				</tr>
			</div>
				<tr class="back2">
					<td class="pic1"><b>PICKUP</b></td>
					<td ><input type="text" name="" class="text1"></td>
				</tr>
				<tr class="back3">
					<td class="drop1"><b>DROP</b></td>
					<td ><input type="text" name="" class="text2"></td>
				</tr>
				<tr class="back4">
					<td class="when1"><b>WHEN</b></td>
					<td ><select class="text3">
						<option>Now</option>
						<option>Schedule for later</option>
					</select></td>
				</tr>
				<tr class="back5">
					<td><a href=""><b class="ser1">Search Cabs</b></a></td>
				</tr>
			</table>
			<table>
				<tr>
					<td class="house2"><b class="house3">House/Apartment Booking</b></td>
				</tr>
			</table>
			<table class="hous1">
				<tr>
					<td>
						<input type="text" name="" class="text4">
					</td>
					<td class="l4"></td>
					<td class="ch1"><b>Check in</b></td>
					<td class="ch2"><b>Check out</b></td>
				</tr>
				<tr>
					<td ><a href="" class="ser3"><b class="ser4">Search</b></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>