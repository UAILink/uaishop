<div class="container">

	<div class="row-fluid">
		<div class="span3" style="padding-top: 10px;">
			<h4>Pesquisa</h4>
			
			<form class="form-search">
				  <input type="text" class="input-medium search-query span10" placeholder="Buscar Produto">
				  <a href="#" class="btn"><i class="icon-search"></i></a>
				</form>
			
		    <div class="box">
		    	<fieldset>
		    		<legend>Preço</legend>
		    		<ul>
		    		<li><a href="#">até R$ 800,00</a></li>
		    		<li><a href="#">de R$ 800,00 até R$ 1.500,00</a></li>
		    		<li><a href="#">de R$ 800,00 até R$ 1.500,00</a></li>
		    		<li><a href="#">de R$ 1.500,00 até R$ 2.500,00</a></li>
		    		<li><a href="#">de R$ 2.500,00 até R$ 3.500,00</a></li>
		    		</ul>		    	
		    	</fieldset>
			</div>	
			
			<div class="box">
		    	<fieldset>
		    		<legend>Tipo</legend>
		    		<label class="checkbox"><input type="checkbox" >Cano Longo</label>
		    		<label class="checkbox"><input type="checkbox" >Splinter</label>
		    		<label class="checkbox"><input type="checkbox" >Controle Remoto</label>
		    		<label class="checkbox"><input type="checkbox" >Bateria</label>
		    		<label class="checkbox"><input type="checkbox" >Portátil</label>		    	
		    	</fieldset>
			</div>	
			
			<div class="box">
		    	<fieldset>
		    		<legend>Marca</legend>
		    		<label class="checkbox"><input type="checkbox" >Arno</label>
		    		<label class="checkbox"><input type="checkbox" >Consul</label>
		    		<label class="checkbox"><input type="checkbox" >Eletrolux</label>
		    		<label class="checkbox"><input type="checkbox" >MegaWare</label>
		    		<label class="checkbox"><input type="checkbox" >CCE</label>		    	
		    	</fieldset>
			</div>	
			
			<div class="box">
		    	<fieldset>
		    		<legend>Características</legend>
		    		<ul>
		    		<li><a href="#" >2 Portas</a></li>
		    		<li><a href="#" >Silencioso</a></li>
		    		<li><a href="#" >Siga-me</a></li>
		    		<li><a href="#" >Memorização</a></li>
		    		<li><a href="#" >Sleep / Timer</a></li>
		    		</ul>	    	
		    	</fieldset>
			</div>	
			
		</div>
		<div class="span9">
			<?php echo $this->element('itemsPesquisa')?>
		</div>
	</div>

</div>