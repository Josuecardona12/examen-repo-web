<h1>Detalle registro #<?= $item['id'] ?></h1>
<ul>
  <li><b>Participante:</b> <?= htmlspecialchars($item['nombre_participante']) ?></li>
  <li><b>Nivel:</b> <?= htmlspecialchars($item['nivel_culinario']) ?></li>
  <li><b>Cocina:</b> <?= htmlspecialchars($item['cocina_interes']) ?></li>
  <li><b>Email:</b> <?= htmlspecialchars($item['email']) ?></li>
  <li><b>País:</b> <?= htmlspecialchars($item['pais']) ?></li>
  <li><b>Método de pago:</b> <?= htmlspecialchars($item['metodo_pago_preferido']) ?></li>
  <li><b>Mensaje:</b> <?= nl2br(htmlspecialchars($item['mensaje'] ?? '')) ?></li>
</ul>
<p>
  <a href="index.php?page=CursosCocina_Index">Volver</a> |
  <a href="index.php?page=CursosCocina_Edit&id=<?= $item['id'] ?>">Editar</a>
</p>
