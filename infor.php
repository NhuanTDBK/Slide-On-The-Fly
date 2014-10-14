<html>
<head>
Hello World
<script src='http://code.jquery.com/jquery-2.1.1.js' type="text/javascript">
$(document).ready(function(e) {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper   		= $(".form"); //Fields wrapper
	var add_button      = $(".them"); //Add button ID
	$("h2").html("HEllo");
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
		}
	});
});
</script>
</head>
<body>
	<h1 id="h01">Nhap du lieu slide(Tao mon hoc truoc roi moi upload slide)</h1>
	<h2 class="h2">
	<div id="form-subject">
	<form name="input" method="post" enctype="multipart/form-data">
	<p>Upload slide cho mon hoc(nhap ma mon hoc): 
	<br><input type='text' name="mamonhoc"/> </p>
	<!-- Nhap bang tay -->
	<div class="form">
	<p>Ten slide: <input type='text' name='tenslide'/> Duong dan: <input type='file' name='duongdan1' multiple /></p>
	</div>
	</br><button type='button' class="them">Them slide</button>
	<div>
	<br>
	<!-- Nhap tu dong: tu dong dien lay ten file lam ten slide -->
	<input type="Submit" name="submit" VALUE="login" onclick=''/>
	</form>
	</h2>
</body>	

</html>