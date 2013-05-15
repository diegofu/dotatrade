<div class = "span-12">
<? foreach($users as $user): ?>
	<?= CHtml::link(CHtml::image($user->avatarmedium, $user->personaname), '/user/'.$user->steamid) ?>
	

<? endforeach ?>

</div>