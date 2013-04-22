<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Tipo Produto'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Categorias'); ?></li>		<li><?php echo $this->Html->link(__('Listar Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristica Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('controller' => 'caracteristica_produtos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Produtos'), array('controller' => 'produtos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Produto'), array('controller' => 'produtos', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="tipoProdutos index">
	        <h2><?php echo __('Tipo Produtos');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('categoria_id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($tipoProdutos as $tipoProduto): ?>
	<tr>
		<td><?php echo h($tipoProduto['TipoProduto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipoProduto['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $tipoProduto['Categoria']['id'])); ?>
		</td>
		<td><?php echo h($tipoProduto['TipoProduto']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipoProduto['TipoProduto']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipoProduto['TipoProduto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $tipoProduto['TipoProduto']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $tipoProduto['TipoProduto']['id'])); ?>
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
