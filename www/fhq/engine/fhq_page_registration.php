<?

class fhq_page_registration
{
	function title()
	{
		return 'Create new account<br><font size=2><a class="btn btn-small btn-info" href="index.php">&larr; go to main page</a></font>';
	}

	function echo_head()
	{
		echo '';
	}
	
	function echo_onBodyEnd() {
		echo '';
	}
	
	function echo_content()
	{
		echo '
			<form method="POST" action="">
				<table cellspacing=10px cellpadding=10px>
					<tr>
						<td>Write your e-mail:</td>
						<td><input name="email" id="user_email" value="" type="text"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<img src="captcha.php" id="captcha-image"/><br>
							<a class="btn" href="javascript:void(0);" onclick="document.getElementById(\'captcha-image\').src = \'captcha.php?rid=\' + Math.random();">Refresh Capcha</a>
							<br>
							
						</td>
					</tr>
					<tr>
						<td>Captcha</td>
						<td><input name="captcha" id="user_captcha" value="" type="text"></td>
					</tr>
					<tr>
						<td colspan = "2">
							
							<center>
								<br>
<script>
function sendQuery(str)
{
  document.getElementById("answer").innerHTML="<img width=100px src=\'images/sending.gif\'>";

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
  };  
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	  document.getElementById("answer").innerHTML=xmlhttp.responseText;
	}
  }
  var email = document.getElementById(\'user_email\').value;
  var captcha = document.getElementById(\'user_captcha\').value;
  xmlhttp.open("GET","registration.php?email="+email + "&captcha=" + captcha,true);
  xmlhttp.send();
}
</script>
									<a class="btn btn-small btn-info" href="javascript:void(0);" onclick="sendQuery();">Send query</a>
									<br><br>
									
								</center>
							</td>
						</tr>
					</table>
					</form>
					<center>
						<br>
						<div id="answer"></div>
					</center>';
	}
};

?>
