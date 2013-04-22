
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Caracteristica Produto'), array('action' => 'edit', $caracteristicaProduto['CaracteristicaProduto']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Caracteristica Produto'), array('action' => 'delete', $caracteristicaProduto['CaracteristicaProduto']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $caracteristicaProduto['CaracteristicaProduto']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Tipo Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Produtos'), array('controller' => 'tipo_produtos', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('controller' => 'tipo_produtos', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristicas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="caracteristicaProdutos view ym-cbox">
      <h2><?php  echo __('Caracteristica Produto');?></h2>
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
			<?php echo h($caracteristicaProduto['CaracteristicaProduto']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Tipo Produto'); ?></td>
			<td>
			<?php echo $this->Html->link($caracteristicaProduto['TipoProduto']['descricao'], array('controller' => 'tipo_produtos', 'action' => 'view', $caracteristicaProduto['TipoProduto']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Caracteristica'); ?></td>
			<td>
			<?php echo $this->Html->link($caracteristicaProduto['Caracteristica']['descricao'], array('controller' => 'caracteristicas', 'action' => 'view', $caracteristicaProduto['Caracteristica']['id'])); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








