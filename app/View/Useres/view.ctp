
<div class="row">

<div class="span4" >
    <div class="actions well">    
    <ul class="nav nav-list">
      <li class='nav-header'><?php echo __('Ações'); ?></li>
	  
		<li><?php echo $this->Html->link(__('Editar User'), array('action' => 'edit', $user['User']['id']), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Form->postLink(__('Excluir User'), array('action' => 'delete', $user['User']['id']), array('class'=>'ym-button'), __('Você tem certeza que deseja excluir o # %s?', $user['User']['id'])); ?></li> 
		<li><?php echo $this->Html->link(__('Listar Useres'), array('action' => 'index'), array('class'=>'ym-button')); ?></li> 
		<li><?php echo $this->Html->link(__('Novo User'), array('action' => 'add'), array('class'=>'ym-button')); ?></li> 
</ul>
   </div>
</div>



  <div class="span8" >
    <div class="useres view ym-cbox">
      <h2><?php  echo __('User');?></h2>
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
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Username'); ?></td>
			<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Password'); ?></td>
			<td>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</td>
		</tr>		<tr>			<td><?php echo __('Role'); ?></td>
			<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
		</tr>        </tbody>	
	</table>	
</div>




<!-- inicio -->
<!-- fim -->















</div>

</div>








