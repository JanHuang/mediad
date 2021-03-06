<?php

namespace Model;


use FastD\Model\Model;

class DriversModel extends Model
{
    const TABLE = 'drivers';
    const LIMIT = '15';

    public function select($page = 1)
    {
        $offset = ($page - 1) * static::LIMIT;
        return $this->db->select(static::TABLE, '*', [
            'LIMIT' => [$offset, static::LIMIT]
        ]);
    }

    public function find($id)
    {
        return $this->db->get(static::TABLE, '*', [
            'OR' => [
                'id' => $id,
            ]
        ]);
    }

    public function patch($id, array $data)
    {
        $data['updated'] = date('Y-m-d H:i:s');
        $affected = $this->db->update(static::TABLE, $data, [
            'OR' => [
                'id' => $id,
            ]
        ]);

        return $this->find($id);
    }

    public function create(array $data)
    {
        $data['created'] = date('Y-m-d H:i:s');

        $id = $this->db->insert(static::TABLE, $data);

        return $this->find($id);
    }

    public function delete($id)
    {
        return $this->db->delete(static::TABLE, [
            'id' => $id
        ]);
    }
}