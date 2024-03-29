
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Categoria'), array('action' => 'edit', $categoria['Categoria']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Categoria'), array('action' => 'delete', $categoria['Categoria']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $categoria['Categoria']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Categorias'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Categoria'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Tipo Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Produtos'), array('controller' => 'tipo_produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('controller' => 'tipo_produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="categorias view ym-cbox">
      <h2><?php  echo __('Categoria');?></h2>
      <table class="table">
	     <thead>
	        <tr>
	          <td width="20%">Campo</td>
	          <td width="80%">Descrição</td>
	        </tr>
	      </thead>
	      <tbody>
			<tr>			<td><?php echo __('Id'); ?></td>
			<td>
			<?php echo h($categoria['Categoria']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($categoria['Categoria']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Tipo Produtos relacionados');?></h3>
	<?php if (!empty($categoria['TipoProduto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($categoria['TipoProduto'] as $tipoProduto): ?>
		<tr>
			<td><?php echo $tipoProduto['id'];?></td>
			<td><?php echo $tipoProduto['categoria_id'];?></td>
			<td><?php echo $tipoProduto['descricao'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'tipo_produtos', 'action' => 'view', $tipoProduto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'tipo_produtos', 'action' => 'edit', $tipoProduto['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'tipo_produtos', 'action' => 'delete', $tipoProduto['id']), null, __('Você tem certeza que deseja excluir o # %s?', $tipoProduto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Tipo Produto'), array('controller' => 'tipo_produtos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








