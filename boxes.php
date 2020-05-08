<!DOCTYPE html>
<html>
<head>
	<title>Intersecting boxes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		.outer {
			/*border-style: solid;*/
			height: 500px;
			position: relative;
			top: 100px;
			/*left: 250px;*/
		}
		.red {
		height: 150px;
  		width: 25%;
		border-style: solid;
		border-color: red;
		position: absolute;
		left: 250px;
		top: 100px;
		}
		.yellow {
		height: 150px;
  		width: 25%;
		border-style: solid;
		border-color: yellow;
		position: absolute;
		left: 591px;
		top: 100px;
		}
		.green {
		height: 150px;
  		width: 25%;
		border-style: solid;
		border-color: green;
		position: absolute;
		top: 254px;
		left: 592px;
		}
		.orange {
		height: 150px;
  		width: 25%;
		border-style: solid;
		border-color: orange;
		position: absolute;
		top: 254px;
		left: 250px;
		}
		.blue {
		height: 75px;
  		width: 15%;
		border-style: solid;
		border-color: blue;
		position: absolute;
		top: 210px;
		left: 488px;
		}
	</style>
</head>
<body>
<div class="outer">
	<div class="red"></div>
	<div class="yellow"></div>
	<div class="green"></div>
	<div class="orange"></div>
	<div class="blue"></div>
</div>

</body>
</html>