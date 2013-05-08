
<table>
	<thead>
		<tr>
		<? foreach( reset($items)->AttributeLabels() as $key=>$value ): ?>
			<td><?= $value ?></td>
		<? endforeach ?>
		</tr>
		
	</thead>
	<tbody>
		<? foreach($items as $item): ?>
		<tr>
			<? foreach($item->getAttributes() as $a): ?>
			<td><?= $a ?></td>
			<? endforeach ?>
		<? endforeach ?>
</table>
