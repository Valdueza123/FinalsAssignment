<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 2 </title>
<style>
body{	

	margin-left: 150px;
	margin-right: 150px;
	font-size: 1.10em;
	font-family: Helvetica;
	background-color: #121212;
	color: white;

}
table{
	width: 90%;
	height: 15vh;
	font-size: 1.35em;	
}

.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  text-decoration: none;
  font-family: Helvetica;
  margin-top: 15px;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px; 
  font-family: 'Poppins';  
  border: none;
  outline: none;
  color: white;
  padding: 15px 20px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  background: grey;
  
}

.navbar a:hover, .dropdown:hover .dropbtn {
  color: #BB86FC;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #3700B3;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
<div class="navbar">
  <div class="dropdown">
    <a href = "../Landingpage.php" class="dropbtn">Back to Homepage </a>
  </div> 
  <a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="#" class="dropbtn">Go back to Midterm Activity 2</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="#" class="dropbtn">Go next to Midterm Quiz 1</a>
</div>
<br>

<table border = "1" align="center" class = "tdesign">
	<tr class = "nohover">
		<td class ="header"> Name: </td>
		<td> Valdueza, Frederick C. </td>
		<td class ="header"> Topic: </td>
		<td> Chapter 3 Manipulating Strings</td>
	</tr>
	<tr class = "nohover">
		<td class ="header"> Activity No. </td>
		<td> Activity 3 </td>
		<td class ="header"> Date </td>
		<td> 09/22/2023 </td>
	</tr>
</table>
<br><br><br><br><br>

<?php


$desiderata = "<blockquote> DESIDERATA Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons.

Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story.

Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself.

Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time.

Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism.

Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass.

Take kindly the counsel of the years, gracefully surrendering the things of youth.

Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness.

Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here.

And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy. </blockquote>";


ECHO "<p> $desiderata </p>";

#1
ECHO "<br><br>";
ECHO "<h2> 1. <br> How many Words? </h2>"; 
ECHO "<p> The total words are: ".str_word_count($desiderata)."<br><br><br><br><br></p>";

#2
ECHO "<h2> 2. <br> How many Articles present? </h2>";
ECHO "<p> a = ".substr_count($desiderata, " a "). "</p>";
ECHO "<p> an = ".substr_count($desiderata, " an "). "</p>";
ECHO "<p> the = ".substr_count($desiderata, " the "). "</p>";
ECHO "<p> TOTAL = ".(substr_count($desiderata, " a ")+substr_count($desiderata, " an ")+substr_count($desiderata, " the ")). "<br><br><br><br><br></p>";

#3
ECHO "<h2> 3. </h2>";
ECHO '<h1> change "the" to "THE". </h1>';
ECHO str_replace(" the ", " THE ", $desiderata); 
ECHO "<br><br><br><br><br>";

#4
ECHO "<h2> 4. </h2>";
ECHO '<h1> Output the words ending with "ly" <br><br></h1>';
ECHO '<h2> Words found: </h2>';

function WordsFound($desiderata) {
    $words = explode(' ', $desiderata);
    $findwords = [];

    foreach ($words as $word) {
        $cleanWord = preg_replace('/[^a-zA-Z]/', '', $word);
        if (strtolower(substr($cleanWord, -2)) === 'ly') {
            $findwords[] = $cleanWord;
        }
    }

    return $findwords;
}
$wordfound = WordsFound($desiderata);
foreach ($wordfound as $word) {
    echo $word . "<br><br>";
}



?>

</body>
</html>