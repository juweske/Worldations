<!DOCTYPE html>
<html>

<head>
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Worldations</title>
    <meta charset="utf-8">
    <?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
 
if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$passwort = $_POST['passwort'];
	
	$statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
	$result = $statement->execute(array('email' => $email));
	$user = $statement->fetch();
		
	//Überprüfung des Passworts
	if ($user !== false && password_verify($passwort, $user['passwort'])) {
		$_SESSION['userid'] = $user['id'];
		die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
	} else {
		$errorMessage = "E-Mail oder Passwort war ungültig<br>";
	}
	
}
?>
    <?php 
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>
    <form action="?login=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Abschicken">
</form> 
</head>

<body class="flex-body">
    <div class="flex-header">
        <h1>Worldations</h1>
        <p>The easy way to donate.</p>
    </div>
    <div class="flex-headline">
        <p>Klicke auf einen Ort in der Karte und spende für gemeinnützige Zwecke! </p>

    </div>
    <div class="flex-map">


        <div class="content">

            <!--Europa-
            <a class="de" href="deutschland.html">Deutschland</a>

            <a class="us" href="America.html">Vereinigte Staaten von Amerika</a>

            <a class="za" href="Südafrika.html">Südafrika</a>

            <a class="br" href="Brasilien.html">Brasilien</a>
            Asien
            <a class="cn" href="China.html">China</a>-->

        </div>
        <img class="map" src="weltbeschriftet.jpg" id="map" usemap="#map" />
        <map name="map">
            <area alt="" title="Deutschland" href="deutschland.html" shape="poly" coords="640,317,637,328,658,341,664,321,658,313,665,342,653,317,651,312,660,312" />
            <area alt="" title="Afrika" href="S%C3%BCdafrika.html" shape="poly" coords="699,487,684,402,704,399,713,412,724,413,724,419,729,433,727,441,737,446,737,455,743,465,766,469,770,468,769,463,777,477,781,488,772,497,758,514,750,523,740,536,748,556,751,568,737,577,728,588,728,596,721,605,718,619,715,621,704,632,680,633,677,642,670,642,670,620,659,620,659,591,648,590,648,524,637,524,637,502,627,502,626,493,607,493,596,494,593,501,643,476,612,483,597,433,597,449,573,452,696,420,676,442,710,448,678,485,615,452,610,421,622,418,660,418,676,410,652,404,659,401,649,401,637,402,633,393,638,390,598,391,596,389,597,405,576,404,577,400,590,403,578,416,574,415,573,411,568,427,564,425,556,436,552,448,552,457,554,473,552,480,572,483,564,487,577,501,623,459,617,463,616,444,628,415,661,415,606,451,612,431,619,419,673,419,684,419,605,488,593,488,657,468,639,476,627,473,616,466" />
            <area alt="" title="Brasilien" href="Brasilien.html" shape="poly" coords="411,560,387,541,369,534,385,494,403,494,411,507,425,507,430,518,439,524,446,531,470,532,473,540,479,539,482,553,469,560,471,588,459,595,440,610,448,611,433,612,419,621,427,632,420,632" />
            <area alt="" title="Vereinigte Staaten von Amerika" href="America.html" shape="poly" coords="337,333,347,377,239,432,174,344" />
            <area alt="" title="China" href="China.html" shape="poly" coords="946,371,922,422,914,389,901,372,894,357,911,334,924,312,943,294,951,313,968,321,986,335,1018,316,1046,317,1060,301,1032,270,1077,313,1020,295,1037,280,1041,287,1084,336,1096,333,1095,326,1076,346,1039,369,1064,372,1064,365,1027,383,1028,403,935,427,932,412,965,435,942,406,937,408,1022,414,946,403,939,400,936,405" />
        </map>


        <!--<script src="worldations.js" type="text/javascript"></script> -->

    </div>



    <script src="cookies.js" type="text/javascript"></script>
    <script src="worldations.js" type="text/javascript"></script>



</body>



</html>
