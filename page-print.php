<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script src="scripts.js"></script>


</head>

<body>
	<div class="container-fluid">

		<div class="row">
			<div class="col-3">

				<form action="/print">
					<div class="form-group">
						<label for="check">Parbaudes ID:</label><br>
						<input type="text" id="check" name="check" value="" class="form-control form-control-sm mb-1">
					</div>
					<button type="submit" class="btn btn-success btn-sm">Izdrukāt protokolu</button>
				</form>
			</div>
			<div class="col-3">
				<form action="/check-list">
					<div class="form-group">
						<label for="check-list">Parbaudes ID:</label><br>
						<input type="text" id="check-list" name="check-list" value=""
							class="form-control form-control-sm mb-1">
					</div>
					<button type="submit" class="btn btn-success btn-sm">Izdrukāt pārbaudes lapu</button>
				</form>

			</div>

		</div><!-- .row -->
	</div><!-- .container-fluid -->
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="parbaude-nr">Pārbaudes reģ.nr.</label>
					<input type="text" id="parbaude-nr" class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="parbaude-lifts-reg-nr">Lifta reģ.nr.</label>
					<input type="text" id="parbaude-lifts-reg-nr" class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="">Pārbaudes zīmes nr.</label>
					<input type="text" id="parbaude-zimes-nr" class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="">BIR reģ.nr.</label>
					<input type="text" id="parbaude-bir-reg-nr" class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-4">
				<div id="input-radio-parbaudes-tips">
					<span class="h6 me-2">Pārbaudes veids</span><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
							value="kārtējā" checked>
						<label class="form-check-label" for="flexRadioDefault1">
							kārtējā
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
							value="atkārtotā">
						<label class="form-check-label" for="flexRadioDefault2">
							atkārtotā
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3"
							value="ārpuskārtas">
						<label class="form-check-label" for="flexRadioDefault3">
							ārpuskārtas
						</label>
					</div>
				</div>

			</div>
		</div>
	</div>



	<div class="container-fluid">
		<div class="row">
			<div class="col-2">
				<div class="form-group">
					<label for="parbaude-nr">Pārbaudes sākums</label>
					<input type="text" name="parbaudes-datums-start" id="parbaudes-datums-start"
						class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="parbaude-lifts-reg-nr">Beigums</label>
					<input type="text" name="parbaudes-datums-end" id="parbaudes-datums-end"
						class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="">Nākamā </label>
					<input type="text" name="parbaudes-datums-next" id="parbaudes-datums-next"
						class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-2">
				<div class="form-group">
					<label for="">Nakamā normāla</label>
					<input type="text" name="parbaudes-datums-next-normal" id="parbaudes-datums-next-normal"
						class="form-control form-control-sm mb-1">
				</div>
			</div>
			<div class="col-4">

				<div id="input-radio-parbaudes-next-tips">
					<span class="h6 me-2">Nākamās pārbaudes veids</span><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioNext" id="flexRadioNext1"
							value="kārtējā" checked>
						<label class="form-check-label" for="flexRadioNext1">
							kārtējā
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioNext" id="flexRadioNext2"
							value="atkārtotā">
						<label class="form-check-label" for="flexRadioNext2">
							atkārtotā
						</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="flexRadioNext" id="flexRadioNext3"
							value="ārpuskārtas">
						<label class="form-check-label" for="flexRadioNext3">
							ārpuskārtas
						</label>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>
	<div class="container-fluid">
		<h2 class="h4">Neatbilstības ar vertējumu 1</h2>
		<div id="input_one">
			<div class="check-header">BEDRE</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">

							<input class="form-check-input" type="checkbox"
								value="3.9 STOP slēdzis šahtas bedrē neatbilst standartam.">
							<label class="form-check-label"></label><span class="danger">Stop</span>
							neatbilst</label><br>

							<img src="img/nostiepejs.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.2 Ātruma ierobežotāja stiepšanas ierīce ir nolietota.">
							<label class="form-check-label"></label>Stiepšanas ierīce ir nolietota</label><br>

						</div>

						<div class="col-6">
							<img src="img/trepes2.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="5.1 Šahtas bedrē nav trepju.">
							<label class="form-check-label"></label>Sahtas bedrē nav trepju</label><br>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">

						<div class="col-6">
							<img src="img/attalums.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="5.5 Nepietiekams attālums starp pretsvaru un buferi.">
							<label class="form-check-label"></label>Pretsvars - buferis <span
								class="danger">nepiet</span></label><br>
							<br>
							<img src="img/brivkustiba.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="5.3 Palielināta lifta pretsvara brīvkustība vadotnēs.">
							<label class="form-check-label"></label>Lifta pretsvara brīvkustība</label><br>

							<img src="img/brivkustiba.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="5.3 Palielināta lifta kabīnes brīvkustība vadotnēs.">
							<label class="form-check-label"></label>Lifta kabīnes brīvkustība</label><br>

							<img src="img/brivkustiba.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox"
								value="5.3 Palielināta lifta kabīnes un pretsvara brīvkustība vadotnēs.">
							<label class="form-check-label"></label>Kabīnes un pretsvara brīvkustība</label><br>

						</div>

						<div class="col-6">
							<img src="img/atsperes.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="5.5 Pretsvara fiksējošās atsperes ir nolietotas.">
							<label class="form-check-label">Pretsvara atsperes nolietotas</label><br>
							<br>
							<input class="form-check-input" type="checkbox"
								value="5.3 Palielināta lifta pretsvara brīvkustība vadotnēs (nolietoti vādkurpji).">
							<label class="form-check-label"></label>Pretsvara vādkurpes</label><br>

							<input class="form-check-input" type="checkbox"
								value="5.3 Palielināta lifta kabīnes brīvkustība vadotnēs (nolietoti vādkurpji).">
							<label class="form-check-label"></label>Kabīnes vādkurpes</label><br>

							<input class="form-check-input" type="checkbox"
								value="5.3 Palielināta lifta kabīnes un pretsvara brīvkustība vadotnēs (nolietoti vādkurpji).">
							<label class="form-check-label"></label>Kabīnes un pretsvara vādkurpes</label><br>


							<!-- 5.3 - Palielināta lifta kabīnes un pretsvara brīvkustība vadotnēs. -->
							<!-- 5.3 - Palielināta lifta kabīnes brīvkustība vadotnēs. -->
							<!-- 5.3 - Palielināta lifta pretsvara brīvkustība vadotnēs. -->

						</div>

					</div>

				</div>
			</div>
			<div class="check-header">KABĪNE</div>
			<div class="row">
				<div class="col-7">
					<div class="row">
						<div class="col-6">
							<input class="form-check-input" type="checkbox" value="3.7 Lifta kabīnē nedarbojas zvans.">
							<label class="form-check-label"></label>Zvans nedarbojas</label><br><br>

							<div class="row">
								<div class="col-6">
									<img src="img/apdare.png" class="checkbox-img"><br><label
										class="form-check-label"></label>LK Apdare nol.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnes apdare ir nolietota.">

									<label class="form-check-label"></label>boj.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnes apdare ir bojāta.">

								</div>
								<div class="col-6">
									<img src="img/grida.png" class="checkbox-img"><br>
									<label class="form-check-label"></label>LK Grīda nol.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnē nolietojies grīdas segums.">

									<label class="form-check-label"></label>boj.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnē ir bojāts grīdas segums.">
								</div>
							</div>

							<br>
							<img src="img/paveles.png" class="checkbox-img"><label class="form-check-label"></label>VA
							nol.</label>
							<input class="form-check-input" type="checkbox"
								value="3.4 Lifta kabīnes vadības aparāts ir nolietots.">
							<label class="form-check-label"></label>boj.</label>
							<input class="form-check-input" type="checkbox"
								value="3.4 Lifta kabīnes vadības aparāts ir bojāts."><br>

							<input class="form-check-input" type="checkbox"
								value="7.1 Sprauga starp kabīnes durvīm un aiļu apmalēm ir lielāka par 10 mm.">
							<label class="form-check-label"></label><span class="danger">DA S</span>prauga</label>

						</div>
						<div class="col-6">
							<input class="form-check-input" type="checkbox" disabled value="">
							<label class="form-check-label"></label><span class="danger">STOP</span> - tagad
							3!</label><br><br>


							<div class="row">
								<div class="col-6">
									<img src="img/griesti.png" class="checkbox-img"><br>
									<label class="form-check-label"></label>LK Griesti nol.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnes griesti ir nolietoti.">

									<label class="form-check-label"></label>boj.</label>
									<input class="form-check-input" type="checkbox"
										value="4.1 Lifta kabīnes griesti ir bojāti."><br><br>

									<label class="form-check-label"></label><span class="success">
										<< REVERSE>>
									</span></label>
									<input class="form-check-input" type="checkbox"
										value="7.2 Durvju reverse mehānisms nedarbojas."><br>

									<label class="form-check-label">Kabīnes </label><img src="img/lamp.png"
										class="checkbox-img">
									<input class="form-check-input" type="checkbox"
										value="8.0 Nepietiekams apgaismojums lifta kabīnē."> <span class="danger">
										nepiet</span><br>

								</div>
								<div class="col-6">
									<img src="img/durvis.png" class="checkbox-img"><br>
									<label class="form-check-label"></label>LK Durvis nol.</label>
									<input class="form-check-input" type="checkbox"
										value="7.1 Lifta kabīnes durvis ir nolietotas.">

									<label class="form-check-label"></label>boj.</label>
									<input class="form-check-input" type="checkbox"
										value="7.1 Lifta kabīnes durvis ir bojātas.">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-5">
					<div class="row">
						<div class="col-6">
							<input class="form-check-input" type="checkbox"
								value="3.9 Kabīnes jumtā nav apstādināšanas slēdža (STOP pogas).">
							<label class="form-check-label"></label><span class="danger">STOP jumtā
								nav</span></label><br>
						</div>

						<div class="col-6">
							<input class="form-check-input" type="checkbox" disabled
								value="3.9 Stopslēdzis kabīnes jumtā nedarbojas.">
							<label class="form-check-label"></label><span class="danger">STOP jumtā nedarbojas -
								3!</span>
							</label><br>
							<input class="form-check-input" type="checkbox" disabled
								value="3.9 Stopslēdzis kabīnes jumtā nedarbojas.">
							<label class="form-check-label"></label><span class="danger">LKJ vaības ierīce jumtā
								nedarbojas - 3!</span>
							</label><br>
						</div>

					</div>
				</div>
			</div>



			<!-- 
7.1 Kabīnes durvīm ir bojāta apmale.
7.1 Kabīnes durvīm ir bojāts blīvējums.
7.1 Kabīnes durvis nav ieramētas.
7.1 Kabīnes durvis ir bojātas.
3.7 Trauksmes ierīce kabīnē nedarbojas pie atslēgtas strāvas.
3.7 Avārijas apgaismojums kabinē nedarbojas pie atslēgtas strāvas. -->
			<br>
			<div class="check-header">MAŠĪNTELPA</div>
			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<input class="form-check-input" type="checkbox"
								value="1.4 Mašīntelpas durvīm nav brīdinājuma uzraksta &quot;Nepiederošiem ieeja aizliegta&quot;.">
							<label class="form-check-label"></label>Mašīntelpas durvīm nav brīdinājuma</label><br><br>

							Lūka<br>
							<input class="form-check-input" type="checkbox"
								value="1.4 Lūkai mašīntelpā nav brīdinājuma zīmes par nokrišanas draudiem.">
							<label class="form-check-label"></label>Nav bridnājuma</label>

							<input class="form-check-input" type="checkbox" value="3.1 Mašīntelpā lūka ir bojāta.">
							<label class="form-check-label"></label>Bojāta</label><br><br>


							<img src="img/mitrums.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.6 Eļļas noplūde no lifta mašīnas reduktora.">
							<label class="form-check-label"></label>Eļļas noplūde</label><br>

							<input class="form-check-input" type="checkbox"
								value="3.6 Lifta mašīnas reduktora nolietojums un eļļas noplūde.">
							<label class="form-check-label"></label>Mašīnas nolietojums un eļļas noplūde</label><br><br>

							<label class="form-check-label">Mašīntelpas </label><img src="img/lamp.png"
								class="checkbox-img">
							<input class="form-check-input" type="checkbox"
								value="8.0 Nepietiekams apgaismojums mašintelpā."> <span class="danger">
								nepiet</span><br>
							<label class="form-check-label">Šahtas </label><img src="img/lamp.png" class="checkbox-img">
							<input class="form-check-input" type="checkbox"
								value="8.0 Nepietiekams šahtas apgaismojums.">
							<span class="danger">
								nepiet</span><br>
							<label class="form-check-label">Mašīntelpas un šahtas </label><img src="img/lamp.png"
								class="checkbox-img">
							<input class="form-check-input" type="checkbox"
								value="8.0 Nepietiekams mašīntelpas un šahtas apgaismojums."> <span class="danger">
								nepiet</span><br>





						</div>
						<div class="col-6">
							Nav dielektrisko paklāju<br>
							<img src="img/kovriki.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.1 Nav dielektrisko paklāju pie vadības skapja.">
							<label class="form-check-label"></label>pie vadības skapja</label><br>
							<img src="img/kovriki.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.1 Nav dielektrisko paklāju pie galvenā barošanas slēdža.">
							<label class="form-check-label"></label>pie barošanas slēdža</label><br>
							<img src="img/kovriki.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox"
								value="3.1 Nav dielektrisko paklāju pie vadības skapja un pie galvenā barošanas slēdža.">
							<label class="form-check-label"></label>pie vadības skapja un sledža</label><br><br>


							Nav apmaļu<br>
							<img src="img/manjetsi.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox"
								value="3.1 Mašīntelpā nav 5cm. apmaļu grīdā ap ātruma ierobežotāja trosēm.">
							<label class="form-check-label"></label>ap ātruma ierobežotāja trosēm</label><br>
							<img src="img/manjetsi.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.1 Mašīntelpā nav 5 cm. apmaļu grīdā ap nesošām trosēm.">
							<label class="form-check-label"></label>ap nesošām trosēm</label><br>
							<img src="img/manjetsi.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox"
								value="3.1 Mašīntelpā nav 5cm. apmaļu grīdā ap ātruma ierobežotāja un nesošām trosēm.">
							<label class="form-check-label"></label>ap ierobežotāja un nesošām trosēm</label><br>
						</div>
					</div>
				</div>

				<div class="col-6">
					<div class="row">
						<div class="col-6">
							<img src="img/atsperes.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.6 Bremžu atsperes ir nodilušas.">
							<label class="form-check-label"></label>3.6 Bremžu atsperes</label><br><br>

							<img src="img/skriemelis.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.6 Vādskriemeļa nodilums.">
							<label class="form-check-label"></label>Skriemelis</label>
							<img src="img/skriemelis_nevienmerigs.png" class="checkbox-img"><input
								class="form-check-input" type="checkbox"
								value="3.6 Nevienmērīgs lifta mašīnas vadošā skriemeļa nodilums.">
							<label class="form-check-label"></label><span class="danger">nevienmerīgs</span></label>
							<br><br>

							<img src="img/os.png" class="checkbox-img"><input class="form-check-input" type="checkbox"
								value="3.2 Ātruma ierobežotājs ir nolietots.">
							<label class="form-check-label"></label>ОС</label>
							<input class="form-check-input" type="checkbox"
								value="3.2 Ātruma ierobežotāja trose ir nodilis.">
							<label class="form-check-label"></label>ОС trose</label>
							<input class="form-check-input" type="checkbox"
								value="3.2 Ātruma ierobežotājs un tā trose ir nolietoti.">
							<label class="form-check-label"></label>Both</label>
							<br>
							<br>
							<br>
							<input class="form-check-input" type="checkbox"
								value="3.1 Mašīntelpā ir aprīkojums, kas nav saistīts ar liftu.">
							<label class="form-check-label"></label>Aprīkojums</label>
							<input class="form-check-input" type="checkbox"
								value="3.1 Mašīntelpā ir priekšmeti, kas nav saistīti ar lifta ekspluatāciju.">
							<label class="form-check-label"></label>Priekšmeti</label>
							<input class="form-check-input" type="checkbox"
								value="3.1 Mašīntelpā ir priekšmeti un aprīkojums, kas nav saistīti ar liftu. ">
							<label class="form-check-label"></label>Both</label>

						</div>
						<div class="col-6">
							<img src="img/bremzes.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.6 Bremžu uzlikas ir nodilušas.">
							<label class="form-check-label"></label>3.6 Bremžu uzlikas</label><br><br>



							<input class="form-check-input" type="checkbox" value="2.2 Nesošo trošu nodilums.">
							<label class="form-check-label"></label>Nes. troses</label><br>
						</div>
					</div>
				</div>



			</div>

			<br>
			<div class="check-header">НКУ</div>
			</label class="form-check-label">Visi kontaktori</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Elektriskie kontaktori vadības skapī ir nolietoti.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label class="form-check-label">Visi automāti</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Aizsardzības aparāti vadības skapī ir nolietoti.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label class="form-check-label">Visi kontaktori un automāti</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Aizsardzības aparāti un elektriskie kontaktori vadības skapī ir nolietoti.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label class="form-check-label">Stacijas aprīkojums</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Vadības stacijas elektriskais aprīkojums ir nolietojies.">
			<br>
			Nolietoti automāti<br>

			</label class="form-check-label">VA1</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Aizsardzības aparāts VA1 vadības skapī ir nolietots.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label class="form-check-label">VA2</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Aizsardzības aparāts VA2 vadības skapī ir nolietots.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</label class="form-check-label">VA3</label>
			<input class="form-check-input" type="checkbox"
				value="9.0 Aizsardzības aparāts VA3 vadības skapī ir nolietots.">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



			<div class="dropdown d-inline mb-1">
				<button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1"
					data-bs-toggle="dropdown" aria-expanded="false">
					Citi varianti
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li>
						<span class="dropdown-item">
							<label class="form-check-label">VA1 un VA2
								<input class="form-check-input" type="checkbox"
									value="9.0 Aizsardzības aparāti VA1 un VA2 vadības skapī ir nolietoti.">
							</label>
						</span>
					</li>
					<li>
						<span class="dropdown-item">
							<label class="form-check-label">VA1 un VA3
								<input class="form-check-input" type="checkbox"
									value="9.0 Aizsardzības aparāti VA1 un VA3 vadības skapī ir nolietoti.">
							</label>
						</span>
					</li>
					<li>
						<span class="dropdown-item">
							<label class="form-check-label">VA2 un VA3
								<input class="form-check-input" type="checkbox"
									value="9.0 Aizsardzības aparāti VA2 un VA3 vadības skapī ir nolietoti.">
							</label>
						</span>
					</li>
				</ul>
			</div>
			<br>
			<br>


		</div>



		<div class="check-header">STAIRS</div>
		<div id="input-izs-pogas">
			<h5>Bojātas izsaukuma pogas</h5>
			<div class="checkbox-group-wrapper">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-1" value="1">
					<label class="form-check-label" for="izs-poga-1">1</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-2" value="2">
					<label class="form-check-label" for="izs-poga-2">2</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-3" value="3">
					<label class="form-check-label" for="izs-poga-3">3</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-4" value="4">
					<label class="form-check-label" for="izs-poga-4">4</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-5" value="5">
					<label class="form-check-label" for="izs-poga-5">5</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-6" value="6">
					<label class="form-check-label" for="izs-poga-6">6</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-7" value="7">
					<label class="form-check-label" for="izs-poga-7">7</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-8" value="8">
					<label class="form-check-label" for="izs-poga-8">8</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-9" value="9">
					<label class="form-check-label" for="izs-poga-9">9</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-10" value="10">
					<label class="form-check-label" for="izs-poga-10">10</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-11" value="11">
					<label class="form-check-label" for="izs-poga-11">11</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-12" value="12">
					<label class="form-check-label" for="izs-poga-12">12</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-13" value="13">
					<label class="form-check-label" for="izs-poga-13">13</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-14" value="14">
					<label class="form-check-label" for="izs-poga-14">14</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-15" value="15">
					<label class="form-check-label" for="izs-poga-15">15</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-poga-16" value="16">
					<label class="form-check-label" for="izs-poga-16">16</label>
				</div>

			</div>
		</div>

		<div id="input-izs-aparati">
			<h5>Nolietoti izsaukuma aparāti</h5>
			<div class="checkbox-group-wrapper">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-1" value="1">
					<label class="form-check-label" for="izs-apparats-1">1</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-2" value="2">
					<label class="form-check-label" for="izs-apparats-2">2</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-3" value="3">
					<label class="form-check-label" for="izs-apparats-3">3</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-4" value="4">
					<label class="form-check-label" for="izs-apparats-4">4</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-5" value="5">
					<label class="form-check-label" for="izs-apparats-5">5</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-6" value="6">
					<label class="form-check-label" for="izs-apparats-6">6</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-7" value="7">
					<label class="form-check-label" for="izs-apparats-7">7</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-8" value="8">
					<label class="form-check-label" for="izs-apparats-8">8</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-9" value="9">
					<label class="form-check-label" for="izs-apparats-9">9</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-10" value="10">
					<label class="form-check-label" for="izs-apparats-10">10</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-11" value="11">
					<label class="form-check-label" for="izs-apparats-11">11</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-12" value="12">
					<label class="form-check-label" for="izs-apparats-12">12</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-13" value="13">
					<label class="form-check-label" for="izs-apparats-13">13</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-14" value="14">
					<label class="form-check-label" for="izs-apparats-14">14</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-15" value="15">
					<label class="form-check-label" for="izs-apparats-15">15</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="izs-apparats-16" value="16">
					<label class="form-check-label" for="izs-apparats-16">16</label>
				</div>

			</div>
		</div>




		<h2 class="h4 text-center">Neatbilstības ar vertējumu 3</h2>
		<div id="input_three">


			<label class="form-check-label"><span class="danger">Stopslēdzis lifta kabīnē nedarbojas.</span></label>
			<input class="form-check-input" type="checkbox" value="3.9 Stopslēdzis lifta kabīnē nedarbojas.">
			<br>
			<br>
			<label class="form-check-label"><span class="danger">Stopslēdzis kabīnes jumtā nedarbojas.</span></label>
			<input class="form-check-input" type="checkbox" value="3.9 Stopslēdzis kabīnes jumtā nedarbojas.">
			<br>
			<br>
			Izvērtēšanas vadības ierīces uz kabīnes jumta
			<input class="form-check-input" type="checkbox"
				value="3.4 Nav izvērtēšanas vadības ierīces uz kabīnes jumta.">
			<label class="form-check-label"><span class="danger">NAV</span></label>

			<input class="form-check-input" type="checkbox"
				value="3.4 Izvērtēšanas vadības ierīce uz kabīnes jumta nedarbojas.">
			<label class="form-check-label"><span class="danger">Nedarbojas</span></label>

			<input class="form-check-input" type="checkbox"
				value="3.4 Izvērtēšanas vadības ierīcei uz kabīnes jumta nedarbojas STOP poga.">
			<label class="form-check-label"><span class="danger">STOP nedarbojas</span></label>
			<br>
			<br>

			<label class="form-check-label"><span class="danger">Lifta kabīnes durvis var atvert ar rokām</span></label>
			<input class="form-check-input" type="checkbox"
				value="7.1 Lifta kabīnes durvis var atvert ar rokām, kabīnei neatrodoties pretīm šahtas durvīm vai atslēgšanas zonā.">
			<br>



		</div>


		<!-- 			
			3.9 - STOP slēdzis šahtas bedrē nedarbojas.
			3.5 Nedarbojas gala slēdzis.	
			3.2 - Ātruma ierobežotājs  nenodarbojas pārliekot tā trosi uz mazo skriemeli.				
			3.9 Nedarbojas ķērājierīces sviras slēdzis.						
			2.1 Nedarbojas trišu atslabīnāšanas kontroles slēdzis.                                               													 -->


	</div>
	</div>
	<br>
	<br>
	<pre>
'<span id="parbaude-nr-out-1"></span>' => array(
		'parbaude_nr'                      => '<span id="parbaude-nr-out-2"></span>',
		'parbaude_veids'                   => '<span id="parbaudes-veids"></span>',
		'parbaude_next_veids'              => '<span id="parbaudes-next-veids"></span>',
		'parbaude_lifts_reg_nr'            => '<span id="parbaude-lifts-reg-nr-out"></span>',
		'parbaude_zimes_nr'                => '<span id="parbaude-zimes-nr-out"></span>',
		'parbaude_datums_start'            => '<span id="parbaudes-datums-start-out"></span>',
		'parbaude_datums_end'              => '<span id="parbaudes-datums-end-out"></span>',
		'parbaude_next_datums'             => '<span id="parbaudes-datums-next-out"></span>',
		'parbaude_next_normal_datums'      => '<span id="parbaudes-datums-next-normal-out"></span>',
		'parbaude_valditajs'               => '99',
		'parbaude_mehanikis_vards_uzvards' => '',
		'parbaude_mehanika_kompanija'      => '',
		'parbaude_bir_reg_nr'              => '<span id="parbaude-bir-reg-nr-out"></span>',
		'atkartotas_parbaudes_iemesls'     => array(),
		'parbaude_neatbilstibas_0'         => '',
		'parbaude_neatbilstibas_1'         => '<span id="out-1"></span>',
		'parbaude_neatbilstibas_2'         => '<span id="out-2"></span>',
		'parbaude_neatbilstibas_3'         => '<span id="out-3"></span>',
		'piezimes'                         => '',
),
</pre>
	<br><br><br><br><br>



	5.1 Šahtā ir izvietotas iekārtas, kas neattiecās uz liftu.


	4.3 - Kabīnes grīdas un stāva laukuma grīdas līmeņu starpība ir lelākā par 50mm (15mm) x stāvos.
	4.1 - Kabīnes apgaismojuma plafons ir bojāts.

	7.2 - Nekorekta durvju vēršanas mehānisma darbība.
	7.2 - Troksnis durvju vēršanas mehānisma darbība.
	4.1 - Kabīnes restēm vidusdaļā jābūt atzīmētām/apzīmētam kā bīstamas zonas.

	4.1 Lifta kabīnē nav informācijas par lifta nominalo cēltspēju un maksimalo personu skaitu.

	3.2 - Ātruma ierobežotāja trose ir nolietota.
	3.2 - Ātruma ierobežotāja troses garums ir palielināts.

	5.4 - Kabīnes buferi nav piestiprināti.
	5.4 - Vienam buferim ir atvienots kontakts.
	5.4 - Pretsvara buferis nav nostiprināts.
	5.4 - Pretsvara buferis nav pareizi uzstādīts.

	7.1 - Nedarbojas kabīnes durvju fotoelements.
	4.1 Lifta kabīnē ir salauzts spogulis.
	4.1 Lifta kabīnē nav nostiprināts spogulis.
	3.9 - Kabīne neapstājas nospiežot pogu "STOP".
	7.1 Sprauga starp kabīnes durvīm un aiļu apmalēm ir lielāka par 10 mm.
	7.1 Sprauga starp kabīnes durvju vertnēm ir lielāka par 10 mm.
	3.7 - Lifta kabīnē nedarbojas zvans (skaņas signalizācijas sistēma).
	3.7 - Lifts nav aprīkots ar abpusējas saziņas līdzekļiem.
	3.7 - Abpusējas saziņas ierīce nedarbojas pie atslēgtas stravas.

	3.7. – saziņas ierīcei nav lietošanas instrukcijas, nav CE atbilstības marķējuma, vadības ierīces grafiskie
	simboli un sakaru ierīces uzstādīšanas vieta neatbilst standartam LVS EN 81-28


	7.1 - Visos stāvos sprauga starp šahtas durvīm un aiļu apmalēm ir lielāka par 10 mm.
	7.1 - Sprauga starp šahtas durvīm un aiļu apmalēm $$$ stāvā ir lielāka par 10 mm.
	7.1 - Lifta kabīnes durvis var atvert ar rokām, kabīnei neatrodoties pretīm šahtas durvīm vai atslēgšanas zonā.

	3.6 - Nav vādskriemeļa aizarga pret trošu noslīdēšanas.
	3.6 - Nav vādskriemeļa aizsarga pret svešķermeņu iekļūšanas starp trosēm un rievām.
	3.6 - Nav vādskriemeļa aizsarga pret trošu noslīdēšanas un svešķermeņu iekļūšanas starp trosēm un rievām.
	3.7 - Kabīnē izvietotie Saziņas ierīces vizuālajie simboli neatbilst prasībam.
	3.7 - Abpusējas saziņas ierīce lifta kabīnē nedarbojas.
	3.7 - Abpusējas saziņas ierīcei lifta kabīnē nav lietošanas instrukcijas, nav CE atbilstības marķējuma, vadības
	ierīces grafiskie simboli un sakaru ierīces uzstadīšanas vieta neatbilst standartam LVS EN 81-28.
	3.7 - Ar abpusējas saziņas līdzekļiem saistītie vadības ierīces grafiskie simboli neatbilst LVS EN 81-28
	standartam.
	3.7 - Lifta šahtas bedre un kabīnes jumts nav aprīkoti ar abpusējas saziņas līdzekļiem.
	3.7 - Nav saziņas ierīces šahtas bedrē, no lifta kabīnes jumta nav iespējas sazināties ar avārijas dienestu.
	1.4 - Pasažieru evakuācijas instrukcija nav valsts valodā.
	1.4 - Nav lifta evakuācijas instrukcijas.

	3.1 - Mašīntelpā redzamā vietā nav principiālās elektriskās shēmas.
	3.8 Nedarbojas lifta evakuācijas ierīce.
	3.8 Elektriskā evakuācijas ietaise nedarbojas (akumulators ir izlādējies).
	3.6 Lifta mašīnas reduktora nolietojums un eļļas noplūde
	3.6 Stiprs lifta mašīnas reduktora nolietojums.
	3.6 Palielināta ass brīvkustība lifta mašīnas reduktoram.
	3.6 - Troksnis lifta mašīnas elektromotora darbībā.
	2.2 Pārtrūkusi nesošas troses vijums,
	2.2 - Nesošās troses nolietotas, ar rūsas pēdam.
	3.6 Zēmā ātrumā dzinējs pārkarts, kas neļauj veikt regulāras pārbaudes un apkopi
	9.0 Lifta mašīnai nav zēmējuma.


	9.0 - Kabeļa izolācija ir salauzta.
	9.0 - Nepietekama aizsardzība pret elektrošoku (LVS EN 81-80 9.1.p.)

	3.2 - Ātruma ierobežotājs nedarbojas (nepareizi uzstādīts - jāmaina darbības virzienu).
	3.5 - Nedarbojas gala slēdzis.
	3.2 - Ātruma ierobežotājs nenodarbojas pārliekot tā trosi uz mazo skriemeli.
	3.2 Ātruma ierobežotājs ir nolietots un nenodarbojas pārliekot tā trosi uz mazo skriemeli.
	Piezīme: Ātruma ierobežotājs tika aizzīmogots.


	3.9 - Nav lifta apstadināšanas ierīces šahtas bedrē un uz kabīnes jumta - augsts risks (LVS EN 81-80 10.4. un
	2.15.p) - PTAC
	5.5 - Nav uzstādītas kabīnes jumta margas pretsvara pusē.
	3.4 - Nav izvērtēšanas vadības ierīces uz kabīnes jumta.
	3.4 - Izvērtēšanas vadības ierīce uz kabīnes jumta nedarbojas.
	3.4 Nekorekti darbojas izvērtēšanas vadības ierīce uz kabīnes jumta (nevar pārvietoties uz augšu).
	7.2 Kabīnes durvju piedziņas mehanisma nodilums.
	7.2 Lifta durvju atvēršanas reduktora nolietojums.
	3.5 Nedarbojas gala slēdzis.
	3.9 Nedarbojas ķērājierīces sviras slēdzis.
	2.1 Nedarbojas trišu atslabīnāšanas kontroles slēdzis.
	3.4 - Stāvu pārslēdzēji nolietoti $$$ stāvos.
	7.1 4. stāvā nekorekti darbojas šahtas durvju slēgšanas kontroles kontakts (ДЗ-1).
	Attālums starp šahtas sienu un kabīnes sienu virs 30 cm un nav uzstādītas margas uz kabīnes jumta - augsts risks
	(LVS EN 81-80 5.5.p) - PTAC

	8.0 - Nav lifta šahtas apgaismojuma.
	Lifta kabīnes vādsliežu kronšteini ( neliela brīvkustība ).
	5.5 Pretsvara stiprinājuma uzgrieznis nav nostiprināts ar tapu.
	5.5 Viena pretsvara fiksējošā atspere ir salauzta.
	5.5 - Nav uzstādīts pretsvara kravas stiprinājums.


	7.1 - Visos stāvos sprauga starp šahtas durvīm un aiļu apmalēm ir lielāka par 10 mm.
	7.1 Sprauga starp šahtas durvīm un aiļu apmalēm $$$ stāvā ir lielāka par 10 mm.
	7.2 Lifta šahtas durvis x. stāvā var atvērt bez palīgierīcēm stāvā, kurā neatrodas lifta kabīne.
	4.3 Kabīnes grīdas un stāva laukuma grīdas līmeņu starpība ir lelākā par 50mm (15mm.).
	7.1 - Lifta šahtas durvis x. stāvā ir bojātas.
	7.1 Sprauga starp šahtas durvju vērntēm $$$ stavā ir lielāka par 10 mm.
	7.1 Šahtas durvju blīvējums $$$. stāvā ir bojāts (sprauga starp durvju vērtnēm ir lielāka par 10.mm.)
	7.1 Lifta šahtas durvju aiļu apmales ir bojātas $$$. stāvos (sprauga ir lielāka par 10.mm.)
	7.1 Lifta šahtas durvju aiļu apmales x. stāvā ir demontētas.(sprauga ir lielāka par 10.mm.)
	7.1 Pie šahtas durvju sliekšņa $$$ stāvā ir bedre.
	7.1 - Šahtas durvju slieksnis 8. stavā ir bojāts.
	7.1 Horizontalais attālums starp kabīnes un stāvu laukuma sliekšņiem ir lielāks par 50mm. (jauniem 35mm.)
	3.4 Izsaukuma pogas $$$. stāvos ir bojātas.
	3.4 Izsaukuma aparāti $$$. stāvos ir nolietoti.

	3.7 Trauksmes ierīce kabīnē nedarbojas pie atslēgtas strāvas.
	3.7 Avārijas apgaismojums kabinē nedarbojas pie atslēgtas strāvas.


	PTAC: Lifta kabīnes abpusējie saziņas līdzekļi darbojas neatbilstoši (dienests nevar identificēt liftu, no kura
	saņemts izsaukums, lifta vadības panelī nav izgaismots zaļas krāsas signāls, kas apliecina, ka izveidots
	savienojums un savienojuma (saziņas) laikā, kas ir neatbilstība Noteikumu Nr. 206 99.punkta, LVS EN 81-28:2003
	4.1.4., LVS EN 81-70:2003 5.4.4.3 b) prasībām.



	</div>
</body>

</html>
