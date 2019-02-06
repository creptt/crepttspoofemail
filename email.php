<!-- Script By Enter & Exit Node -->
 
<html>
<h1>Send Free Email<br>
W/Web Security<br>
& Anonymity</h1>
</html>
 
<table border=2>
<form action="" method=post>
<tr><td>To Email: </td><td><input type=text name=email size=30></td></tr>
<tr><td>Sender Name: </td><td><input type=text name=name size=30></td></tr>
<tr><td>Sender Email: </td><td><input type=text name=sender size=30></td></tr>
<tr><td>Subject: </td><td><input type=text name=subject size=30></td></tr>
<tr><td>Content: </td><td><textarea rows=10 cols=30 name=content></textarea></td></tr>
<tr><td><input type=submit value="Send Mail"></td></tr>
</form>
</table>
 
<?php
$email = $_POST['email'];
$content = $_POST['content'];
$name = $_POST['name'];
$sender = $_POST['sender'];
 
$subject = $_POST['subject'];
 
$headers = "From: $name "."<".$sender.">\r\n";
mail($email, $subject, $content, $headers );
?>