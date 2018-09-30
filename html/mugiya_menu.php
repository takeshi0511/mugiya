<!DOCTYPE html>
<head>
	<meta http-equiv="Content-type charset=UTF-8">
	<meta http-equiv="refresh" content=="60">
	<link rel="stylesheet" type="text/css" href="../css/mugiya_menu.css">
	
	<script src="../js/smooth-scroll.js"></script>
	<script>
		<?php
			$mysqli = new mysqli('', '', '', '');

			if ($mysqli->connect_error) {
				echo $mysqli->connect_error;
			        exit();
			} else {
				$mysqli->set_charset("utf8");
			}
		?>

	</script>

</head>

	<body>
		
		<div class="main-box">
		
			<table border="0" cellspacing="0" cellpadding="0"  class="main-frame">
			
				<!-- ヘッダー部 編集しないこと -->
				<tr align="center">
					<th class="cNumber"></th>
					<th class="cBrewery">BREWERY</th>
					<th class="cName">BEER NAME</th>
					<th class="cLocal">Locality</th>
					<th class="cStyle">style</th>
					<th class="cABV">ABV</th>
				</tr>
				
				
				
				<!--- ↓↓↓ここからメニュー -->
				
				
				<!--1番-->
				<tr align="center">
					<td class="cNumber"><span class="No1">
						①
					</span></td>
					
					<td class="cBrewery"><span class="No1">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No1">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No1">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No1">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No1">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='1'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>


				<!--2番-->
				<tr align="center">
					<td class="cNumber"><span class="No2">
						②
					</span></td>
					
					<td class="cBrewery"><span class="No2">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No2">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No2">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No2">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No2">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='2'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>


				<!--3番-->
				<tr align="center">
					<td class="cNumber"><span class="No3">
						③
					</span></td>
					
					<td class="cBrewery"><span class="No3">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No3">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No3">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No3">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No3">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='3'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>


				<!--4番-->
				<tr align="center">
					<td class="cNumber"><span class="No4">
						④
					</span></td>
					
					<td class="cBrewery"><span class="No4">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No4">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No4">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No4">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No4">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='4'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>


				<!--5番-->
				<tr align="center">
					<td class="cNumber"><span class="No5">
						⑤
					</span></td>
					
					<td class="cBrewery"><span class="No5">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No5">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No5">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No5">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No5">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='5'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>

				<!--6番-->
				<tr align="center">
					<td class="cNumber"><span class="No6">
						⑥
					</span></td>
					
					<td class="cBrewery"><span class="No6">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No6">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No6">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No6">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No6">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='6'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>

				<!--7番-->
				<tr align="center">
					<td class="cNumber"><span class="No7">
						⑦	
					</span></td>
					
					<td class="cBrewery"><span class="No7">
					
						<?php
						$sql = "SELECT brewery1 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["brewery1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT brewery2 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["brewery2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cName"><span class="No7">
						
						<?php
						$sql = "SELECT beername1 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["beername1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT beername2 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["beername2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cLocal"><span class="No7">

						<?php
						$sql = "SELECT locality FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["locality"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cStyle"><span class="No7">

						<?php
						$sql = "SELECT style1 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["style1"];
						 	}
							$result->close();
						}
						
						$sql = "SELECT style2 FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print "<br>";
								print $row["style2"];
						 	}
							$result->close();
						}
						?>

					</span></td>
					
					<td class="cABV"><span class="No7">

						<?php
						$sql = "SELECT abv FROM mugiya_beer_7rows where no='7'";
						if ($result = $mysqli->query($sql)) {
							while ($row = $result->fetch_assoc()) {
								print $row["abv"];
						 	}
							$result->close();
						}
						?>

					</span></td>
				</tr>

			</table>
<!--			
			<div id="TelopArea">
				<marquee>
					<?php
					$sql = "SELECT message FROM mugiya_telop where no='1'";
					if ($result = $mysqli->query($sql)) {
						while ($row = $result->fetch_assoc()) {
							print $row["message"];
					 	}
						$result->close();
					}
					?>
				</marquee>

			</div>
-->
		</div>
		
	</body>

	<?php
		$mysqli->close();
	?>
</html>
