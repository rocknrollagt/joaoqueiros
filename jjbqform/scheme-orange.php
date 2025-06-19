<!DOCTYPE html> 
<html>
	<head>
		<title>João Queirós - Formulário - Design Logo</title>
		
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
									<p style="color: green;">Thank you! I will initiate the creative process of your brand! Until now!</p>
<? 
								}
								else
								{
?>
       
		  <!-- Orange color scheme -->
			<form id="form_588606" class="sky-form" action="send_form_email.php" method="post"/>
		    <img src="logo_jq.png" width="600">            
            
            
            <header><font color="#FFFFFF">Client data</font></br>
            <font size="-1" color="#FFFFFF">Required fields</font>
            </header>

<fieldset>
	<section>
	  <label class="label">Full Name</label>
	  <span id="sprytextfield3">
						<label class="input">
						  <input type="text" name="nomecompleto"/>
					    </label>
						<span class="textfieldRequiredMsg">Escreva o seu Nome completo.</span></span></section>
                    
    <section>
	  <label class="label">E-mail</label>
						<span id="sprytextfield4">
                        <label class="input">
                          <input type="text" name="email"/>
                        </label>
                        <span class="textfieldRequiredMsg">Write your e-mail.</span><span class="textfieldInvalidFormatMsg">Invalid Format.</span></span></section>
                    
                   
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
                    
                    
                   <!-- <section>
						<label class="label">Telefone:</label>
						<label class="input">
							<input type="text" name="telefone"/>
						</label>
					</section>-->
                    
                    
                  <!--  <section>
						<label class="label">Observações (campo não obrigatório)</label>
						<label class="textarea">
						  <textarea rows="3" name="observacoes"></textarea>
						</label>
						<!--<div class="note"><strong>Ex:</strong> raparigas dos 25 - 35, que gostam de.. </div>-->
					</section>
                    
                    
          </fieldset>


		  <header><font color="#FFFFFF"> Brief Logo</font>
                </br>
            <font size="-1" color="#FFFFFF">Campos de preenchimento obrigatório</font>
          </header>
				
				<fieldset>
					<section>
						<label class="label">Company Name</label>
					  <span id="sprytextfield1">
						<label class="input">
						  <input type="text" name="nome"/>
					    </label>
					  <span class="textfieldRequiredMsg">Write your company name.</span></span></section>
                    
                    <section>
						<label class="label">Slogan:</label>
					  <span id="sprytextfield2">
						<label class="input">
						  <input type="text" name="slogan"/>
					    </label>
						<span class="textfieldRequiredMsg">Write your slogan.</span></span></section>
                    
                    <section>
						<label class="label">What We Do:</label>
						<span id="sprytextarea1">
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="oqfazemos"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write what your company do.</span></span>
					<!--	<div class="note"><strong>Example:</strong> We train dogs for mili</div>-->
					</section>
                    
                    <section>
						<label class="label">Our Industry:</label>
						<span id="sprytextarea2">
						<label class="textarea textarea-expandable">
						  <textarea rows="3" name="areanegocios"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write your industry.</span></span>
						<!--<div class="note"><strong>Ex:</strong> Marketing. Vendas. Design.</div>-->
					</section>
                    
                    <section>
						<label class="label">Top Three Things to Communicate through our Logo:
</label>
						<span id="sprytextarea3">
						<label class="textarea textarea-expandable">
						  <textarea rows="3" name="items"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write your top 3 things.</span></span>
						<!--<div class="note"><strong>Exemplo:</strong> 1. Experiência e dedicação | 2. Simple, mensagem direta, fácil, classico | 3. Seguro e Confiável</div>-->
					</section>
                    
                    
                    <section>
						<label class="label">Our Target Audience: </label>
						<span id="sprytextarea4">
						<label class="textarea">
						  <textarea rows="3" name="publicoalvo"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write your target Audience.</span></span>
						<!--<div class="note"><strong>Ex:</strong> raparigas dos 25 - 35, que gostam de.. </div>-->
					</section>
                    
                    
          </fieldset>
                    
                    
                    <fieldset>
					<section>
                    <div class="row">
                    
						

					  <section class="col col-5">				
						<label class="label">Styles that we are interested in:
:</label>
                        
                        
                        <table width="500" border="0" cellpadding="3" cellspacing="3">
  <tr>
    <td width="402" bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/wordmark.gif" width="336" height="40"></span></td>
    <td width="82" bgcolor="#FFFFFF">
						<label class="toggle">
						  <input type="checkbox" name="wordmark" checked="" />
      <i></i>Wordmark</br></br>
      
              </label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/letterform.gif" width="336" height="40"></span></td>
    
   
    
    <td bgcolor="#FFFFFF"> <label class="toggle">
						  <input type="checkbox" name="letterform" checked="" />
      <i></i>Letterform Mark</br></br></label></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/abstract.gif" width="336" height="40"></span></td>
    <td bgcolor="#FFFFFF">
    <label class="toggle">
						  <input type="checkbox" name="abstracto" checked="" />
      <i></i>Abstract Mark</br></br></label>
      
      </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/pictoral.gif" width="336" height="40"></span></td>
    <td bgcolor="#FFFFFF">
    
    <label class="toggle">
						  <input type="checkbox" name="figurativo" checked="" />
      <i></i>Pictorial Mark</br></br></label>
    
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/emblem.gif" width="336" height="40"></span></td>
    <td bgcolor="#FFFFFF">
    
    <label class="toggle">
						  <input type="checkbox" name="emblemas" checked="" />
      <i></i>Emblem</br></br></label>
    
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/character.gif" width="336" height="40"></span></td>
    <td bgcolor="#FFFFFF">
    
    <label class="toggle"><input type="checkbox" name="mascote" />
                <i></i>Character</br></br></label>
    
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><span class="col col-5"><img src="tipos_logos/web2.gif" width="336" height="40"></span></td>
    <td bgcolor="#FFFFFF">
    
    <label class="toggle"><input type="checkbox" name="web2" />
			    <i></i>Web 2.0</br></br></label>
    
    </td>
  </tr>
</table>
						
						
						
						
						
					  </section>
					</div>
                    
                    </section>
                    
                    
                    
                    
                     <section>
						<label class="label">
Color Preferences:
</label>
						<span id="sprytextarea5">
						<label class="textarea textarea-expandable">
						  <textarea rows="3" name="cor"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write your color preferences.</span></span>
						<!--<div class="note"><strong>Example:</strong> Gosto de Preto, Dourado, Vermelho | Não gosto de Amarelo, Roxo, Cores florescentes, néons...</div>-->
					</section>
                    
                    
          </fieldset>
					
                    
                    
                    
                    
                    
                    
                    
                     <fieldset>
				<!--	<section>
						<label class="label">Compile os seus ficheiro num *.rar ou *.zip e anexe as suas ideias</label>
						<label for="file" class="input input-file">
							<div class="button"><input type="file" id="file" onchange="this.parentNode.nextSibling.value = this.value" / name="ficheiro">Procurar</div><input type="text" readonly />
						</label>
					</section>-->
  
                    </fieldset>
                    
                    <fieldset>
                    
                      <section>
						<label class="label">Our Ideas and Additional Information:</label>
						<span id="sprytextarea6">
						<label class="textarea textarea-resizable">
						  <textarea rows="3" name="ideias"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write your ideias.</span></span>
					<!--	<div class="note"><strong>Ex:</strong> Ando a procura de algo icónico que as pessoas possam reconhecer sem o texto. Tradicional. Que identifique a nossa cidade. Que transpareça seriedade respeito, feito para um público chique.</div>-->
                        
					</section>
                    
                    
                       <section>
						<label class="label">Where we will use the Logo:</label>
						<span id="sprytextarea7">
						<label class="textarea textarea-expandable">
						  <textarea rows="3" name="ondeeusado"></textarea>
					    </label>
						<span class="textareaRequiredMsg">Write where your logo will be used.</span></span>
						<!--<div class="note"><strong>Exemplo:</strong> Impressão, Tshirts, Canecas, Televisão, Sinalética, Veículos... </div>-->
					</section>
                    </fieldset>
                    				
						
				
				
		  <fieldset>
            <label class="label">Logo Styles:</label>
<table width="415" border="0" cellpadding="11" cellspacing="11">
  <tr>
    <td width="101">&nbsp;</td>
    <td width="13" bgcolor="#FFFFFF" align="center">1</td>
    <td width="13" bgcolor="#FFFFFF" align="center">2</td>
    <td width="14" bgcolor="#FFFFFF" align="center">3</td>
    <td width="13" bgcolor="#FFFFFF" align="center">4</td>
    <td width="13" bgcolor="#FFFFFF" align="center">5</td>
    <td width="112">&nbsp;</td>
    <td width="102">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><font>Feminine</font></td>
    <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Masculine</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="1">
							    <option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Modern</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Classic</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="2">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Exotic</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Commonplace</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="3">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Sporty</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Elegante</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="4">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Aventure</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Secure</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="5">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Quiet</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Loud</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="6">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Subtle</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Bright</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="7">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Gray</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Colorful</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="8">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Subtle</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Bright</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="9">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Raw</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Refined</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="10">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Playful</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Serious</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="11">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
  <tr>
    <td align="center">Necessity</td>
     <td bgcolor="#EC8A00">&nbsp;</td>
    <td bgcolor="#ED7D09">&nbsp;</td>
    <td bgcolor="#EE7012">&nbsp;</td>
    <td bgcolor="#EF631A">&nbsp;</td>
    <td bgcolor="#F05623">&nbsp;</td>
    <td align="center">Luxury</td>
    <td><section>
						<label class="label">Select</label>
						<label class="select">
							<select name="12">
								<option value="1" />1
								<option value="2" />2
								<option value="3" />3
								<option value="4" />4
								<option value="5" />5
							</select>
							<i></i>
						</label>
		</section></td>
  </tr>
</table>


            <!-- 
					<section>
						<label class="label">Select</label>
						<label class="select">
							<select>
								<option value="0" />1
								<option value="1" />2
								<option value="2" />3
								<option value="3" />4
								<option value="4" />5
							</select>
							<i></i>
						</label>
					</section>
					
					<section>
						<label class="label">Multiple select</label>
						<label class="select select-multiple">
							<select multiple="">
								<option value="1" />Alexandra
								<option value="2" />Alice
								<option value="3" />Anastasia
								<option value="4" />Avelina
								<option value="5" />Basilia
								<option value="6" />Beatrice
								<option value="7" />Cassandra
								<option value="8" />Clemencia
								<option value="9" />Desiderata
							</select>
						</label>
						<div class="note"><strong>Note:</strong> hold down the ctrl/cmd button to select multiple options.</div>
					</section>-->
			</fieldset>
				<!--
				<fieldset>					
					<section>
						<label class="label">Textarea</label>
						<label class="textarea">
							<textarea rows="3"></textarea>
						</label>
						<div class="note"><strong>Note:</strong> height of the textarea depends on the rows attribute.</div>
					</section>
					
					<section>
						<label class="label">Textarea resizable</label>
						<label class="textarea textarea-resizable">
							<textarea rows="3"></textarea>
						</label>
					</section>
					
					<section>
						<label class="label">Textarea expandable</label>
						<label class="textarea textarea-expandable">
							<textarea rows="3"></textarea>
						</label>
						<div class="note"><strong>Note:</strong> expands on focus.</div>
					</section>
				</fieldset>
				
				<fieldset>
					<section>
						<label class="label">Columned radios</label>
						<div class="row">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked="" /><i></i>Alexandra</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Alice</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Anastasia</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" /><i></i>Avelina</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Basilia</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Beatrice</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" /><i></i>Cassandra</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Clemencia</label>
								<label class="radio"><input type="radio" name="radio" /><i></i>Desiderata</label>
							</div>
						</div>						
					</section>
					
					<section>
						<label class="label">Inline radios</label>
						<div class="inline-group">
							<label class="radio"><input type="radio" name="radio-inline" checked="" /><i></i>Alexandra</label>
							<label class="radio"><input type="radio" name="radio-inline" /><i></i>Alice</label>
							<label class="radio"><input type="radio" name="radio-inline" /><i></i>Anastasia</label>
							<label class="radio"><input type="radio" name="radio-inline" /><i></i>Avelina</label>
							<label class="radio"><input type="radio" name="radio-inline" /><i></i>Beatrice</label>
						</div>
					</section>
				</fieldset>
				
				<fieldset>
					<section>
						<label class="label">Columned checkboxes</label>
						<div class="row">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked="" /><i></i>Alexandra</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Alice</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Anastasia</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Avelina</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Basilia</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Beatrice</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Cassandra</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Clemencia</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" /><i></i>Desiderata</label>
							</div>
						</div>
					</section>
					
					<section>
						<label class="label">Inline checkboxes</label>
						<div class="inline-group">
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" checked="" /><i></i>Alexandra</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" /><i></i>Alice</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" /><i></i>Anastasia</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" /><i></i>Avelina</label>
							<label class="checkbox"><input type="checkbox" name="checkbox-inline" /><i></i>Beatrice</label>
						</div>
					</section>
				</fieldset>
				
				<fieldset>
					<div class="row">
						<section class="col col-5">
							<label class="label">Toggles based on radios</label>
							<label class="toggle"><input type="radio" name="radio-toggle" checked="" /><i></i>Alexandra</label>
							<label class="toggle"><input type="radio" name="radio-toggle" /><i></i>Anastasia</label>
							<label class="toggle"><input type="radio" name="radio-toggle" /><i></i>Avelina</label>
						</section>
						
						<div class="col col-2"></div>
						
						<section class="col col-5">				
							<label class="label">Toggles based on checkboxes</label>
							<label class="toggle"><input type="checkbox" name="checkbox-toggle" checked="" /><i></i>Cassandra</label>
							<label class="toggle"><input type="checkbox" name="checkbox-toggle" /><i></i>Clemencia</label>
							<label class="toggle"><input type="checkbox" name="checkbox-toggle" /><i></i>Desiderata</label>	
						</section>
					</div>
				</fieldset>
				
				<fieldset>					
					<section>
						<label class="label">Ratings with different icons</label>
						<div class="rating">
							<input type="radio" name="stars-rating" id="stars-rating-5" />
							<label for="stars-rating-5"><i class="icon-star"></i></label>
							<input type="radio" name="stars-rating" id="stars-rating-4" />
							<label for="stars-rating-4"><i class="icon-star"></i></label>
							<input type="radio" name="stars-rating" id="stars-rating-3" />
							<label for="stars-rating-3"><i class="icon-star"></i></label>
							<input type="radio" name="stars-rating" id="stars-rating-2" />
							<label for="stars-rating-2"><i class="icon-star"></i></label>
							<input type="radio" name="stars-rating" id="stars-rating-1" />
							<label for="stars-rating-1"><i class="icon-star"></i></label>
							Stars
						</div>
						
						<div class="rating">
							<input type="radio" name="trophies-rating" id="trophies-rating-7" />
							<label for="trophies-rating-7"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-6" />
							<label for="trophies-rating-6"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-5" />
							<label for="trophies-rating-5"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-4" />
							<label for="trophies-rating-4"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-3" />
							<label for="trophies-rating-3"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-2" />
							<label for="trophies-rating-2"><i class="icon-trophy"></i></label>
							<input type="radio" name="trophies-rating" id="trophies-rating-1" />
							<label for="trophies-rating-1"><i class="icon-trophy"></i></label>
							Trophies
						</div>	
						
						<div class="rating">
							<input type="radio" name="asterisks-rating" id="asterisks-rating-10" />
							<label for="asterisks-rating-10"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-9" />
							<label for="asterisks-rating-9"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-8" />
							<label for="asterisks-rating-8"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-7" />
							<label for="asterisks-rating-7"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-6" />
							<label for="asterisks-rating-6"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-5" />
							<label for="asterisks-rating-5"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-4" />
							<label for="asterisks-rating-4"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-3" />
							<label for="asterisks-rating-3"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-2" />
							<label for="asterisks-rating-2"><i class="icon-asterisk"></i></label>
							<input type="radio" name="asterisks-rating" id="asterisks-rating-1" />
							<label for="asterisks-rating-1"><i class="icon-asterisk"></i></label>
							Asterisks
						</div>
						<div class="note"><strong>Note:</strong> you can use more than 300 vector icons for rating.</div>
					</section>
				</fieldset>
				-->
                <header><font size="-1" color="#FFFFFF">note: complete all required information in order to send the form.</font></header>
		  <footer>
					<button type="submit" class="button">Send</button>
					<button type="button" class="button button-secondary" onclick="window.history.back();">Clean</button>
		  </footer>
			</form>
            
            
            <br/>            
            
                       <table width="500" border="0" align="center">
  <tr>
    <td align="center"> <font size="-1" color="#666666"> João Queirós 2014</font></td>
     <td align="center"> <a href="http://www.joaoqueiros.com" style="text-decoration:none"><font size="-1" color="#666666">www.joaoqueiros.com</font></a></td>
         <!-- <td align="center"> <a href="https://www.facebook.com/borangemarketing" target="_blank" style="text-decoration:none"><font size="-1" color="#666666">facebook</font></a></td> -->
  </tr>
</table>
            
             <? } ?>
             
  

		  <!--/ Orange color scheme -->			
		</div>
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5");
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6");
var sprytextarea7 = new Spry.Widget.ValidationTextarea("sprytextarea7");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email");
    </script>
	</body>
</html>