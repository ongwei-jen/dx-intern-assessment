```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Weight Converter</title>
</head>

<body style="background-color: #557A95">
	 <div class='container' style = 'width: 650px; height: 350px; box-shadow: 0px 0px 3px 1px #A9A9A9; margin-top: 200px; background-color: #A9A9A9'>
	 <div class='row' style='align-items: center; justify-content: center; padding-top: 15px'>
	 	<h1>Weight Converter</h1>
	 </div>
```
the three fields: kilogram, pounds, and miligram are the fields that will change based on the manipulation of values
```
	 <div class='form-group' style='align-items: center; justify-content: center; margin-top: 20px;'>
	 	<input class="form-control form-control-lg" id="inputKGS" type="number" placeholder="Kilograms">	
	 </div>

	 <div id="output">
		<div class="card" style="margin-bottom: 10px; padding: 10px">
			<div class="card-block">
				<h5>Pounds:</h5>
				<div id="lbs"></div>
			</div>
		</div>

		<div class="card" style="margin-bottom: 10px; padding: 10px">
			<div class="card-block">
				<h5>Miligrams:</h5>
				<div id="mg"></div>
			</div>
		</div>
	</div>
</body>
```
javascript is used to hide the pounds and miligram fields until a value is put into the kilogram field first. the conversion from kilograms to pounds and miligrams are
also calculated here
```
<script>
	document.getElementById("output").style.visibility = "hidden";
	document.getElementById("inputKGS").addEventListener("input", function(e) {
		document.getElementById("output").style.visibility = "visible";
		let kgs = e.target.value;
		document.getElementById("lbs").innerHTML = kgs * 2.2046;
		document.getElementById("mg").innerHTML =  kgs * 1000000;
	});
</script>
</html>
```
