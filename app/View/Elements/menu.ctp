<ul class="nav">
	<?php
	
	    $page = ($this->name != 'Pages')? $this->view : $this->getVar('page');
	    
	    $homelink =  $this->Html->link('Home', $this->SiteURL->home(),array('escape' => false));
	    $sobrelink = $this->Html->link('Quem Somos?', $this->SiteURL->sobre(),array('escape' => false));
	    $pesquisarlink = $this->Html->link('Imóveis', $this->SiteURL->pesquisarImoveis(),array('escape' => false));
	    $contatolink = $this->Html->link('Contato', $this->SiteURL->contato(),array('escape' => false));
	    
	 ?>
	<li <?php if($page == 'home') echo 'class="active"' ?> > <?php echo $homelink ?> </li>	
	<li><a href="#">Quem Somos?</a></li>
	<li><a href="#">Produtos</a></li>
	<li><a href="#">Contato</a></li>
	
	  <li class="dropdown">
	    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      Minha Conta
	      <b class="caret"></b>
	    </a>
	    <ul class="dropdown-menu">
	    
	      <li><a href="#">Meus Pedidos</a></li>
	      <li><a href="#">Meus Dados</a></li>
	      <li><a href="#">Meu Carrinho</a></li>
	      <li class="divider"></li>
          <li class="nav-header">Nav header</li>
	      <li><a href="#">Itens Preferidos</a></li>
	      <li><a href="#">Itens Vistos</a></li>	    
	    </ul>
	  </li>
	
</ul>
