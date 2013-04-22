
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Caracteristica'), array('action' => 'edit', $caracteristica['Caracteristica']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Caracteristica'), array('action' => 'delete', $caracteristica['Caracteristica']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $caracteristica['Caracteristica']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristica Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('controller' => 'caracteristica_produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Valores'); ?></li>		<li><?php echo $this->Html->link(__('Listar Valores'), array('controller' => 'valores', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Valor'), array('controller' => 'valores', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="caracteristicas view ym-cbox">
      <h2><?php  echo __('Caracteristica');?></h2>
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
			<?php echo h($caracteristica['Caracteristica']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($caracteristica['Caracteristica']['descricao']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
	
    <div class="related ym-cbox">
	<h3><?php echo __('Caracteristica Produtos relacionados');?></h3>
	<?php if (!empty($caracteristica['CaracteristicaProduto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo Produto Id'); ?></th>
		<th><?php echo __('Caracteristica Id'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($caracteristica['CaracteristicaProduto'] as $caracteristicaProduto): ?>
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
	<h3><?php echo __('Valores relacionados');?></h3>
	<?php if (!empty($caracteristica['Valor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Caracteristica Id'); ?></th>
		<th><?php echo __('Descrição'); ?></th>
		<th><?php echo __('Mascara'); ?></th>
		<th class="actions"><?php echo __('Ações');?></th>
	</tr>
	<?php
		foreach ($caracteristica['Valor'] as $valor): ?>
		<tr>
			<td><?php echo $valor['id'];?></td>
			<td><?php echo $valor['caracteristica_id'];?></td>
			<td><?php echo $valor['descricao'];?></td>
			<td><?php echo $valor['mascara'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'valores', 'action' => 'view', $valor['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'valores', 'action' => 'edit', $valor['id'])); ?>
				<?php echo $this->Form->postLink(__('Excluir'), array('controller' => 'valores', 'action' => 'delete', $valor['id']), null, __('Você tem certeza que deseja excluir o # %s?', $valor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Novo Valor'), array('controller' => 'valores', 'action' => 'add'), array('class'=>'ym-button'));?> 
	
	<?php endif; ?>

	
	</div>
	
	

<!-- fim -->















</div>

</div>








