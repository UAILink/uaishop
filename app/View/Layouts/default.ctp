<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
 
 $cakeDescription = __d('cake_dev', "UAIShop : Compre aqui ");

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');	
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('site');		
		echo $this->Html->css('flexslider');
						
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		
	?>
	
	<style type="text/css">
      body {
        padding-top: 41px;
        
      }
    </style>

	<!-- Mobile viewport optimisation -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- (en) Add your meta data here -->
	<!-- (de) Fuegen Sie hier ihre Meta-Daten ein -->
	
	
</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">UAIShop</a>
          <div class="nav-collapse collapse">            
              <?php echo $this->element('menu');?>            
            <form class="navbar-search pull-right">
              <input class="search-query" type="text" placeholder="Digite o produto">              
              <button type="submit" class="btn">Pesquisar</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div>		
    <?php echo $this->Session->flash(); ?>
</div>
<div id="main" class="container" style="">		
    <?php echo $this->fetch('content'); ?>
</div>
    

<footer style="background-color: black; height: 20em; padding-top: 20px;">
	<div class="container">
    	<div class="row">
    		<div class="span3">
    			<h4>Institucional</h4>
    			<ul>
    				<li>UaiShop</li>
    				<li>Quem Somos?</li>
    				<li>Contato</li>
    				<li>Sua Conta</li>
    				<li>Produtos</li>
    				<li>Setores</li>
    			</ul>
    		</div>
    		<div class="span3">
    			<h4>Entre em Contato</h4>
    			<ul>
    				<li>Ligue: 0800 889955</li>
    				<li>Sac: 0800 123456</li>
    				<li>contato@uaishop.com.br</li>    				
    			</ul>
    		</div>
    		<div class="span3">
    			<h4>Setores</h4>
    			<ul>
    				<li>informatica</li>
    				<li>Eletrônicos</li>
    				<li>Casa</li>
    				<li>Jardim</li>
    				<li>Construção</li>
    				<li>Brinquedos</li>
    			</ul>
    		</div>
    		<div class="span3">
    			<h4>Destaques</h4>
    			<ul>
    				<li>Redes Sociais</li>
    				<li>Política de Privacidade</li>
    				<li>Fale Conosco</li>
    				
    			</ul>
    		</div>
    	</div>
	</div>
</footer>

<?php
        echo $this->Html->script('jquery-1.8.1.min');
		echo $this->Html->script('jquery.form');
		echo $this->Html->script('jquery.flexslider-min');
		echo $this->Html->script('jquery.meio.mask.min');
		echo $this->Html->script('bootstrap');
?>

<script type="text/javascript">
          // call setMask function on the document.ready event
          jQuery(function($) {
            $('input[type="text"]').setMask();
            $('input[type="number"]').setMask();   
          });
    </script>
    
        <!-- Cached scripts block -->

    <?php echo $this->Js->writeBuffer(array('cache'=>'true')); // Write cached scripts ?>
    
</body>

</html>
