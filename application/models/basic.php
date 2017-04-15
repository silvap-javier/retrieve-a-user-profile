<?php

/*
  Document   : front
  Author     : Silva Pablo
  Web Developer
 */

Class Basic extends CI_Model {

    function save($table, $id_field, $data = array()) {
        if (!isset($data[$id_field]) || empty($data[$id_field])) {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        } else {
            $this->db->where($id_field, $data[$id_field]);
            $this->db->update($table, $data);
            return $data[$id_field];
        }
    }

    function get_all($table, $order = false, $ord = 'asc', $limit = false, $l = false) {
        if ($order)
            $this->db->order_by($order, $ord);
        if ($l)
            $this->db->limit($limit, $l);
        elseif ($limit)
            $this->db->limit($limit);
        return $this->db->get($table);
    }

    function get_where($table, $where_array, $order = false, $or = 'asc', $limit = false, $l = false) {
        if ($order)
            $this->db->order_by($order, $or);
        if ($l)
            $this->db->limit($limit, $l);
        elseif ($limit)
            $this->db->limit($limit);
        return $this->db->get_where($table, $where_array);
    }

}
