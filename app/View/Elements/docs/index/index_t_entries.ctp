		<?php foreach ($docs as $doc): ?>
		<tr>
				<td><?php echo $doc['Doc']['id']; ?></td>
				
				<td><?php echo $doc['Doc']['created_at']; ?></td>
				
				<td><?php echo $doc['Doc']['updated_at']; ?></td>
				
				<td><?php echo $doc['Doc']['string']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($doc); ?>