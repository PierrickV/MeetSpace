<!--
header.php
-->

<head>
	<title>MeetSpace</title>
	<meta http-equiv = "Content-Type" content = "text/html" charset = "UTF-8";>
	<link href = "http://getbootstrap.com/dist/css/bootstrap.min.css" rel = "stylesheet">		<!-- CSS BootStrap -->
	<link href = "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel = "stylesheet">		<!-- Inclusion des icones -->
	<link rel = "stylesheet" href = "meetspace_02.css" type = "text/css">		<!-- CSS MeetSpace -->

    <?php
		if (isset ($_SESSION["ID"])) {
			echo ("<link href = 'http://getbootstrap.com/examples/starter-template/starter-template.css' rel='stylesheet'>");
		} else {
			echo ("<link href = 'http://getbootstrap.com/examples/cover/cover.css' rel='stylesheet'>");
		}
    ?>
    
</head>