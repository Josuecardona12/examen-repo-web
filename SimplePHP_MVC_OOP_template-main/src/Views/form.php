<?php
$isEdit = !empty($item);
$action = $isEdit ? "index.php?page=CursosCocina_Update" : "index.php?page=CursosCocina_Store";
?>
<h1><?= $isEdit ? "Editar" : "Nuevo" ?> registro</h1>

<form method="post" action="<?= $action ?>">
  <?php if ($isEdit): ?>
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
  <?php endif; ?>

  <label>Nombre participante:
    <input name="nombre_participante" required value="<?= htmlspecialchars($item['nombre_participante'] ?? '') ?>">
  </label><br>

  <label>Nivel culinario:
    <input name="nivel_culinario" required value="<?= htmlspecialchars($item['nivel_culinario'] ?? '') ?>">
  </label><br>

  <label>Cocina de interés:
    <input name="cocina_interes" required value="<?= htmlspecialchars($item['cocina_interes'] ?? '') ?>">
  </label><br>

  <label>Email:
    <input type="email" name="email" required value="<?= htmlspecialchars($item['email'] ?? '') ?>">
  </label><br>

  <label>País:
    <input name="pais" required value="<?= htmlspecialchars($item['pais'] ?? '') ?>">
  </label><br>

  <label>Método de pago preferido:
    <input name="metodo_pago_preferido" required value="<?= htmlspecialchars($item['metodo_pago_preferido'] ?? '') ?>">
  </label><br>

  <label>Mensaje:
    <textarea name="mensaje"><?= htmlspecialchars($item['mensaje'] ?? '') ?></textarea>
  </label><br>

  <button type="submit"><?= $isEdit ? "Actualizar" : "Guardar" ?></button>
  <a href="index.php?page=CursosCocina_Index">Volver</a>
</form>
