<?php 
echo 'Usuarios|@|';

$users = db_select('id,user,groups,options,admin', 'users', '1');

foreach($users as $user){
	$usuarios .=  '<tr>';
	$usuarios .=  '<th>'.$user['id'].'</th>';
	$usuarios .=  '<td>'.$user['user'].'</td>';
	$usuarios .=  '<td>· · · · · ·<a href=""><span class="icon gray" data-icon="7" style="display: inline-block; "><span aria-hidden="true">7</span></span></a></td>';
	$usuarios .=  '<td>'.$user['groups'].'</td>';
	$usuarios .=  '<td>'.$user['options'].'</td>';
	if($user['admin']){ $usuarios .=  '<td>Si</td>'; }else{ $usuarios .=  '<td>No</td>';};
	$usuarios .=  '</tr>';
}

$groups = db_select('*', 'users_groups','');

foreach($groups as $group){
	$grupos .= '<option value="'.$group['id'].'">'.$group['grupo'].'</option>';
}
		

$fp = fopen(MOD.'users/users.vw',"r");		//Abrimos el archivo en modo lectura
while ($linea = fgets($fp,1024))					//Leemos linea por linea el contenido del archivo y reemplazamos la palabras claves
{
	$linea = str_replace('<at:users />',	$usuarios, $linea);
	$linea = str_replace('<at:groups />',	$grupos, $linea);
				
	echo $linea;
}
?>