<?php
namespace Dao;

use PDO;

class CursosCocinaDao {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    /** LISTAR */
    public function all(): array {
        $st = $this->db->query("SELECT * FROM cursos_cocina ORDER BY id DESC");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    /** BUSCAR POR ID */
    public function find(int $id): ?array {
        $st = $this->db->prepare("SELECT * FROM cursos_cocina WHERE id = ?");
        $st->execute([$id]);
        $r = $st->fetch(PDO::FETCH_ASSOC);
        return $r ?: null;
    }

    /** INSERTAR */
    public function insert(array $d): int {
        $sql = "INSERT INTO cursos_cocina
          (nombre_participante, nivel_culinario, cocina_interes, email, pais, metodo_pago_preferido, mensaje)
          VALUES (?,?,?,?,?,?,?)";
        $st = $this->db->prepare($sql);
        $st->execute([
            $d['nombre_participante'],
            $d['nivel_culinario'],
            $d['cocina_interes'],
            $d['email'],
            $d['pais'],
            $d['metodo_pago_preferido'],
            $d['mensaje'] ?? null
        ]);
        return (int)$this->db->lastInsertId();
    }

    /** ACTUALIZAR */
    public function update(int $id, array $d): bool {
        $sql = "UPDATE cursos_cocina SET
            nombre_participante = ?,
            nivel_culinario = ?,
            cocina_interes = ?,
            email = ?,
            pais = ?,
            metodo_pago_preferido = ?,
            mensaje = ?
          WHERE id = ?";
        $st = $this->db->prepare($sql);
        return $st->execute([
            $d['nombre_participante'],
            $d['nivel_culinario'],
            $d['cocina_interes'],
            $d['email'],
            $d['pais'],
            $d['metodo_pago_preferido'],
            $d['mensaje'] ?? null,
            $id
        ]);
    }

    /** ELIMINAR */
    public function delete(int $id): bool {
        $st = $this->db->prepare("DELETE FROM cursos_cocina WHERE id = ?");
        return $st->execute([$id]);
    }
}
