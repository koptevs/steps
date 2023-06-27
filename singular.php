<?php
/*
Exit if accessed directly.
 */

require get_template_directory() . '/theme-variables.php';

defined( 'ABSPATH' ) || exit;
get_header();
?>
<div class="<?php echo esc_attr( $container ); ?> py-4">
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
							<label class="form-check-label"></label>ОС</label><br>
							<img src="img/manjetsi.png" class="checkbox-img"><input class="form-check-input"
								type="checkbox" value="3.1 Mašīntelpā nav 5 cm. apmaļu grīdā ap nesošām trosēm.">
							<label class="form-check-label"></label>КВШ</label><br>
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
</div>
<?php
get_footer();
?>
