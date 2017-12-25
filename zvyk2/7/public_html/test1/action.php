<META content="text/html; charset=utf-8" http-equiv="Content-Type">


<?php
echo '<pre>';
//$last_line = system('head -c3 /home/vova/public_html/server/radio/radio.txt', $retval);

$last_line = system('head -1c /home/vova/public_html/server/radio/radio.txt| tail -c1;head -2c /home/vova/public_html/server/radio/radio.txt| tail -c1', $retval);

?>