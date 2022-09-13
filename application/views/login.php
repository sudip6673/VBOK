<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<style>
		@media (min-width : 501px) and (max-width : 1500px)
		{
		.body{
			padding: 0px;
			margin:0px;
		}
		.s1{
			position: absolute;
			height: 550px;
			width: 450px;
			background-color: #145A32;
			margin-top: 25px;
			margin-left: 455px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.s2{
			position: absolute;
			height: 530px;
			width: 430px;
			background-color: #FBFE0D;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.s3{
			position: absolute;
			height: 510px;
			width: 410px;
			background-color: #A5069C;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.l1{
			position: absolute;
			height: 60px;
			width: 110px;
			background-color: #FD2323;
			margin-top: 1px;
			margin-left: 146px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.l2{
			position: absolute;
			font-size: 32px;
			color: #FCFCFC;
			margin-top: 10px;
			margin-left: 10px;
			
		}
		.u1{
			position: absolute;
			font-size: 34px;
			color: #FCFCFC;
			margin-top: 130px;
			margin-left: 10px;
		}
		.u2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			margin-top: 128px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 30px;
		}
		.p1{
			position: absolute;
			font-size: 34px;
			color: #FCFCFC;
			margin-top: 200px;
			margin-left: 10px;
		}
		.p2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 30px;
			margin-top: 198px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		a{
			text-decoration: none;
		}
		.log1{
			position: absolute;
			height: 60px;
			width: 110px;
			background-color: #76D7C4;
			margin-top: 280px;
			margin-left: 146px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 32px;
			color: #212F3D;
			font-family: bold;
		}
		.log1:hover{
			background-color: #F8C471;
			color: #641E16;
		}
		.f1{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 370px;
			margin-left: 125px;
		}
		.f2{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 400px;
			margin-left: 115px;
		}
		.r1{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 450px;
			margin-left: 105px;
		}
	}
	@media (min-width : 250px) and (max-width : 500px)
		{
		.body{
			/*display: none;*/
		}
		.s1{
			display: block;
			position: absolute;
			height: 550px;
			width: 450px;
			background-color: #145A32;
			margin-top: 7px;
			margin-left: 16px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.s2{
			position: absolute;
			height: 530px;
			width: 430px;
			background-color: #FBFE0D;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.s3{
			position: absolute;
			height: 510px;
			width: 410px;
			background-color: #A5069C;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.l1{
			position: absolute;
			height: 60px;
			width: 110px;
			background-color: #FD2323;
			margin-top: 1px;
			margin-left: 146px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.l2{
			position: absolute;
			font-size: 32px;
			color: #FCFCFC;
			margin-top: 10px;
			margin-left: 10px;
			
		}
		.u1{
			position: absolute;
			font-size: 34px;
			color: #FCFCFC;
			margin-top: 130px;
			margin-left: 10px;
		}
		.u2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			margin-top: 128px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 30px;
		}
		.p1{
			position: absolute;
			font-size: 34px;
			color: #FCFCFC;
			margin-top: 200px;
			margin-left: 10px;
		}
		.p2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 30px;
			margin-top: 198px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		a{
			text-decoration: none;
		}
		.log1{
			position: absolute;
			height: 60px;
			width: 110px;
			background-color: #76D7C4;
			margin-top: 280px;
			margin-left: 146px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 32px;
			color: #212F3D;
			font-family: bold;
		}
		.log1:hover{
			background-color: #F8C471;
			color: #641E16;
		}
		.f1{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 370px;
			margin-left: 125px;
		}
		.f2{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 400px;
			margin-left: 115px;
		}
		.r1{
			position: absolute;
			font-size: 25px;
			color: #FDFEFE;
			margin-top: 450px;
			margin-left: 105px;
		}
	}
	</style>
</head>
<body bgcolor="#AED6F1">
	<form action="<?php echo base_url();?>Welcome/log6" method="post">
<div class="s1">
	<div class="s2">
		<div class="s3">
			<table>
				<tr>
					<td class="l1"><b class="l2">Log in</b></td>
				</tr>
				<tr>
					<td class="u1">User Id</td>
					<td><input type="text" name="user" class="u2"></td>
				</tr>
				<tr>
					<td class="p1">Password</td>
					<td><input type="Password" name="pass" class="p2"></td>
				</tr>
				<tr>
					<td>
						<b><input type="submit" value="Log in" name="" class="log1"></b>
					</td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url();?>Welcome/forget_userC"> <b class="f1">Forget User Id</b></a></td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url();?>Welcome/forget_passC"> <b class="f2">Forget Password</b></a></td>
				</tr>
				<tr>
					<td><a href="<?php echo base_url();?>Welcome/regis1"> <b class="r1">Go to Registration</b></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
</form>
</body>
</html>