<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Belajar PHP DataTables</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<style type="text/css">
		thead {
			background: #d0d0d0;
		}
	</style>
</head>
<body>

	<table id="table" style="border: 1px solid #d0d0d0; width: 100%;">
		<thead>
			<tr>
				<td>Title</td>
				<td>Body</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Clarke Herrera</td>
				<td>łódzkie</td>
			</tr>
			<tr>
				<td>Dominic Craft</td>
				<td>Huntingdonshire</td>
			</tr>
			<tr>
				<td>Clinton Rocha</td>
				<td>Wie</td>
			</tr>
			<tr>
				<td>Yuli Stein</td>
				<td>SJ</td>
			</tr>
			<tr>
				<td>Shad Francis</td>
				<td>Kirov Oblast</td>
			</tr>
			<tr>
				<td>Neil Joyner</td>
				<td>Bahia</td>
			</tr>
			<tr>
				<td>Reuben Bernard</td>
				<td>Antioquia</td>
			</tr>
			<tr>
				<td>Colby Burris</td>
				<td>A</td>
			</tr>
			<tr>
				<td>Igor Stewart</td>
				<td>QC</td>
			</tr>
			<tr>
				<td>Melvin Hodges</td>
				<td>Jharkhand</td>
			</tr>
			<tr>
				<td>Branden Buck</td>
				<td>HA</td>
			</tr>
			<tr>
				<td>Neil Ward</td>
				<td>PR</td>
			</tr>
			<tr>
				<td>Owen Rhodes</td>
				<td>ON</td>
			</tr>
			<tr>
				<td>Davis White</td>
				<td>Östergötlands län</td>
			</tr>
			<tr>
				<td>Logan Conley</td>
				<td>PB</td>
			</tr>
			<tr>
				<td>Thane Goodman</td>
				<td>Atlántico</td>
			</tr>
			<tr>
				<td>Theodore Richardson</td>
				<td>MA</td>
			</tr>
			<tr>
				<td>Zephania Hood</td>
				<td>Brussels Hoofdstedelijk Gewest</td>
			</tr>
			<tr>
				<td>Derek Blake</td>
				<td>SP</td>
			</tr>
			<tr>
				<td>Vincent Sykes</td>
				<td>South Gyeongsang</td>
			</tr>
			<tr>
				<td>Kadeem Blackwell</td>
				<td>O'Higgins</td>
			</tr>
			<tr>
				<td>Jack Schneider</td>
				<td>FL</td>
			</tr>
			<tr>
				<td>Caesar Grimes</td>
				<td>HB</td>
			</tr>
			<tr>
				<td>Ashton Murray</td>
				<td>Istanbul</td>
			</tr>
			<tr>
				<td>Theodore Wyatt</td>
				<td>MD</td>
			</tr>
			<tr>
				<td>Rooney Dennis</td>
				<td>L</td>
			</tr>
			<tr>
				<td>Matthew Hodges</td>
				<td>Kansas</td>
			</tr>
			<tr>
				<td>Allistair Ortega</td>
				<td>Vienna</td>
			</tr>
			<tr>
				<td>Isaiah Kent</td>
				<td>Bihar</td>
			</tr>
			<tr>
				<td>Joshua Olsen</td>
				<td>Katsina</td>
			</tr>
			<tr>
				<td>Wang Kline</td>
				<td>LA</td>
			</tr>
			<tr>
				<td>Carter Frost</td>
				<td>Manitoba</td>
			</tr>
			<tr>
				<td>Shad Cotton</td>
				<td>Wigtownshire</td>
			</tr>
			<tr>
				<td>Caesar Webb</td>
				<td>PNZ</td>
			</tr>
			<tr>
				<td>Macon Byrd</td>
				<td>Franche-Comté</td>
			</tr>
			<tr>
				<td>Burton Mayo</td>
				<td>Mazowieckie</td>
			</tr>
			<tr>
				<td>Mufutau William</td>
				<td>BOL</td>
			</tr>
			<tr>
				<td>Erasmus Booth</td>
				<td>São Paulo</td>
			</tr>
			<tr>
				<td>Dane Mccullough</td>
				<td>KL</td>
			</tr>
			<tr>
				<td>Armando Oliver</td>
				<td>North Sumatra</td>
			</tr>
			<tr>
				<td>Allen Warren</td>
				<td>ANT</td>
			</tr>
			<tr>
				<td>Robert Mclean</td>
				<td>NSW</td>
			</tr>
			<tr>
				<td>Chaim Orr</td>
				<td>HH</td>
			</tr>
			<tr>
				<td>Amir Mercer</td>
				<td>South Island</td>
			</tr>
			<tr>
				<td>Keefe Gray</td>
				<td>ANT</td>
			</tr>
			<tr>
				<td>Evan Buckner</td>
				<td>AN</td>
			</tr>
			<tr>
				<td>Daniel Kinney</td>
				<td>NA</td>
			</tr>
			<tr>
				<td>Carlos Lara</td>
				<td>San José</td>
			</tr>
			<tr>
				<td>Cyrus Powers</td>
				<td>PA</td>
			</tr>
			<tr>
				<td>Lucius Ballard</td>
				<td>Antwerpen</td>
			</tr>
			<tr>
				<td>Raja Pitts</td>
				<td>SU</td>
			</tr>
			<tr>
				<td>Alec England</td>
				<td>Yucatán</td>
			</tr>
			<tr>
				<td>Macaulay Tillman</td>
				<td>Antioquia</td>
			</tr>
			<tr>
				<td>Dustin Fields</td>
				<td>OS</td>
			</tr>
			<tr>
				<td>Zachery Mckee</td>
				<td>Punjab</td>
			</tr>
			<tr>
				<td>Xanthus Terrell</td>
				<td>MP</td>
			</tr>
			<tr>
				<td>Alec Snyder</td>
				<td>Cartago</td>
			</tr>
			<tr>
				<td>Cyrus Guerrero</td>
				<td>C</td>
			</tr>
			<tr>
				<td>Solomon Ortiz</td>
				<td>DS</td>
			</tr>
			<tr>
				<td>Arsenio Franco</td>
				<td>PM</td>
			</tr>
			<tr>
				<td>John Collins</td>
				<td>Khyber Pakhtoonkhwa</td>
			</tr>
			<tr>
				<td>Zeph Dillard</td>
				<td>Connacht</td>
			</tr>
			<tr>
				<td>Lee Meyers</td>
				<td>Puglia</td>
			</tr>
			<tr>
				<td>Cooper Workman</td>
				<td>O</td>
			</tr>
			<tr>
				<td>Rogan Wood</td>
				<td>JT</td>
			</tr>
			<tr>
				<td>Isaiah Thomas</td>
				<td>Devon</td>
			</tr>
			<tr>
				<td>Amos Bond</td>
				<td>North Island</td>
			</tr>
			<tr>
				<td>Martin Hayes</td>
				<td>Ancash</td>
			</tr>
			<tr>
				<td>Hunter Owens</td>
				<td>RYA</td>
			</tr>
			<tr>
				<td>Griffin Ware</td>
				<td>Munster</td>
			</tr>
			<tr>
				<td>Chaney Mayo</td>
				<td>LAZ</td>
			</tr>
			<tr>
				<td>Malachi Gill</td>
				<td>KPK</td>
			</tr>
			<tr>
				<td>Hamish Torres</td>
				<td>Punjab</td>
			</tr>
			<tr>
				<td>Kato Gilliam</td>
				<td>Ontario</td>
			</tr>
			<tr>
				<td>Cole Adkins</td>
				<td>Madrid</td>
			</tr>
			<tr>
				<td>Jin Casey</td>
				<td>COR</td>
			</tr>
			<tr>
				<td>Jasper Barton</td>
				<td>Galicia</td>
			</tr>
			<tr>
				<td>Keegan Stevens</td>
				<td>W</td>
			</tr>
			<tr>
				<td>Quamar Blackwell</td>
				<td>L</td>
			</tr>
			<tr>
				<td>Elton Strong</td>
				<td>Lagos</td>
			</tr>
			<tr>
				<td>Avram Wooten</td>
				<td>KN</td>
			</tr>
			<tr>
				<td>Dane Graves</td>
				<td>SA</td>
			</tr>
			<tr>
				<td>Byron Goodman</td>
				<td>VGG</td>
			</tr>
			<tr>
				<td>Brendan Bean</td>
				<td>Vienna</td>
			</tr>
			<tr>
				<td>Darius Strong</td>
				<td>Pará</td>
			</tr>
			<tr>
				<td>Lewis Mccarty</td>
				<td>Connacht</td>
			</tr>
			<tr>
				<td>Jelani Bryan</td>
				<td>SI</td>
			</tr>
			<tr>
				<td>Jakeem Young</td>
				<td>TN</td>
			</tr>
			<tr>
				<td>Arthur Dudley</td>
				<td>CH</td>
			</tr>
			<tr>
				<td>Axel Mccarty</td>
				<td>Gye</td>
			</tr>
			<tr>
				<td>Aidan Church</td>
				<td>Anambra</td>
			</tr>
			<tr>
				<td>Lucas Galloway</td>
				<td>Riau Islands</td>
			</tr>
			<tr>
				<td>Orlando Bond</td>
				<td>AB</td>
			</tr>
			<tr>
				<td>Jarrod Strong</td>
				<td>Saarland</td>
			</tr>
			<tr>
				<td>Galvin Kemp</td>
				<td>Ist</td>
			</tr>
			<tr>
				<td>Yasir Gibbs</td>
				<td>KN</td>
			</tr>
			<tr>
				<td>Lane Clements</td>
				<td>Ist</td>
			</tr>
			<tr>
				<td>Thomas Blackwell</td>
				<td>Ontario</td>
			</tr>
			<tr>
				<td>Levi Gill</td>
				<td>Akwa Ibom</td>
			</tr>
			<tr>
				<td>Kenneth Montgomery</td>
				<td>LA</td>
			</tr>
			</table>
	</table>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#table").DataTable();
		});
	</script>
</body>
</html>