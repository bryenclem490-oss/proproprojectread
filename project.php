<?php
require_once __DIR__ . '/config/database.php';
$stmt = $pdo->query('SELECT * FROM projects ORDER BY dibuat_pada DESC');
$projects = $stmt->fetchAll();
?>

<main>
<h1>Project</h1>
<?php if (count($projects) === 0): ?>
<p>Belum ada project.</p>
<?php else: ?>
<table border="1" cellpadding="8" cellspacing="0">
<tr>
<th>Judul</th>
<th>Deskripsi</th>
<th>Teknologi</th>
<th>Tautan</th>
<th>Tanggal Dibuat</th>
</tr>
<?php foreach ($projects as $project): ?>
<tr>
<td><?= htmlspecialchars($project['judul']) ?></td>
<td><?= htmlspecialchars($project['deskripsi']) ?></td>
<td><?= htmlspecialchars($project['teknologi']) ?></td>
<td><?php if (!empty($project['tautan'])): ?>
<a href="<?= htmlspecialchars($project['tautan']) ?>" target="_blank">Lihat</a>
<?php else: ?>
-
<?php endif; ?>
</td>
<td><?= htmlspecialchars($project['dibuat_pada']) ?></td>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
</main>