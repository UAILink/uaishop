
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Tipo Produto'), array('action' => 'edit', $tipoProduto['TipoProduto']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Tipo Produto'), array('action' => 'delete', $tipoProduto['TipoProduto']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $tipoProduto['TipoProduto']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Tipo Produtos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Categorias'); ?></li>		<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Categoria'), array('controller' => 'categorias', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristica Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('controller' => 'caracteristica_produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="tipoProdutos view ym-cbox">
      <h2><?php  echo __('Tipo Produto');?></h2>
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
			<?php echo h($tipoProduto['TipoProduto']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Categoria'); ?></td>
			<td>
			<?php echo $this->Html->link($tipoProduto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $tipoProduto['Categoria']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($tipoProduto['TipoProduto']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Caracteristica Produtos relacionados');?></h3>
	<?php if (!empty($tipoProduto['CaracteristicaProduto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Produto Id'); ?></th>
		<th><?php echo __('Caracteristica Id'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($tipoProduto['CaracteristicaProduto'] as $caracteristicaProduto): ?>
		<tr>
			<td><?php echo $caracteristicaProduto['id'];?></td>
			<td><?php echo $caracteristicaProduto['tipo_produto_id'];?></td>
			<td><?php echo $caracteristicaProduto['caracteristica_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'caracteristica_produtos', 'action' => 'view', $caracteristicaProduto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'caracteristica_produtos', 'action' => 'edit', $caracteristicaProduto['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'caracteristica_produtos', 'action' => 'delete', $caracteristicaProduto['id']), null, __('Você tem certeza que deseja excluir o # %s?', $caracteristicaProduto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

	
    <div class="related ym-cbox">
	<h3><?php echo __('Produtos relacionados');?></h3>
	<?php if (!empty($tipoProduto['Produto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('Tipo Produto Id'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($tipoProduto['Produto'] as $produto): ?>
		<tr>
			<td><?php echo $produto['id'];?></td>
			<td><?php echo $produto['marca_id'];?></td>
			<td><?php echo $produto['nome'];?></td>
			<td><?php echo $produto['descricao'];?></td>
			<td><?php echo $produto['tipo_produto_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'produtos', 'action' => 'view', $produto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'produtos', 'action' => 'edit', $produto['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'produtos', 'action' => 'delete', $produto['id']), null, __('Você tem certeza que deseja excluir o # %s?', $produto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








