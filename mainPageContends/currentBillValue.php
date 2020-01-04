<!DOCTYPE html>
<html>
<head>
	<title>Current Bill Value</title>
	<link rel="stylesheet" href="../stylesheets/mainStyles.css">
	<script src="jquary/jquary.js"></script>
	
</head>

<body>
    <div class="headerBar">

    </div>

<div class="navigation">

		<ul>
            
			<li><a href="">Current Bill Value</a></li>
			<li><a href="">Bill History</a></li>
			<li><a href="">Set Limit</a></li>
			<li><a href="">Informations</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">About Us</a></li>
	</ul>

</div >


<div class="currentBillContend">

    <h1 class="currentBill">Current Bill Value</h1>

    <p class="currentBillShow">2525</p>  
    <p id="datetime_class">Date :<span id="datetime"></span></p>

</div>

<script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
        </script>
	

    
	
</body>

</html>