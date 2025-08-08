<?php
namespace Controllers;

use Dao\CursosCocinaDao;
use Utilities\Database;

class CursosCocinaController {
    private CursosCocinaDao $dao;

    public function __construct() {
        $pdo = Database::getConnection();
        $this->dao = new CursosCocinaDao($pdo);
    }

    // LISTA
    public function index() {
        $items = $this->dao->all();
        require __DIR__ . '/../Views/cursos/index.php';
    }

    // FORM NUEVO
    public function create() {
        $item = null;
        require __DIR__ . '/../Views/cursos/form.php';
    }

    // GUARDAR NUEVO
    public function store() {
        $data = [
            'nombre_participante'   => $_POST['nombre_participante'] ?? '',
            'nivel_culinario'       => $_POST['nivel_culinario'] ?? '',
            'cocina_interes'        => $_POST['cocina_interes'] ?? '',
            'email'                 => $_POST['email'] ?? '',
            'pais'                  => $_POST['pais'] ?? '',
            'metodo_pago_preferido' => $_POST['metodo_pago_preferido'] ?? '',
            'mensaje'               => $_POST['mensaje'] ?? null
        ];
        $id = $this->dao->insert($data);
        header("Location: /cursos/ver?id=" . $id);
        exit;
    }

    // VER DETALLE
    public function show() {
        $id = (int)($_GET['id'] ?? 0);
        $item = $this->dao->find($id);
        require __DIR__ . '/../Views/cursos/show.php';
    }

    // FORM EDITAR
    public function edit() {
        $id = (int)($_GET['id'] ?? 0);
        $item = $this->dao->find($id);
        require __DIR__ . '/../Views/cursos/form.php';
    }

    // ACTUALIZAR
    public function update() {
        $id = (int)($_POST['id'] ?? 0);
        $data = [
            'nombre_participante'   => $_POST['nombre_participante'] ?? '',
            'nivel_culinario'       => $_POST['nivel_culinario'] ?? '',
            'cocina_interes'        => $_POST['cocina_interes'] ?? '',
            'email'                 => $_POST['email'] ?? '',
            'pais'                  => $_POST['pais'] ?? '',
            'metodo_pago_preferido' => $_POST['metodo_pago_preferido'] ?? '',
            'mensaje'               => $_POST['mensaje'] ?? null
        ];
        $this->dao->update($id, $data);
        header("Location: /cursos/ver?id=" . $id);
        exit;
    }

    // ELIMINAR
    public function destroy() {
        $id = (int)($_POST['id'] ?? 0);
        $this->dao->delete($id);
        header("Location: /cursos");
        exit;
    }
}
