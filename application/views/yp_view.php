<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
    <link rel="stylesheet" href="/application/assets/css/main.css" type="text/css">

</head>
<body>

<div id="container">
        <h1><?php print $title;?></h1>

        <div id="body">

        <?php echo form_open('yp/submit'); ?>
Key Word <br> <input type="text" name="key" id="key" > //ex - car<br>
Location <br> <input type="text" name="location" id="location"> // ex - Sunnyvale, CA<br>

<input type="submit" value="Search">
</form>
        <table>

                <?php
                        if(isset($_COOKIE['key']) && isset($_COOKIE['location']))
                        {
				date_default_timezone_set('America/Los_Angeles');	
				$csv = date("h_i_s_d_m_Y_").trim(str_replace(" ","_",$_COOKIE['key'])).".csv";
				$fh = fopen("/var/www/html/application/assets/csv/$csv","wb");
				$fields = array('Company Name','Address','City','State','Zip Code','Phone Number','YP URL');
				fputcsv($fh,$fields);
				print "<a href=\"/application/assets/csv/$csv\" title=\"$csv\"> Download $csv</a>\n";	
                		print "<tr><td>Company Name</td><td>Address</td><td>City</td><td>State</td><td>Zip Code</td><td>Phone Number</td> <td>YP URL</td> </tr>\n";
                                $size = count($result);
                                for($i=0;$i<$size;$i++)
                                {
                                        $entry = $result[$i];
					$data = array($entry['name'],$entry['address'],$entry['city'],$entry['state'],$entry['zip'],$entry['phone'],$entry['url']);
					fputcsv($fh,$data);
                                        print "<tr class=\"odd\"><td>".$entry['name']."</td> <td>".$entry['address']."</td> <td>".$entry['city']."</td> <td>".$entry['state']."</td> <td>".$entry['zip']."</td> <td>".$entry['phone']."</td><td>".$entry['url']."</td> </tr>\n";
                                        $i++;
                                        if($i < $size)
                                        {
                                                $entry = $result[$i];
						$data = array($entry['name'],$entry['address'],$entry['city'],$entry['state'],$entry['zip'],$entry['phone'],$entry['url']);
		                                fputcsv($fh,$data);
                                                print "<tr><td>".$entry['name']."</td> <td>".$entry['address']."</td> <td>".$entry['city']."</td> <td>".$entry['state']."</td> <td>".$entry['zip']."</td> <td>".$entry['phone']."</td><td>".$entry['url']."</td> </tr>\n";
                                        }
                                }
				rewind($fh);
				fclose($fh);
                        }
                ?>
        </table>

        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
