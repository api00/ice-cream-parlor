<?php
session_start();
?>
<?php
if(!isset($_SESSION["RULE"]))
{
    header("Location: ../Login.php");
die();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Moon+Dance&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	height: 80vh;
	display: grid;
	place-content: center;
	background-color: #ebebeb;
	font-family: "Inter", sans-serif;
}
.flex-column {
	display: flex;
	flex-direction: column;
	gap: 4rem;
}
.cards {
	max-width: 50rem;
	height: inherit;
	margin: auto;
	padding: 6rem 2rem;
    margin-top: 14rem;
}
.card {
	width: 28rem;
	padding: 4rem 1rem;
	background-color: #fdf6c9;
	position: relative;
    height: 25rem;
}
.card::before {
	position: absolute;
	content: "";
	width: 16rem;
	height: 0.625rem;
	top: -0.625rem;
	left: 3.5rem;
	background-color: #ebebeb;
}
.card::after {
	position: absolute;
	content: "";
	width: 16rem;
	height: 0.625rem;
	bottom: -0.625rem;
	left: 3.5rem;
	background-color: #ebebeb;
}
.card-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-bottom: 1rem;
	font-family: "Moon Dance", cursive;
}
.card-header h2 {
	color: #24211c;
	word-spacing: -3px;
	font-size: 2rem;
}
.card-header h2 span {
	display: inline-block;
	margin-right: 0.25rem;
}
.card-header #green {
	color: #96bc8d;
}
.card-header #blue {
	color: #5f96cd;
}
.card-header strong {
	font-size: 2.25rem;
}
.card-one {
	border: 0.625rem solid #96bc8d;
}
.card-two {
	border: 0.625rem solid #5f96cd;
}
.list {
	padding: 0 4rem;
	list-style-type: disc;
	margin-bottom: 1rem;
}
.list .item {
	color: #40361e;
	font-size: 0.825rem;
	font-weight: 600;
	padding-bottom: 0.5rem;
}
.list .item::marker {
	font-size: 1.125rem;
	color: #40361e;
}
.cta-btn {
	text-align: center;
	display: block;
	width: calc(100% - 20%);
	padding: 0.75rem;
	margin-left: 2.5rem;
	color: #fff;
	font-size: 1.125rem;
	font-weight: 600;
	border: 0;
	outline: 0.125rem solid;
	outline-offset: 0.125rem;
	cursor: pointer;
}
.cta-btn.btn-green {
	background-color: #96bc8d;
	outline-color: #96bc8d;
}
.cta-btn.btn-blue {
	background-color: #5f96cd;
	outline-color: #5f96cd;
}

    </style>
</head>
<body>
	<section class="cards flex-column">
	<?php 
	include "../../MODEL/dbconnect.php";

			$id = $_GET['SERIAL_NUMBER'];
     $conn = connect();
     $s = oci_parse($conn, "select * FROM MENUCARD where SERIAL_NUMBER='$id' ");
     oci_execute($s);
       while ($value = oci_fetch_assoc($s)):
       
		?>
		<div class="card card-one">
			<div class="card-header">
	
				<h2>
					<span id="green">//</span>
					<?php echo $value["INAME"] ?>
				</h2>
				<strong>$<?php echo $value["PRICE"] ?></strong>
			</div>
			<ul class="list">
				<li class="item"><?php echo $value['PORTION']?></li>
				<li class="item"><?php echo $value['INGREDIENTS'] ?></li>
				<li class="item"><?php echo $value["PRICE"] ?></li>
			</ul>
			<a href="../../CONTROLLER/CustomerActions/insertCart.php?SERIAL_NUMBER=<?php echo $value['SERIAL_NUMBER'] ?>"  class="cta-btn btn-green">Enroll now</a>
		</div>
		<?php endwhile ?>

	</section>
</body>

<script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js" data-id="programmingfans" data-description="Support me on Buy me a coffee!" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
</html>