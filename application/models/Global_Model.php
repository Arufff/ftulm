<?php

class Global_Model extends CI_Model{

    public function getDataUser($id)
    {
        $this->db->where('nim', $id);
        return $this->db->get('tbl_user')->row();
    }

    public function check($name, $pass)
    {
        $this->db->where('nim', $name);
        $this->db->where('password', $pass);
        return $this->db->get('tbl_user');
    }

    public function getData($table)
    {
        return $this->db->get($table);
    }

    public function addData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function editData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function join2Data($table1, $table2, $join)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join);
        return $this->db->get();
    }

    public function join3Data($table1, $table2, $table3, $join1, $join2)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        return $this->db->get();
    }

    public function join4Data($table1, $table2, $table3, $table4, $join1, $join2, $join3)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        return $this->db->get();
    }

    public function joinWhere($table1, $table2, $join, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join);
        $this->db->where($where, $id);
        return $this->db->get();
    }

    public function joinWhere2($table1, $table2, $table3, $join1, $join2, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->where($where, $id);
        return $this->db->get();
    }

    public function joinWhere3($table1, $table2, $table3, $table4, $join1, $join2, $join3, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($table1);
        $this->db->join($table2, $join1);
        $this->db->join($table3, $join2);
        $this->db->join($table4, $join3);
        $this->db->where($where, $id);
        return $this->db->get();
    }

    }

?>