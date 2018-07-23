<html>
<head>
	<title>Hi World!</title>
</head>

<body>
	<?php
	    $dir = "./projects/jam_games/";
	    $projList = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
	    
	    //$jsonArr = join("\",\"", $projList);
	    
	    //echo '<img id="example" src="' . $projList[0] . '">';
	   	// echo '["' . $jsonArr . '"]';
	    foreach ($projList as $project) {
	    	echo '<a href="' . $dir . substr(basename($project), 0, -4) . '.html"><img id="example" src="' . $project . '"></a>';
	    }
	?>
</body>
</html>