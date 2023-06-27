<div class="container">
	<form action="#" method="GET">
		<!-- Строка сетки -->
		<div class="row gx-sm-2">
			<div class="mb-3 col-sm">
				<label for="login" class="form-label">Логин:</label>
				<input
					type="text"
					class="form-control"
					name="login"
					id="login"
					placeholder="Логин" />
			</div>
			<div class="mb-3 col-sm">
				<label for="passwd" class="form-label">Пароль:</label>
				<input
					type="password"
					class="form-control"
					name="passwd"
					id="passwd"
					placeholder="Пароль" />
			</div>
		</div>
		<!-- Обычная группа -->
		<div class="mb-3">
			<label for="msg" class="form-label">Сообщение:</label>
			<textarea
				class="form-control"
				name="msg"
				id="msg"
				style="height: 10em"></textarea>
		</div>
		<!-- Строка сетки -->
		<div class="row gx-sm-2">
			<div class="mb-3 col-sm-12 col-md-5">
				<label for="url" class="form-label">URL:</label>
				<input
					type="url"
					class="form-control"
					name="url"
					id="url"
					placeholder="URL" />
			</div>
			<div class="mb-3 col-sm-8 col-md-5">
				<label for="email" class="form-label">E-mail:</label>
				<input
					type="email"
					class="form-control"
					name="email"
					id="email"
					placeholder="E-mail" />
			</div>
			<div class="mb-3 col-sm-4 col-md-2">
				<label for="code" class="form-label">Код:</label>
				<input
					type="text"
					class="form-control"
					name="code"
					id="code"
					placeholder="Код" />
			</div>
		</div>
		<!-- Кнопка на строке -->
		<button type="submit" class="btn btn-primary mb-2">Отправить</button>
	</form>
</div>
<br />
<div class="container">
	<form action="#" method="GET">
		<div class="mb-3 row">
			<label
				for="login"
				class="col-sm-3 col-md-2 col-form-label col-form-label-sm">
				Логин:</label
			>
			<div class="col-sm-9 col-md-10">
				<input
					type="text"
					class="form-control form-control-sm"
					name="login"
					id="login"
					placeholder="Логин" />
			</div>
		</div>

		<div class="mb-3 row">
			<label for="passwd" class="col-sm-3 col-md-2 col-form-label">
				Пароль:</label
			>
			<div class="col-sm-9 col-md-10">
				<input
					type="password"
					class="form-control"
					name="passwd"
					id="passwd"
					placeholder="Пароль" />
			</div>
		</div>
		<div class="mb-3 row">
			<label for="msg" class="col-sm-3 col-md-2 col-form-label">
				Сообщение:</label
			>
			<div class="col-sm-9 col-md-10">
				<textarea rows="5" class="form-control" name="msg" id="msg"></textarea>
			</div>
		</div>
		<div class="mb-3 row">
			<div class="offset-sm-3 offset-md-2 col-sm-9 col-md-10">
				<button type="submit" class="btn btn-primary">Отправить</button>
			</div>
		</div>
	</form>
	<br />
	<br />
	<br />
	<br />

	<fieldset class="mb-3">
		<div class="row">
			<legend class="col-form-label col-sm-3 col-md-2 pt-0">Пол:</legend>
			<div class="col-sm-9 col-md-10">
				<div class="form-check">
					<input
						type="radio"
						name="sex"
						id="radio1"
						value="male"
						class="form-check-input" />
					<label class="form-check-label" for="radio1">Мужской</label>
				</div>
				<div class="form-check">
					<input
						type="radio"
						name="sex"
						id="radio2"
						value="female"
						class="form-check-input" />
					<label class="form-check-label" for="radio2">Женский</label>
				</div>
			</div>
		</div>
	</fieldset>

	<div class="btn-group" role="group" aria-label="Группа">
		<button type="button" class="btn btn-outline-success">Кнопка 1</button>
		<button type="button" class="btn btn-outline-info">Кнопка 2</button>
		<button type="button" class="btn btn-outline-danger">Кнопка 3</button>
	</div>

	<div
		class="btn-toolbar justify-content-end"
		role="toolbar"
		aria-label="Панель">
		<div class="btn-group" role="group" aria-label="Группа 1">
			<button type="button" class="btn btn-outline-success">1</button>
			<button type="button" class="btn btn-outline-info">2</button>
			<button type="button" class="btn btn-outline-danger">3</button>
		</div>
		<div class="btn-group ml-3" role="group" aria-label="Группа 2">
			<button type="button" class="btn btn-outline-success">4</button>
			<button type="button" class="btn btn-outline-info">5</button>
		</div>
	</div>

	<button
		type="button"
		id="btnToggle"
		data-toggle="button"
		aria-pressed="false"
		class="btn btn-outline-primary">
		Переключатель
	</button>
	<button type="button" class="btn btn-info" id="btnTest">
		Проверить состояние переключателя
	</button>
	<button type="button" class="btn btn-info" id="btnChange">
		Переключить состояние
	</button>
</div>
