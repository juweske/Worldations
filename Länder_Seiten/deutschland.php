<?php

$db = mysqli_connect("localhost", "root", "");
    mysqli_set_charset($db, "utf8");
    mysqli_select_db($db, "worldations");
    
    $sql_abfrage = "SELECT * FROM länder";
    
    $abfrage_ergebnis = mysqli_query($db, $sql_abfrage);
    while($row = mysqli_fetch_assoc($abfrage_ergebnis)){
              echo "$row[Text1]<br>\n";
   
   
?>
<!DOCTYPE html>
<html>

<head>

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="main.css" rel="stylesheet">
	<link href="land.css" rel="stylesheet">

	<title>Deutschland</title>
	<meta charset="utf-8">
</head>

<body>

	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="flex-header">
					<h1>Worldations</h1>
					<p>The easy way to donate.</p>
					<a href="login.html" class="btn btn-primary col-xs-12 col-md-2 col-md-offset-10">Login</a>
				</div>

			</div>
		</div>
    </div>    

		<a href="index.html" class="btn btn-primary">Zurück</a>
		<div class="ueberschrifttentitel">
			<h1>Deutschland</h1>
			<?php
        echo "$row[Text1]<br>\n";
        ?>

		</div>

		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				Hilfsorganisationen
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu " aria-labelledby="dropdownMenu1">
				<li><a href="#bfdw2">Brot fürdie Welt</a></li>
				<li><a href="#unicef2">UNICEF</a></li>
				<li><a href="#greenpeace2">Greenpeace</a></li>
				<!--    <li role="separator" class="divider"></li>-->
				<li><a href="#aog2">Ärtzte ohne Grenzen</a></li>
			</ul>
		</div>

		<div class="panel panel-default">
			<div class="organisations-heading">Liste der Hilfsorganisationen</div>
			<div class="panel-body">
				<div class="list-group">

					<a name="bfdw2"></a>
					<a href="#bfdw" data-toggle="modal" class="list-group-item ">
						<div class="row text-center">
							<img src="bilder/logo_brot_fuer_die_welt_gross.png" alt="Brot für die Welt Logo" class="img-rounded col-xs-12 col-md-2 col-md-offset-5 ">
							<div class="col-xs-12 col-md-8">
							</div>
						</div>
					</a>
					<a name="unicef2"></a>
					<a href="#unicef" data-toggle="modal" class="list-group-item ">
						<div class="row">
							<img src="bilder/logo_unicef.png" width="10px" alt="UNICEF Logo" class="img-rounded col-xs-12 col-md-2 col-md-offset-5">
							<div class="col-xs-12 col-md-8">

							</div>
						</div>
					</a>

					<a name="greenpeace2"></a>
					<a href="#gp" data-toggle="modal" class="list-group-item ">
						<div class="row">
							<img src="bilder/Greenpeace-logo.png" width="300px" alt="Greenpeace Logo" class="img-rounded col-xs-12 col-md-2 col-md-offset-5">
							<div class="col-xs-12 col-md-8">

							</div>
						</div>
					</a>

					<a name="aog2"></a>
					<a href="#aog" data-toggle="modal" class="list-group-item ">
						<div class="row">
							<img src="bilder/Aerzte_ohne_Grenzen_Logo.png" width="300px" alt="Ärtzte ohne Grenzen" class="img-rounded col-xs-12 col-md-2 col-md-offset-5">
							<div class="col-xs-12 col-md-8">

							</div>
						</div>
					</a>

				</div>
			</div>
		</div>

		<div class="modal fade" tabindex="-1" role="dialog" id="bfdw">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Brot für die Welt</h4>
					</div>
					<div class="modal-body">
						<p>Brot für die Welt ist eine Aktion der evangelischen Landes- und Freikirchen in Deutschland. Rechtsträger ist das Evangelische Werk für Diakonie und Entwicklung e.V. Die Aktion fördert jährlich rund 1.000 Entwicklungsprojekte in mehr als 70 Ländern Afrikas, Asiens, Lateinamerikas und Osteuropas. Thematische Schwerpunkte der Projektarbeit sind die Ernährungssicherung, die Förderung von Bildung und Gesundheit, die Überwindung von Gewalt sowie der Kampf gegen HIV und Aids. Die Durchführung der Entwicklungsprojekte und sozialen Programme obliegt Partnern in den Projektländern. Meist handelt es sich dabei um Kirchen bzw. kirchliche Gruppen. Neben der Entwicklungsförderung tritt Brot für die Welt für die Rechte und Lebensmöglichkeiten der Benachteiligten ein und leistet in einem nationalen und internationalen Kontext entwicklungspolitische Bildungs- und Lobbyarbeit.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">schließen</button>
						<a target="_blank" href="https://www.brot-fuer-die-welt.de/spenden/spenden.php" class="btn btn-primary">Jetzt Spenden</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>


		<div class="modal fade" tabindex="-1" role="dialog" id="unicef">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">UNICEF</h4>
					</div>
					<div class="modal-body">
						<p>UNICEF tut alles dafür, dass Kinder auch unter schwierigsten Bedingungen Hilfe bekommen und ein Stück Normalität im Alltag erfahren können, so wie diese Kinder in der syrischen Stadt Homs. Unterricht in Zeiten des Krieges ist mehr als Wissensvermittlung – Schule ist Hoffnung auf eine bessere Zukunft.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">schließen</button>
						<a target="_blank" href="https://www.unicef.de/spenden/jetzt-spenden" class="btn btn-primary">Jetzt Spenden</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<div class="modal fade" tabindex="-1" role="dialog" id="gp">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Greenpeace</h4>
					</div>
					<div class="modal-body">
						<p>
							Greenpeace stellt sich vor</p>
						<p>Greenpeace ist eine internationale Umweltorganisation, die mit direkten gewaltfreien Aktionen für den Schutz der natürlichen Lebensgrundlagen von Mensch und Natur und Gerechtigkeit für alle Lebewesen kämpft. Es ist ein ungleicher Kampf, der im Juni 1995 im Nordatlantik tobt. Durch meterhohe Wellen ziehen Schlepper eine alte Öltank- und Verladeplattform über die offene See. Der Ölmulti Shell will die "Brent Spar" nahe den Färöer-Inseln im Meer versenken. Von den Schleppern immer wieder mit Wasserkanonen beschossen, protestiert an Bord der Plattform eine Handvoll Greenpeace-Aktivisten gegen das Vorhaben. Es geht um einen Präzedenzfall: Die "Brent Spar" wäre die erste Plattform, die in der Tiefsee entsorgt wird, hunderte weitere sollen folgen. Die Nordsee steht kurz davor, zur billigen Müllkippe für Öl- und Gasplattformen zu werden. Alles deutet darauf hin, dass die Versenkung in nur wenigen Stunden durchgeführt wird - da geschieht das Unglaubliche: Nach 52 Tagen öffentlicher Auseinandersetzung gibt Shell nach und entscheidet, die "Brent Spar" umweltschonend an Land zu entsorgen. Drei Jahre später beschließen die Umweltminister von 15 europäischen Staaten ein dauerhaftes Versenkungsverbot für Öl- und Gasplattformen in Nordsee und Nordostatlantik. Die Auseinandersetzung um die "Brent Spar" zeigt exemplarisch, wie Greenpeace handelt: Greenpeace klärt auf, recherchiert und konfrontiert. Die Organisation vertritt dabei die Interessen der Natur und der umweltbewussten Menschen in Politik und Gesellschaft. Dabei geht sie Probleme hartnäckig an - auch gegen Widerstände und über längere Zeiträume. Greenpeace lebt das Recht auf freie Meinungsäußerung, inklusive dem Recht auf Demonstrationsfreiheit, und sucht dabei auch die öffentliche Auseinandersetzung mit Politikern, Konzernbetreibern oder Umweltzerstörern. Durch das Öffentlichmachen der Probleme wächst der Druck auf die Verantwortlichen in Politik und Wirtschaft umzudenken und zu handeln.

						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">schließen</button>
						<a target="_blank" href="https://www.greenpeace.de/spenden?BannerID=000000000000000" class="btn btn-primary">Jetzt Spenden</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<div class="modal fade" tabindex="-1" role="dialog" id="aog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Ärtzte ohne Grenzen</h4>
					</div>
					<div class="modal-body">
						<p>Das internationale Netzwerk Ärzte ohne Grenzen leistet in Kriegs- und Krisenregionen sowie nach Naturkatastrophen humanitäre medizinische Nothilfe. Die international besetzten Teams sind in mehr als 60 Ländern weltweit aktiv, in denen die Gesundheitsstrukturen zusammengebrochen oder Bevölkerungsgruppen unzureichend versorgt sind. Für das Netzwerk arbeiten jährlich rund 4.000 Ärzte, Pflegekräfte, Psychologen, Logistiker, Hebammen und Finanzexperten in etwa 2.000 Projektstellen. Gemeinsam mit einheimischen Mitarbeitern betreiben sie Krankenhäuser, Gesundheitszentren und mobile Kliniken, versorgen Flüchtlinge und Vertriebene medizinisch und psychologisch, führen Impfprogramme durch, bauen Ernährungszentren auf, errichten Notunterkünfte und verbessern die Wasser- und Sanitärversorgung. Darüber hinaus fordert Ärzte ohne Grenzen im Rahmen der Kampagne „Zugang zu unentbehrlichen Medikamenten“ seit 1999 national und international Verantwortliche in Forschung, Politik und Industrie auf, dringend benötigte Medikamente besser zugänglich zu machen.
						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">schließen</button>
						<a target="_blank" href="https://www.aerzte-ohne-grenzen.de/online-spenden" class="btn btn-primary">Jetzt Spenden</a>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

		<!--      <script src="worldations.js" type="text/javascript"></script>    -->
		<!-- Latest compiled and minified JavaScript -->
		<!--    <script src="jquery/jquery-3.0.0.js"></script>-->
		<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
		<script src="bootstrap/js/bootstrap.js"></script>

		<div id="untererkasten" class="jumbotron">
			<h1></h1>
			<p></p>
			<p></p>
			<p> </p>

		</div>
</body>



</html>
<?php
         }
 mysqli_close($db);
?>