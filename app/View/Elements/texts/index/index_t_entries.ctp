		<?php foreach ($texts as $text): ?>
		<tr>
				<td><?php echo $text['Text']['id']; ?></td>
				
				<td><?php echo $text['Text']['created_at']; ?></td>
				
				<td><?php echo $text['Text']['updated_at']; ?></td>
				
				<td><?php echo $text['Text']['string']; ?></td>
				
		</tr>
		<?php endforeach; ?>
		<?php unset($text); ?>