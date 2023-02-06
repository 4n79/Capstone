<?php
include('connection.php');
session_start();
$S_NO=$_SESSION['S_NO'];
if($S_NO==""){
		header("location:uploaderlogin1.php");
	}else{
$sql="SELECT * FROM `reg_stu` WHERE S_NO = '$S_NO'";
$run=mysql_query($sql);
$a=mysql_fetch_array($run);
$s=$a['RID'];
?>


<html>
<head>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 100%; margin: auto; margin-bottom:auto; }
.container .ism-slider { width: 100%;height:250px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
</style>
<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
	<script src="ism/js/ism-2.1.js"></script>
</head>
	<body>
		<div id="p9">
			<div id="p2">Peer Support</div>
				<div id="p6">
					<div id='cssmenu' >
						<ul>
							<li class='active'><a href="home1.php"><span>Home</span></a></li>
							<li><a href="fsdownloader1.php"><span>Download Documents</span></a>
						
							<li><a href="flogout.php"><span>Logout</span></a></li>
						</ul>
					</div>
				</div>
				
				<div style="width:100%;height:auto">
				<center><font size=5>Topics you already selected are</font></center><br>
				<hr color="green">
				<ul><li><?php echo $a['TOPIC']; ?></li></ul><?php
				
								$s=$a['RID'];
								$query2="select * from `add` where RID='$s'";
								$result2=mysql_query($query2);
								$count2=1;
								$t12=1;
									while($r2=mysql_fetch_array($result2))
										{
											?><ul><li><?php echo $r2[2]; ?> </li>
											</ul>
												<?php $count2++;
										}
												?>
											
				</div>
				<hr color="green">
			<div style="border:2px;height:auto;width:100%;">
					<div style="width:45%;float:left;height:auto;background-color:#F6CECE;border-radius:15px 50px 30px 5px;box-shadow:5px 15px 15px  ;margin-left:2%;margin-top:0px;" >
						
						<form  action=""  method="post">
						<font color=grey size=9 face=Gabriola>Add new topics</font><br>
								<?php $query="select * from topic ";
								$result=mysql_query($query);
								$count=1;
								
									while($r=mysql_fetch_array($result))
										{
											?>	
											<table>
												<tr>
													<td><input type="radio" name="t1" value=" <?php echo $r[1]; ?>"> <?php echo $r[1]; ?> </td>
													
												</tr>
												<?php $count++;
										}
												?>
											</table>
								<input type=submit name="sub"> 	  <input type=reset>
						</form>
	</div>
				
					<div style="width:45%;float:left;height:auto;background-color:#F6CECE;border-radius:15px 50px 30px 5px;box-shadow:5px 15px 15px ;margin-left:2%;margin-top:0px;">
						<form  action=""  method="post">
						<font color=grey size=9 face=Gabriola>Withdraw existing topics</font><br>
								<?php
								$s=$a['RID'];
								$query2="select * from `add` where RID='$s'";
								$result2=mysql_query($query2);
								$count2=1;
								$t12=1;
									while($r2=mysql_fetch_array($result2))
										{
											?>	
											<table>
												<tr>
													<td><input type="radio" name="t2" value="<?php echo $r2[2]; ?>"> <?php echo $r2[2]; ?> </td>
												</tr>
												<?php $count2++;
										}
												?>
											</table>
								<input type=submit name="sub2"> 	  <input type=reset>
						</form>
				
					</div>
			</div>

				
				
			</div>
		</div>
		
		
		

</body>
</html>
<?php
}
?>	






<?php 
include('connection.php');

if(isset($_POST["sub"]))
{
	$c=$_POST['t1'];
$query4="select `topic` from `add` where topic='$c' and RID='$s'";
$result4=mysql_query($query4);
$t4=0;
if($row4=mysql_fetch_array($result4))
{
	$t4=1;
	
	
	?><html><head>
	<center> <font size=5> <script language="javascript"> alert("Topic is already exist. please try again with different Topic");</script></font></center>
	</head></html>
	<?php
	
}
else if($t4==0)
	{
	$query2="insert into `add`(RID,topic) values('$s','$c')";
	$qry1=mysql_query($query2);
		if(!$qry1)
			{
					echo "Try Again" ;?>
				<html><head>
				<center> <font size=5> <script language="javascript"> alert("Try again");</script></font></center>
				</head></html><?php
				header('refresh:0');
		
			}
		else
			{
				?>
				<html><head>
				<center> <font size=5> <script language="javascript"> alert("Added");</script></font></center>
				</head></html>
				<?php
				header('refresh:0');
				
				
			}
			
	}
	
	
	
}



if(isset($_POST["sub2"]))
{
	$s=$a['RID'];
$c=$_POST['t2'];
$z="delete from `add` where RID='$s' and topic='$c' ";
$s1=mysql_query($z);
	if(!$s1)
		{
					echo "Try Again" ;?>
				<html><head>
				<center> <font size=5> <script language="javascript"> alert("Try again");</script></font></center>
				</head></html><?php
				header('refresh:0');}
	else
		{?>
				<html><head>
				<center> <font size=5> <script language="javascript"> alert("Withdrawn successfully");</script></font></center>
				</head></html>
				<?php
				header('refresh:0');}
}	





?>
