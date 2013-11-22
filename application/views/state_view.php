<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Welcome to RestApi Test</title>
    <link rel="stylesheet" href="/application/assets/css/main.css" type="text/css">

</head>
<body>

<div id="container">
        <h1><?php print 'title';?></h1>

        <div id="body">


        <table>

                <?php
			print "we are here and try to print\n";
			print_r($result);
                ?>
        </table>

        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
