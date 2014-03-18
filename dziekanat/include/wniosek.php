<div class="container">
	<div class="page-header">
		<h2>Wniosek</h2>
	</div>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="wniosek" class="col-sm-2 control-label">Rodzaj wniosku</label>
			<div class="col-sm-10">
				<select class="form-control">
					<option>Przedłużenie sesji</option>
					<option>Przedłużenie terminu oddania indeksu</option>
					<option>Powtarzanie przedmiotu</option>
					<option>Egzamin komisyjny</option>
					<option>Warunkowe powtarzanie przedmiotu</option>
					<option>Inny</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Adres email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="imięnazwisko@student.put.poznan.pl">
			</div>
		</div>
		<div class="form-group">
			<label for="numerindeksu" class="col-sm-2 control-label">Numer indeksu</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="numerindeksu" placeholder="94500">
			</div>
		</div>
		<div class="form-group">
			<label for="imie" class="col-sm-2 control-label">Imię</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="imie" placeholder="imię">
			</div>
		</div>
		<div class="form-group">
			<label for="nazwisko" class="col-sm-2 control-label">Nazwisko</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nazwisko" placeholder="nazwisko">
			</div>
		</div>
		<div class="form-group">
			<label for="opis" class="col-sm-2 control-label">Opis problemu</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="5"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="plik" class="col-sm-2 control-label">Załącznik</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="plik" placeholder="Załącznik">
			</div>
			<div class="col-sm-5">
				<button type="submit" class="btn btn-warning">Przeglądaj</button>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10"> 
				<button type="submit" class="btn btn-info btn-lg btn-block">Wyślij wniosek</button>
			</div>
		</div>
	</form>
	
	<?php include('include/htdocs/footer.php'); ?>
</div>