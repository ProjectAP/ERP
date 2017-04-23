
<table>
	<thead>
		<th>Code</th>
		<th>fabric</th>
		<th>type item</th>
		<th>weave</th>
		<th>Construct</th>
	</thead>
	<tbody>
		@foreach($items as $item)
			<tr>
				<td>{{ $item->code }}</td>
				<td>{{ $item->type }}</td>
				<td>{{ $item->item_type }}{{ $item->code }}</td>
				<td>{{ $item->weave }}</td>
				<td>{{ ($item->tp_lusi !== 'Other')? $item->tp_lusi: '' }}{{ $item->no_lusi }} x {{ ($item->tp_pakan !== 'Other')? $item->tp_pakan: '' }}{{ $item->no_pakan }} / {{ $item->cotton }} x {{ $item->poly }} - {{ $item->l_finish }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
