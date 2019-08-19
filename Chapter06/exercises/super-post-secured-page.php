<?php

echo sprintf('<p>Welcome, %s!</p>', $_SESSION['username']);
echo sprintf('<p>Session data: </p>
<pre>%s</pre>', var_export($_SESSION, true));
echo '<p><a href="super-post-secured.php?do=logout">Logout</a></p>';
