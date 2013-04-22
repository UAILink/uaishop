
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar Valor'), array('action' => 'edit', $valor['Valor']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir Valor'), array('action' => 'delete', $valor['Valor']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $valor['Valor']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Valores'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Valor'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
<li class='nav-header'><?php echo __('Caracteristicas'); ?></li>		<li><?php echo $this->Html->link(__('Listar Caracteristicas'), array('controller' => 'caracteristicas', 'action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo Caracteristica'), array('controller' => 'caracteristicas', 'action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="valores view ym-cbox">
      <h2><?php  echo __('Valor');?></h2>
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
			<?php echo h($valor['Valor']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Caracteristica'); ?></td>
			<td>
			<?php echo $this->Html->link($valor['Caracteristica']['id'], array('controller' => 'caracteristicas', 'action' => 'view', $valor['Caracteristica']['id'])); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Descrição'); ?></td>
			<td>
			<?php echo h($valor['Valor']['descricao']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Mascara'); ?></td>
			<td>
			<?php echo h($valor['Valor']['mascara']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








