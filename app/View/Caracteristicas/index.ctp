<div class="row-fluid">
    <div class="span4">
        <div class="actions well">
        
	        <ul class="nav nav-list">
	        
	        	<li class='nav-header'><?php echo __('Ações'); ?></li>
        
		        <li><?php echo $this->Html->link(__('Novo Caracteristica'), array('action' => 'add')); ?></li>        <li class='nav-header'><?php echo __('Caracteristica Produtos'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristica Produtos'), array('controller' => 'caracteristica_produtos', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica Produto'), array('controller' => 'caracteristica_produtos', 'action' => 'add')); ?></li> 
<li class='nav-header'><?php echo __('Valores'); ?></li>		<li><?php echo $this->Html->link(__('Listar Valores'), array('controller' => 'valores', 'action' => 'index')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Valor'), array('controller' => 'valores', 'action' => 'add')); ?></li> 
        
        	</ul>
	        
        </div>
    </div>
    <div class="span8" >
        <div class="caracteristicas index">
	        <h2><?php echo __('Caracteristicas');?></h2>
	        <table class="table table-striped">
	        <tr>
	        		        <th><?php echo $this->Paginator->sort('id');?></th>
	        		        <th><?php echo $this->Paginator->sort('descricao');?></th>
	        		        <th class="actions"><?php echo __('Ações');?></th>
	        </tr>
	        <?php foreach ($caracteristicas as $caracteristica): ?>
	<tr>
		<td><?php echo h($caracteristica['Caracteristica']['id']); ?>&nbsp;</td>
		<td><?php echo h($caracteristica['Caracteristica']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $caracteristica['Caracteristica']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caracteristica['Caracteristica']['id'])); ?>
			<?php echo $this->Form->postLink(__('Excluir'), array('action' => 'delete', $caracteristica['Caracteristica']['id']), null, __('Você tem certeza que deseja excluir o # %s?', $caracteristica['Caracteristica']['id'])); ?>
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
