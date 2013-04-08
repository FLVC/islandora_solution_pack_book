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
      <td><?php print l($toc_entry['title'], "islandora/object/{$object->id}", array('fragment' => "page/{$toc_entry['pagenum']}/mode/1up")); ?></td>
      <td><?php print $toc_entry['pagenum']; ?></td>
      </tr>
  <?php endforeach; ?>
</tbody>
</table>
