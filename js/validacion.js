function Validar(){
	var id = document.getElementById('id').value;
	var nombre = document.getElementById('nombre').value;
	var linea = document.getElementById('linea').value;
	var asesor = document.getElementById('asesor').value;
	var aut1 = document.getElementById('aut1').value;
	var aut2 = document.getElementById('aut2').value;
	var aut3 = document.getElementById('aut3').value;
	var nota = document.getElementById('nota').value;

	if(id==""){
		$('#alert').html('Debes ingresar identificador del proyecto').slideDown(500);
			$('#id').focus();
			return false;
	}else{
		$('#alert').html('').slideUp(300);
	}
	if(nombre==""){
		$('#alert').html('Debes ingresar un nombre al proyecto').slideDown(500);
			$('#nombre').focus();
			return false;
	}else{
		$('#alert').html('').slideUp(300);
	}
	if(linea==""){
		$('#alert').html('Debes ingresar la linea de investigacion').slideDown(500);
		$('#linea').focus();
		return false;
	}else{
		$('#alert').html('').slideUp(300);
	}
	if(asesor==""){
		$('#alert').html('Debes ingresar el nombre del asesor').slideDown(500);
		$('#asesor').focus();
		return false;
	}else{
		$('#alert').html('').slideUp(300);
	}
	if(aut1==""&&aut2==""&&aut3==""){
		$('#alert').html('Debes ingresar al menos un integrante').slideDown(500);
		$('#aut1').focus();
		return false;
	}
	else{
		$('#alert').html('').slideUp(300);
	}
	if(nota==""){
		$('#alert').html('Debes ingresar la nota recivida').slideDown(500);
		$('#nota').focus();
		return false;
	}else{
		$('#alert').html('').slideUp(300);
	}
}
function limpiar(){
	document.getElementById('alert').style.display="none";
	document.getElementById('alert2').style.display="none";
}