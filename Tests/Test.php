<?php 
function test(){ 
 echo "Ich bins, PHP"; 
} 
?> 

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html> 
<head> 
<title>Untitled</title> 
</head> 
<body> 
<script type="text/javascript"> 
<!-- 
if(window.confirm("Wollen Sie das wirklich tun?") == true) 
      { 
        document.write("<?php test();?>"); //Den PHP-Code ins Dokument schreiben. 
      } 

// --> 
</script> 
</body> 
</html>