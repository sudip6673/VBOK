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
			background-color: #1B4F72;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.l1{
			position: absolute;
			height: 60px;
			width: 130px;
			background-color: #FD2323;
			margin-top: 1px;
			margin-left: 143px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.l2{
			position: absolute;
			font-size: 32px;
			color: #FCFCFC;
			margin-top: 10px;
			margin-left: 8px;
			
		}
		.u1{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 130px;
			margin-left: 10px;
		}
		.u2{
			position: absolute;
			height: 35px;
			width:250px;
			color: #283747;
			margin-top: 128px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 25px;
		}
		.p1{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 190px;
			margin-left: 10px;
		}
		.p2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 188px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.u3{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 250px;
			margin-left: 10px;
		}
		.u4{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 248px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.p3{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 310px;
			margin-left: 10px;
		}
		.p4{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 308px;
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
			background-color: #D35400;
			margin-top: 368px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 32px;
			color: #FDFEFE;
			font-family: bold;
		}
		.log1:hover{
			background-color: #138D75;
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
			margin-left: 122px;
		}
	}
	@media (min-width : 250px) and (max-width : 500px)
		{
		.body{
			padding: 0px;
			margin: 0px;
		}
		.s1{
			display:block;
			position: absolute;
			height: 550px;
			width: 450px;
			background-color: #145A32;
			margin-top: 7px;
			margin-left: 11px;
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
			background-color: #1B4F72;
			margin-top: 10px;
			margin-left: 10px;
			box-sizing: border-box;
			border-radius: 30px;
		}
		.l1{
			position: absolute;
			height: 60px;
			width: 130px;
			background-color: #FD2323;
			margin-top: 1px;
			margin-left: 143px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.l2{
			position: absolute;
			font-size: 32px;
			color: #FCFCFC;
			margin-top: 10px;
			margin-left: 8px;
			
		}
		.u1{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 130px;
			margin-left: 10px;
		}
		.u2{
			position: absolute;
			height: 35px;
			width:250px;
			color: #283747;
			margin-top: 128px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 25px;
		}
		.p1{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 190px;
			margin-left: 10px;
		}
		.p2{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 188px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.u3{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 250px;
			margin-left: 10px;
		}
		.u4{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 248px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
		}
		.p3{
			position: absolute;
			font-size: 30px;
			color: #FCFCFC;
			margin-top: 310px;
			margin-left: 10px;
		}
		.p4{
			position: absolute;
			height: 40px;
			width:250px;
			color: #283747;
			font-size: 25px;
			margin-top: 308px;
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
			background-color: #D35400;
			margin-top: 368px;
			margin-left: 148px;
			box-sizing: border-box;
			border-radius: 18px;
			font-size: 32px;
			color: #FDFEFE;
			font-family: bold;
		}
		.log1:hover{
			background-color: #138D75;
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
			margin-left: 122px;
		}
	}
	</style>
</head>
<body bgcolor="#FCF3CF">
	<form action="<?php echo base_url();?>Welcome/registerC" method="post">
<div class="s1">
	<div class="s2">
		<div class="s3">
			<table>
				<tr>
					<td class="l1"><b class="l2">Register</b></td>
				</tr>
				<tr>
					<td class="u1">Name</td>
					<td><input type="text" name="nam" class="u2"></td>
				</tr>
				<tr>
					<td class="p1">Phone No</td>
					<td><input type="text" name="phone" class="p2"></td>
				</tr>
				<tr>
					<td class="u3">User Id</td>
					<td><input type="text" name="user" class="u4"></td>
				</tr>
				<tr>
					<td class="p3">Password</td>
					<td><input type="Password" name="pass" class="p4"></td>
				</tr>
				<tr>
					<td>
						<b><input type="submit" value="Submit" name="" class="log1"></b>
					</td>
				</tr>
				
				<tr>
					<td><a href="<?php echo base_url();?>Welcome/log5"> <b class="r1">Click to Log in</b></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
</form>
</body>
</html>