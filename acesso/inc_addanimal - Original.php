<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

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

<div id="content">


<div id="page-heading"><h1>Adicionar Animal</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder 
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Adicionar Detalhes</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Local onde está lotado</div>
			<div class="step-light-right">&nbsp;</div>
			<div class="step-no-off">3</div>
			<div class="step-light-left">Ver</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
		<th valign="top">Espécie:</th>
		<td>	
		<select  class="styledselect_form_1">
			
			<option value="">Bovino</option>
			<option value="">Ovino</option>
			<option value="">Equino</option>
			<option value="">Suíno</option>
			<option value="">Caprino</option>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<tr>
		<th valign="top">Raça:</th>
		<td>	
		<select  class="styledselect_form_1">
			<option value="">Outros</option>
			<option value="">Hereford</option>
			<option value="">Brangus</option>
			<option value="">Nelore</option>
			<option value="">Guzerá</option>
			<option value="">Gir</option>
			<option value="">Cangaian</option>
			<option value="">Brahman</option>
			<option value="">Tabapuã</option>
			<option value="">Sindi</option>
			<option value="">Indubrasil</option>
			<option value="">Angus</option>
			<option value="">Caracu</option>
			<option value="">Charolês</option>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<tr>
		<th valign="top">Categoria:</th>
		<td>	
		<select  class="styledselect_form_1">
			<option value="">Todas</option>
			<option value="">Matriz</option>
			<option value="">Serviço</option>
			<option value="">Abate</option>
			<option value="">Outros</option>
		</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top">Pelagem:</th>
		<td>	
		<select  class="styledselect_form_1">
			<option value="">Colorado</option>
			<option value="">Preto</option>
			<option value="">Branco</option>
			<option value=""></option>
			<option value=""></option>
		</select>
		</td>
		<td></td>
		</tr> 
		<tr>
			<th valign="top">Brinco:</th>
			<td><input type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Data de nascimento:</th>
		<td class="noheight">
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">
				<td>
				<form id="chooseDateForm" action="#">
				
				<select id="d" class="styledselect-day">
					<option value="">Dia</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</td>
				<td>
					<select id="m" class="styledselect-month">
						<option value="">Mês</option>
						<option value="1">Janeiro</option>
						<option value="2">Fevereiro</option>
						<option value="3">Março</option>
						<option value="4">Abril</option>
						<option value="5">Maio</option>
						<option value="6">Junho</option>
						<option value="7">Julho</option>
						<option value="8">Agosto</option>
						<option value="9">Setembro</option>
						<option value="10">Outubro</option>
						<option value="11">Novembro</option>
						<option value="12">Dezembro</option>
					</select>
				</td>
				<td>
					<select  id="y"  class="styledselect-year">
						<option value="">Ano</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
					</select>
					</form>
				</td>
				<td><a href=""  id="date-pick"><img src="images/forms/icon_calendar.jpg"   alt="" /></a></td>
			</tr>
			</table>
		
		</td>
		<td></td>
	</tr>
	<tr>
		<!--<th valign="top">Descrição:</th>
		<td><textarea rows="" cols="" class="form-textarea"></textarea></td>
		<td></td> -->
	</tr>
	<tr>
	<th>Imagem Frontal:</th>
	<td><input type="file" class="file_1" /></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max por imagem</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr>
	<th>Imagem Lateral Direita:</th>
	<td>  <input type="file" class="file_1" /></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max por imagem</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr>
	<th>Imagem Lateral Esquerda:</th>
	<td><input type="file" class="file_1" /></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max por imagem</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="button" value="" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>
 
</body>
</html>