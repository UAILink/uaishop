
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Caracteristica Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('controller' => 'caracteristica_produtos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add'), array('class'=>'')); ?></li> 
<li class='nav-header'><?php echo __('Valores'); ?></li>		<li><?php echo $this->Html->link(__('Listar Valores'), array('controller' => 'valores', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Valor'), array('controller' => 'valores', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Caracteristica'); ?></h4>
    
            <div class="caracteristicas form">
        <div class="form">
        <?php echo $this->Form->create('Caracteristica', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Caracteristica'); ?></h6>
        	<?php
		echo $this->Form->input('descricao');
	?>
	    
	        <div class="">
              <input type="submit" class="btn" value="Enviar" id="submit" name="Enviar" />
              <input type="reset" class="btn" value="Limpar" id="reset" name="Limpar" />              
            </div>
	    
	    
        <?php echo $this->Form->end();?>
        </div>
        </div>
    
    
    </div>    
    
</div>







