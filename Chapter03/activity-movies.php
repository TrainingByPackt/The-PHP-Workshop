<?php 

$directorsLimit = $argv[1] ?: 5;
$moviesLimit = $argv[2] ?: 5;

$directors = [
                
"Steven Spielberg" => ["The Terminal", "Minority Report", "Catch Me If You Can", "Lincoln", "Bridge of Spies"],
                
"Christopher Nolan" => ["Dunkirk", "Interstellar", "The Dark Knight Rises", "Inception", "Memento"],
                
"Martin Scorsese" => ["Silence", "Hugo", "Shutter Island", "The Departed", "Gangs of New York"],
                
"Alfred Hitchcock" => ["The Birds", "Psycho", "To Catch a Thief", "Rear Window", "Mr. & Mrs. Smith"],
                
"Woody Allen" => ["Wonder Wheel", "Irrational Man", "Blue Jasmine", "Scoop", "September"]
                ];

$directorsCounter = 1;
foreach($directors as $director => $movies){
	if($directorsCounter > $directorsLimit) 
		break;
	
	echo "$director's movies: \n";

	$moviesCounter = 1;
        foreach($movies as $movie) {
		if($moviesCounter > $moviesLimit) 
			break;

                echo " > $movie \n";
		$moviesCounter++;
        }
	$directorsCounter++;
}

