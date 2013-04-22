<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Tipo Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Tipo Produtos'), array('controller' => 'tipo_produtos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('controller' => 'tipo_produtos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristicas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="caracteristicaProdutos index">
	        <h2><?php echo __('Caracteristica Produtos');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('tipo_produto_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('caracteristica_id');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($caracteristicaProdutos as $caracteristicaProduto): ?>
	<tr>
		<td><?php echo h($caracteristicaProduto['CaracteristicaProduto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($caracteristicaProduto['TipoProduto']['id'], array('controller' => 'tipo_produtos', 'action' => 'view', $caracteristicaProduto['TipoProduto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($caracteristicaProduto['Caracteristica']['id'], array('controller' => 'caracteristicas', 'action' => 'view', $caracteristicaProduto['Caracteristica']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $caracteristicaProduto['CaracteristicaProduto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caracteristicaProduto['CaracteristicaProduto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $caracteristicaProduto['CaracteristicaProduto']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $caracteristicaProduto['CaracteristicaProduto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	        </table>
	        <p>
	        <?php
	        echo $this->Paginator->counter(array(
	        'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count}, começando no registro {:start}, e terminando no {:end}')
	        ));
	        ?>	        </p>

	        <div class="paging">
	        <?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('próxima') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	        </div>
        </div>
    </div>
    
</div>
