
<div class="row">

    <div class="span4" >
    
        <div class="actions well">
	 
        <ul class="nav nav-list">
        
        <li class='nav-header'><?php echo __('Ações'); ?></li>
        
        		        <li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index'), array('class'=>''));?></li>
        <li class='nav-header'><?php echo __('Tipo Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Produtos'), array('controller' => 'tipo_produtos', 'action' => 'index'), array('class'=>'')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('controller' => 'tipo_produtos', 'action' => 'add'), array('class'=>'')); ?></li> 
        
        </ul>
	 
        </div>
    
    
    
    </div>

    <div class="span8" >   
    
    
    <h4 class="ym-fbox-heading"><?php echo __('Incluir Categoria'); ?></h4>
    
            <div class="categorias form">
        <div class="form">
        <?php echo $this->Form->create('Categoria', array(
        'inputDefaults' => array(     
            'div'   => false,
            # define error defaults for the form
            'error' => array(
              'wrap'  => 'span',
              'class' => 'error'
            )
        )
    ));?>
	        
		        <h6><?php echo __('Dados Categoria'); ?></h6>
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







