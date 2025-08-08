<h1>Cursos de Cocina - Lista</h1>
<p><a href="index.php?page=CursosCocina_Create">+ Nuevo</a></p>

<table border="1" cellpadding="6" cellspacing="0">
  <thead>
    <tr>
      <th>ID</th><th>Participante</th><th>Nivel</th><th>Cocina</th><th>País</th><th>Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php if (!empty($items)): foreach ($items as $r): ?>
    <tr>
      <td><?= $r['id'] ?></td>
      <td><?= htmlspecialchars($r['nombre_participante']) ?></td>
      <td><?= htmlspecialchars($r['nivel_culinario']) ?></td>
      <td><?= htmlspecialchars($r['cocina_interes']) ?></td>
      <td><?= htmlspecialchars($r['pais']) ?></td>
      <td>
        <a href="index.php?page=CursosCocina_Show&id=<?= $r['id'] ?>">Ver</a> |
        <a href="index.php?page=CursosCocina_Edit&id=<?= $r['id'] ?>">Editar</a> |
        <form action="index.php?page=CursosCocina_Destroy" method="post" style="display:inline" onsubmit="return confirm('¿Eliminar?');">
          <input type="hidden" name="id" value="<?= $r['id'] ?>">
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
  <?php endforeach; else: ?>
    <tr><td colspan="6">Sin registros</td></tr>
  <?php endif; ?>
  </tbody>
</table>
