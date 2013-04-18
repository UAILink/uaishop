<?php
$this->set('title_for_layout', 'Home');

?>

<div style="background-color: #BB2820">
	<div class="container">
	<?php echo $this->Html->image('banner.jpg'); ?>
	</div>
</div>

<div style="">
<div class="container">
	<h3>Ofertas do Dia</h3>
	<?php echo $this->element('itemsPesquisa');?>
	</div>
</div>