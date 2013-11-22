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
                        //if(isset($_COOKIE['key']) && isset($_COOKIE['location']))
                        {
                		print "<tr><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip Code</td><td>Phone Number</td> <td>YP URL</td> </tr>\n";
                                $size = count($result);
                                for($i=0;$i<$size;$i++)
                                {
                                        $entry = $result[$i];
                                        print "<tr class=\"odd\"><td>".$entry['name']."</td> <td>".$entry['address']."</td> <td>".$entry['city']."</td> <td>".$entry['state']."</td> <td>".$entry['zip']."</td> <td>".$entry['phone']."</td><td>".$entry['url']."</td> </tr>\n";
                                        $i++;
                                        if($i < $size)
                                        {
                                                $entry = $result[$i];
                                                print "<tr><td>".$entry['name']."</td> <td>".$entry['address']."</td> <td>".$entry['city']."</td> <td>".$entry['state']."</td> <td>".$entry['zip']."</td> <td>".$entry['phone']."</td><td>".$entry['url']."</td> </tr>\n";
                                        }
                                }
                        }
                ?>
        </table>

        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
