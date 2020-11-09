<?php
setcookie('log','',time()-7200,'/');
header('location:index.php?bye=Hope we see you later!');
?>