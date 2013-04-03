<?php
/**
 * @file
 *
 */
?>
<h3>Table of Contents</h3>
<table>
<tbody>
  <?php foreach($toc_entries['table_of_contents'] as $toc_entry): ?>
      <tr>
      <td><?php print $toc_entry['label']; ?></td>
      <td><?php print $toc_entry['title']; ?></td>
      <td><?php print $toc_entry['pagenum']; ?></td>
      </tr>
  <?php endforeach; ?>
</tbody>
</table>
