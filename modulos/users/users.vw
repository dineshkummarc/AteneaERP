<form id="add_user">
	<fieldset>
		<legend>Añadir Usuario:</legend>
		<input type="text" name="user" id="user" placeholder="Usuario" />
		<input type="password" name="pass" id="pass" placeholder="Contraseña" />
		<select id="grupos" multiple="multiple" class="fancy" style="width:200px;"><at:groups /></select>
		<input type="text" name="options" id="options" placeholder="Opciones" />
		<select id="admin" class="fancy" style="width:75px;">
			<option value="1">Si</option>
			<option velue"0" selected="selected">No</option>
		</select>
		<button type="button" class="small pop blue">Añadir</button>
	</fieldset>
</form>

<table class="sortable striped">
<thead>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>Contraseña</th>
		<th>Grupos</th>
		<th>Opciones</th>
		<th>Administrador</th>
	</tr>
</thead>
<tbody>
	<at:users />
</tbody>
</table>