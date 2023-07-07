<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 3 </title>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<style>
html{
	font-family: Helvetica;
}
body {
		margin-left: 150px;
		margin-right: 150px;
		font-size: 1.10em;
		font-family: Helvetica;
		background-color: #121212;
		color: white;
		}

table {
	width: 100%;
	text-align: center;
}

th, h4 {
	color: #cf6679;
}

h1 {
	color: #cf6679;	
	text-align: center;
}

b {
	color: #bb86fc;
}


.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 20px;
  font-family: Helvetica;
  color: white;
  text-align: center;
  text-decoration: none;
  margin-top: 10px;

}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px; 
  font-family: 'Helvetica';  
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
</head>

<body>
<div class="navbar">
  <div class="dropdown">
    <a href = "../Landingpage.php" class="dropbtn">Back to Homepage </a>
  </div>
<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MidActivity2.php" class="dropbtn">Go back to Midterm Activity 2</a>
	<a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
	<a href ="MID_Q1H.php" class="dropbtn">Go to Midterm Quiz 1</a>  
</div>
<br>

<table border="2">
	<tr>
		<th>Name:</th>
		<td>CALUGTONG, CHARLES E.</td>
		<th>Topic:</th>
		<td>Chapter 3 Manipulating Strings</td>
	</tr>
	<tr>
		<th>Activity No.</th>
		<td>ACTIVITY 3</td>
		<th>Date:</th>
		<td>JUNE 21,2023</td>
	</tr>
</table>

<br>
<h1> Desiderata</h1>
<?php 
$desiderata = "DESIDERATA Go placidly amid the noise and the haste, and remember what peace there may be in silence. 
As far as possible, without surrender, be on good terms with all persons.
Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story.
Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, 
for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep 
interested in your own career, however humble; it is a real possession in the changing fortunes of time.
Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue 
there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign 
affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass.
Take kindly the counsel of the years, gracefully surrendering the things of youth.
Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. 
Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child 
of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no 
doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever 
your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken 
dreams, it is still a beautiful world. Be cheerful. Strive to be happy."
?>

<?php 
echo $desiderata;
echo "<br><br><br><br><h4>1. How many words?</h4>";
echo "<p>The poem contains <b>".str_word_count($desiderata)."</b> words.</p>";

echo "<br><h4>2. How many articles present?</h4>";
echo "<p><b>a</b> = ".substr_count($desiderata, " a ")."</p>";
echo "<p><b>an</b> = ".substr_count($desiderata, " an ")."</p>";
echo "<p><b>the</b> = ".substr_count($desiderata, " the ")."</p>";
$total = substr_count($desiderata, " a ") + substr_count($desiderata, " an ") + substr_count($desiderata, " the ");
echo "<p><b>TOTAL</b> = $total </p>";

echo '<br><h4>3. Change "the" to "THE".</h4>';
echo str_replace(" the ","<b> THE </b>", $desiderata);

echo '<br><br><h4>4. Output the words ending with "ly".</h4>';
function WordsSearch($desiderata) {
    $words = explode(' ', $desiderata);
    $foundWords = [];

    foreach ($words as $text) {
        $cleanWord = preg_replace('/[^a-zA-Z]/', '', $text);
        if (strtolower(substr($cleanWord, - 2)) === 'ly') {
            $foundWords[] = $cleanWord;
        }
    }
    return $foundWords;
}

$wordfound = WordsSearch($desiderata);
foreach ($wordfound as $text) {
    echo $text . "<br><br>";
}
?>

</body>
</html>