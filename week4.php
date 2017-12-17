<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br>";


echo 'This is the amount of times / appears in $date: ';
echo substr_count($date, '/')."<br>";
echo "At positions: ";
echo strpos($date, '/'), ", ", strrpos($date, '/')."<br>";
//Question 5
echo 'Number of words in $date: ', str_word_count($date)."<br>";
//Question 6
echo "length of 'Hello Class': ", strlen("Hello Class")."<br>";
//Question 7
echo "ASCII value of first character of 'word': ", ord("word")."<br>";
//Question 8
echo "last 2 char of $date: ", substr($date, -2, 2)."<br>"; 
//Question 9
split('/', $date);
echo $date."<br>";
//Question 10
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
foreach ($year as $value) {
	if ($value % 4 == 0) {
		echo "True ";
	} else {
		echo "False ";
	}
}
?>