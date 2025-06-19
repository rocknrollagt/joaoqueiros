<!DOCTYPE html> 
<html>
	<head>
		<title>B.Orange - Formulário - Design Logo</title>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		
		<link rel="stylesheet" href="css/demo.css" />
		<link rel="stylesheet" href="css/sky-forms.css" />
		<link rel="stylesheet" href="css/sky-forms-orange.css" />
		<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
		<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<!--[if lt IE 10]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="body">			
		
        
       
        <?
								if( $_GET["sucesso"] == "email")
								{ 
?>
									<p style="color: green;">Obrigada! A equipa B.Orange vai dar inicio ao processo criativo da sua marca! Até já!</p>
<? 
								}
								else
								{
?>
       
		  <!-- Orange color scheme -->
			<form id="form_588606" class="sky-form" action="send_form_email_diag.php" method="post"/>
		    <img src="logo_borange.png" width="600">            
            
            
            <header><font color="#FFFFFF">Dados Cliente</font></br>
            <font size="-1" color="#FFFFFF">Campos de preenchimento obrigatório</font>
            </header>

<fieldset>
	<section>
	  <label class="label">Nome Completo:</label>
	  <span id="sprytextfield3">
						<label class="input">
						  <input type="text" name="nomecompleto"/>
					    </label>
						<span class="textfieldRequiredMsg">Escreva o seu Nome completo.</span></span></section>
                    
    <section>
	  <label class="label">E-mail:</label>
						<span id="sprytextfield4">
                        <label class="input">
                          <input type="text" name="email"/>
                        </label>
                        <span class="textfieldRequiredMsg">Escreva o seu e-mail.</span><span class="textfieldInvalidFormatMsg">Formato inválido.</span></span></section>
                    
                   
                 <!--   <section>
						<label class="label">Idade</label>
						<label class="input">
						  <input type="text" name="idade"/>
						</label>
					</section>--
                    
                    <!--
                    <section>
						<label class="label">Sexo</label>
						<label class="select">
							<select name="sexo">
							  <option value="Masculino" />Masculino
								<option value="Feminino" />Feminino
								
							</select>
							<i></i>
						</label>
		            </section>-->
                    
                    
                    <section>
						<label class="label">Telefone:</label>
						<label class="input">
							<input type="text" name="telefone"/>
						</label>
					</section>
                    
                    
                    <section>
						<label class="label">Observações (campo não obrigatório)</label>
						<label class="textarea">
						  <textarea rows="3" name="observacoes"></textarea>
						</label>
						<!--<div class="note"><strong>Ex:</strong> raparigas dos 25 - 35, que gostam de.. </div>-->
					</section>
                    
                    
          </fieldset>


		  <header><font color="#FFFFFF"> Diagonóstico inicial da empresa</font>
                </br>
            <font size="-1" color="#FFFFFF">Campos de preenchimento obrigatório</font>
          </header>
				
				<fieldset>
					<section>
						<label class="label">Nome Empresa</label>
					 
						<label class="input">
						  <input type="text" name="nome"/>
					    </label>
					 </section> 
                    
                    <section>
						<label class="label">Slogan da Empresa</label>
					  
						<label class="input">
						  <input type="text" name="slogan"/>
					    </label>
						
                    </section>
                    
                    
                     <section>
						<label class="label">Breve Descrição da Empresa:</label>
						
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						
					</section>
                    
                    
                     <section>
						<label class="label">Posicionamento:</label>
						
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						
					</section>
                    
                    
                     <section>
						<label class="label">Públicos - alvo:</label>
						
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						
					</section>
                    
                    
                    <section>
						<label class="label">Objectivos:</label>
						
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						
					</section>
                    
                    
                    <section>
						<label class="label">Estratégia Diferenciação:</label>
						
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						
					</section>
                    
                    
                    
                    
                    
                    <section>
                    
                 </fieldset>
				
                <header><font size="-1" color="#FFFFFF">nota: preencha todos os dados obrigatórios para poder enviar o formulário.</font></header>
		  <footer>
					<button type="submit" class="button">Enviar</button>
					<button type="button" class="button button-secondary" onclick="window.history.back();">Limpar</button>
		  </footer>
			</form>
            
            
            <br/>            
            
                       <table width="500" border="0" align="center">
  <tr>
    <td align="center"> <font size="-1" color="#666666">TODOS OS DIREITOS RESERVADOS . B.ORANGE</font></td>
     <td align="center"> <a href="http://borange.pt/" style="text-decoration:none"><font size="-1" color="#666666">www.borange.pt</font></a></td>
          <td align="center"> <a href="https://www.facebook.com/borangemarketing" target="_blank" style="text-decoration:none"><font size="-1" color="#666666">facebook</font></a></td>
  </tr>
</table>
            
             <? } ?>
             
  

		  <!--/ Orange color scheme -->			
		</div>
    <script type="text/javascript">

var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
    </script>
	</body>
</html>