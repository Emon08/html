<?php
$dom = simplexml_load_file("product.xml");

foreach($dom->menu as $menu)
{
	echo "<h2>$menu->name - $menu->Stars</h2>"."<hr>";
	echo "<h4>Facilities:</h4>";
	
	foreach($menu->Facilities->facility as $item){
		echo "<li>".$item->fName."</li>";
		
	}
	/*echo "<h4>Address:</h4>"."<br>";
		echo $h->address."<br>";
		echo $h->Distance;
	
	foreach($h->Available as $av){		
		if($av=="True"){
			echo "<h4>ROOM Available: YES</h4>"."<br><hr>"; 
		}
		else echo "<h4>ROOM Available: NO</h4>"."<br>"."<hr>";
	}
	}

?>