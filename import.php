<?php
	include 'db.php';
	if(isset($_POST["importer"])){
		$qu= $conn->prepare("TRUNCATE TABLE table_temp");
		$qu->execute();
		$value = 0;
		$filename=$_FILES["csv"]["tmp_name"];
		if($_FILES["csv"]["size"] > 0){
			$rows = array();
			foreach (file($filename, FILE_IGNORE_NEW_LINES) as $line){
				$rows[] = str_getcsv($line, ',');
				// echo count($rows)."<BR";
				$i = $rows[$value][0];
				//echo $i;
				$qu= $conn->prepare("SELECT * FROM table_data  where id='$i' ");
				$qu->execute();
				$count = $qu->rowcount();
				//echo $count;
				if ($count==0) {
					try {
						$query= $conn->prepare(
							"INSERT INTO `table_temp`( `d1`,`d2`,`d3`)
							VALUES(
								'".$rows[$value][0]."',
								'".$rows[$value][1]."',
								'".$rows[$value][2]."'
							)"
						);
						$query->execute();
						header('location:index.php');
					}
					catch(PDOException $e){
						echo $query . "<br>" . $e->getMessage();
					}
				}
				else{
					try {
						$query= $conn->prepare(
							"INSERT INTO `table_temp`( `d1`,`d2`,`d3`)
							VALUES(
								'".$rows[$value][0]."',
								'".$rows[$value][1]."',
								'".$rows[$value][2]."'
							)"
						);
						$query->execute();
						header('location:index.php');
					}
					catch(PDOException $e){
						echo $query . "<br>" . $e->getMessage();
					}
				}
				$value++;
			};
		}
	}
	if(isset($_POST["agree"])){
		$query= $conn->prepare(
			"INSERT INTO `table_data`( `d1`,`d2`,`d3`)SELECT t.d1, t.d2, t.d3 FROM table_temp t"
		);
		$query->execute();
		$qu= $conn->prepare("TRUNCATE TABLE table_temp");
		$qu->execute();
		header('location:index.php');
	}
	if(isset($_POST["Cancel"])){
		$qu= $conn->prepare("TRUNCATE TABLE table_temp");
		$qu->execute();
		header('location:index.php');
	}
