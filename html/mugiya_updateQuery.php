<DOCTYPE html>
<head>
	<meta charset"UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/mugiya_updateQuery.css">
	
	<script>
		<?php
			$no = htmlspecialchars($_POST['no']);
			$brewery1 = htmlspecialchars($_POST['brewery1']);
			$brewery2 = htmlspecialchars($_POST['brewery2']);
			$beername1 = htmlspecialchars($_POST['beername1']);
			$beername2 = htmlspecialchars($_POST['beername2']);
			$locality = htmlspecialchars($_POST['locality']);
			$style1 = htmlspecialchars($_POST['style1']);
			$style2 = htmlspecialchars($_POST['style2']);
			$abv = htmlspecialchars($_POST['abv']);
			
			$dsn = 'mysql:host=;dbname=;charset=utf8';
			$user = '';
			$password = '';
			
			try {
				$dbh = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
				echo 'データベースにアクセスできません！' . $e->getMessage();
				exit;
			}
			
			
			$sql = "UPDATE mugiya_beer_7rows SET brewery1 = :brewery1, brewery2 = :brewery2, beername1 = :beername1, beername2 = :beername2, locality = :locality, style1 = :style1, style2 = :style2, abv = :abv WHERE no = :no";

			$stmt = $dbh->prepare($sql);

			$params = array(
				':no'=>$no, 
				':brewery1'=>$brewery1, 
				':brewery2'=>$brewery2, 
				':beername1'=>$beername1,
				':beername2'=>$beername2,
				':locality'=>$locality,
				':style1'=>$style1, 
				':style2'=>$style2, 
				':abv'=>$abv
			);
			
			$stmt->execute($params);

  		?>
	</script>

</head>

	<body>

		<div class="main-box">
			<p>更新が完了しました。</p>
			<a href="./mugiya_input.html">戻る</a>
		</div>

	</body>
</html>
