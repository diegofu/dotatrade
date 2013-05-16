<div class = "span-12">
<? foreach($users as $user): ?>
	<?= CHtml::link(CHtml::image($user->avatarmedium, $user->personaname), '/users/index/id/'.$user->steamid) ?>
	

<? endforeach ?>

</div>