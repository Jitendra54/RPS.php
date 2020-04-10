 
<?php
echo "<h1> ROCK - PAPER - SCISSORS </h1>";
echo "<h4>MR=match result</h4>" ;

//this code tell the color of player chooses
echo "Player4 : <b style=color:#e6d600>color</b>&nbsp;&nbsp;
	Player3 : <b style=color:#94cb80>color</b>&nbsp;&nbsp;
	Player3 : <b style=color:#ef7f5d>color</b>&nbsp;&nbsp;
	Player3 : <b style=color:dodgerblue>color</b><br>	";

//this code is used to store the values and key of the $RPS array
$RPS = ['SCISSORS' => 'PAPER', 'PAPER' => 'ROCK','ROCK' => 'SCISSORS'];

//this code is used for running the loop 50 times 
for($i=0;$i<50;$i++)
{
$player1  = array_rand($RPS); //this code is used to generate random values from $RPS array for player 1 
$player2 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 2
$player3 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 3
$player4 = array_rand($RPS);//this code is used to generate random values from $RPS array for player 4

echo "<br>";
echo "Player1 chooses " . "<b style=\"color:dodgerblue\">" . $player1 . "</b>"; // this code is used to print the random generated values from $RPS array for player 1
echo "<br>";
echo "Player2 chooses " . "<b style=\"color:#ef7f5d\">" . $player2 . "</b>";// this code is used to print the random generated values from $RPS array for player 2
echo "<br>";
echo "Player3 chooses " . "<b style=\"color:#94cb80\">" . $player3 . "</b>";// this code is used to print the random generated values from $RPS array for player 3
echo "<br>";
echo "Player4 chooses " . "<b style=\"color:#e6d600\">" . $player4 . "</b>";// this code is used to print the random generated values from $RPS array for player 4


 //comparison conditions
echo"<table border=1><tr><th>RESULT</th></tr><tr><td>";
if ($player1 === $player2)		//this condition is used to check wheter chocies made by two player is identical or not, if yes it will print DRAW
{
	echo "<br>MR(P1vsP2) = Draw";

if ($player1 === $player3)
{
	echo "<br>MR(P1vsP3) = Draw";

if ($player1 === $player4)
{
	echo "<br>MR(P1vsP4) = Draw";

if ($player2 === $player3)
{
	echo "<br>MR(P2vsP3) = Draw";

if ($player2 === $player4)
{
	echo "<br>MR(P2vsP4) = Draw";

if ($player3 === $player4)
{
	echo "<br>MR(P3vsP4) = Draw";

}}}}}}



else if($RPS[$player1] == $player2 )	//this condition is used to check if chocies made by P1 beats P2  or not, if yes it will print P1 wins
  	echo "<br>MR(P1vsP2) :-P1 wins";	

if($RPS[$player1] == $player3 )
	  echo "<br>MR(P1vsP3) :-P1 wins";

 if($RPS[$player1] == $player4 )
	echo "<br>MR(P1vsP4) :-P1 wins";


if ($RPS[$player2] == $player1 )
  	echo "<br>MR(P2vsP1) :-P2 wins";

if($RPS[$player2] == $player3 )
	  echo "<br>MR(P2vsP3) :-P2 wins";

if ($RPS[$player2] == $player4 )
	echo "<br>MR(P2vsP4) :-P2 wins";


if ($RPS[$player3] == $player1 )
  	echo "<br>MR(P3vsP1) :-P3 wins";

if($RPS[$player3] == $player2 )
	  echo "<br>MR(P3vsP2) :-P3 wins";

if ($RPS[$player3] == $player4 )
	echo "<br>MR(P3vsP4) :-P3 wins";


if ($RPS[$player4] == $player2 )
  	echo "<br>MR(P4vsP2) :-P4 wins";

if ($RPS[$player4] == $player3 )
	  echo "<br>MR(P4vsP3) :-P4 wins";

if ($RPS[$player4] == $player1 )
	echo "<br>MR(P4vsP1) :-P4 wins";

echo "<br></td></tr></table><hr>";



}
?>
 


