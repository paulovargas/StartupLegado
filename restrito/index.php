<?php
	include('config.php');
	if($_SESSION['logado']==0)
	  header('location: ../');
?>
<!DOCTYPE html>
<html lang = 'pt'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistema de Gerenciamento de Rebanhos</title>

<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />

<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

 
<!--  checkbox styling script -->

<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>


<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  


<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>

<script src="js/jquery/jquery-2.1.1.min.js" type="text/javascript" ></script>
<script src="js/jquery/meuCodigo.js" type="text/javascript" ></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>


<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script -->
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->

<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->

<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/jquery-2.1.1.min.js" type="text/javascript" ></script>
<script src="js/jquery/meuCodigo.js" type="text/javascript" ></script>
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<?php
						if($_SESSION['logado']==1)
						{
							$sql = "SELECT * FROM cliente where id = {$_SESSION['usuario']['cliente_id']}";
							
							$result = mysqli_query($conecta, $sql); 

							
							
							while($consulta = mysqli_fetch_array($result)){ 
								
							$cliente = $consulta['nome_cliente'];
								
							}mysqli_free_result($result);
							
							
							
							echo "<h1 style= color:#FFF;>Seja Bem-vindo(a) {$_SESSION['usuario']['nome']} ! Você está logado pelo cliente : $cliente</h1>";
						}
						else
							header("location: ../");
					?>
	
	</div>
	<!-- end logo <a href=""><img src="images/shared/logo1.png" width="156" height="40" alt="" /></a>-->
	
	<!--  start top-search --
	<div id="top-search">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><input type="text" value="Digite o brinco" onblur="if (this.value=='') { this.value='Brinco'; }" onfocus="if (this.value=='Buscar') { this.value=''; }" class="top-search-inp" /></td>
		<td> 
		 
		</td>
		<td>
		<input type="image" src="images/shared/top_search_btn.gif"  />
		</td>
		</tr>
		</table>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="index.php?pagina=addeditacontaU" id="acc-details">Perfil </a>
				<div class="clear">&nbsp;</div>
				<!-- <div class="acc-line">&nbsp;</div>
				<a href="" id="acc-project">Project details</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-inbox">Inbox</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="" id="acc-stats">Statistics</a>  -->
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		
			
			<?php
			
				$vid = $_SESSION['usuario']['cliente_id'];
				
				
				echo "<ul class='select'><li><a href='index.php?pagina=relatorioGeral''><b>Inicio</b></a>";
				
				echo "<div class='select_sub'>";
				echo "<ul class='sub'>";
				echo "<li><a href='index.php?pagina=agendaevento&id=$vid'>Agendar Evento</a></li>";
				echo "<li><a href='index.php?pagina=agendaeventoindividual&id=$vid'>Agendar Evento Individual</a></li>";
				echo "<li><a href='index.php?pagina=vereventos&id=$vid'>Ver todos os Eventos</a></li>";
				
				echo "</ul>";
				echo "</div>";			
		
				echo "</li>";
				echo "</ul>";
				
				echo "<div class='nav-divider'>&nbsp;</div>";
									
				echo "<ul class='select'><li><a href='index.php?pagina=verAnimais'><b>Animais</b></a>";
				
				echo "<div class='select_sub'>";
					echo "<ul class='sub'>";						
						echo "<li><a href='index.php?pagina=addanimal&id=$vid'>Adicionar Animal</a></li>";
						echo "<li><a href='index.php?pagina=buscarBrinco'>Buscar por brinco</a></li>";
						echo "<li><a href='index.php?pagina=verAnimais&id=$vid'>Ver todos os Animais</a></li>";
					echo "</ul>";
				echo "</div>";
				
				echo "</li>";
				echo "</ul>";
				
				echo "<div class='nav-divider'>&nbsp;</div>";
									
				echo "<ul class='select'><li><a href='index.php?pagina=verRebanhos'><b>Grupos</b></a>";
				
				echo "<div class='select_sub'>";
					echo "<ul class='sub'>";						
						echo "<li><a href='index.php?pagina=addrebanho'>Adicionar Grupo</a></li>";
						echo "<li><a href='index.php?pagina=verRebanhos'>Ver todos os Grupos</a></li>";
					echo "</ul>";
				echo "</div>";
				
				
				
				echo "</li>";
				echo "</ul>";
				
				echo "<div class='nav-divider'>&nbsp;</div>";
									
				echo "<ul class='select'><li><a href='index.php?pagina=verPropriedades'><b>Propriedades</b></a>";
				
				echo "<div class='select_sub'>";
					echo "<ul class='sub'>";						
						echo "<li><a href='index.php?pagina=addpropriedade'>Adicionar Propriedade</a></li>";
						echo "<li><a href='index.php?pagina=verPropriedades'>Ver todas as Propriedades</a></li>";
					echo "</ul>";
				echo "</div>";
				
				
				
				echo "</li>";
				echo "</ul>";
		
		?>
			
		<div class="clear"></div>
		</div>
		
		<div class="clear"></div>
		</div>
<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->
<?php
				// testar o parâmetro vindo do GET e incluir o arquivo referente a área
				if(file_exists("inc_{$_GET['pagina']}.php"))
					include("inc_{$_GET['pagina']}.php");
				else
					include('index.php?pagina=relatorioGeral.php');
?>
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	&copy; Copyright Legend Tecnologies Ltda. <a href="">www.legendtecnologies.com.br</a>. Todos os direitos reservados.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>

</html>		