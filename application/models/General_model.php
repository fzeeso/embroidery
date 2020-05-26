<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class General_Model extends CI_Model {

    public function add($data, $table) {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function delete($table, $condition = array()) {
        if (!empty($condition)) {
            foreach ($condition as $col_name => $col_val) {
                $this->db->where($col_name, $col_val);
            }
        }
        $this->db->delete($table);
//        echo $this->db->last_query();
//        die;
        return TRUE;
    }

    public function update($table, $col_name, $col_val, $data) {
        $this->db->where($col_name, $col_val);
        $this->db->update($table, $data);
        return TRUE;
    }

    public function update_arr($table, $where = array(), $data) {
        if (!empty($where)) {
            foreach ($where as $col_name => $col_val) {
                $this->db->where($col_name, $col_val);
            }
        }
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    public function edit_form($table, $col_name, $col_val, $data = NULL) {
        if ($data != NULL) {
            $this->db->where($col_name, $col_val);
            $this->db->update($table, $data);
            return TRUE;
        } else {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($col_name, $col_val);
            $rs = $this->db->get();
            return ($rs->num_rows() > 0) ? $rs->row() : FALSE;
        }
    }

    public function get_result($table, $col_name = null, $col_val = null, $sort = array()) {
        $this->db->select('*');
        $this->db->from($table);
        if ($col_name != NULL && $col_val != null) {
            $this->db->where($col_name, $col_val);
        }
        if (!empty($sort)) {
            foreach ($sort as $col_name => $order) {
                $this->db->order_by($col_name, $order);
            }
        }
        $rs = $this->db->get();
        return ($rs->num_rows() > 0) ? $rs->result() : FALSE;
    }

    public function get_result_spec($table, $show = "*", $col_name = null, $col_val = null, $sort = array()) {
        $this->db->select($show);
        $this->db->from($table);
        if ($col_name != NULL && $col_val != null) {
            $this->db->where($col_name, $col_val);
        }
        if (!empty($sort)) {
            foreach ($sort as $col_name => $order) {
                $this->db->order_by($col_name, $order);
            }
        }
        $rs = $this->db->get();
        //echo $this->db->last_query()."<br>";
        return ($rs->num_rows() > 0) ? $rs->result() : FALSE;
    }

    public function get_result_arr($table, $where = array(), $flag = false) {
        $this->db->select('*');
        $this->db->from($table);
        if (!empty($where)) {
            foreach ($where as $col_name => $col_val) {
                $this->db->where($col_name, $col_val);
            }
        }
        $rs = $this->db->get();
        $row = $rs->result();

        if ($flag == TRUE) {
            $row = $rs->result_array();
        }
        return ($rs->num_rows() > 0) ? $row : FALSE;
    }

    public function get_count($table, $arr = array()) {
        if (!empty($arr)) {
            foreach ($arr as $col_name => $col_val) {
                $this->db->where($col_name, $col_val);
            }
        }
        $this->db->from($table);
        return $this->db->count_all_results();

        //return $this->db->count_all($table);
    }

    public function get_row($table, $col_name, $col_val, $flag = false) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($col_name, $col_val);
        $rs = $this->db->get();
        $row = $rs->row();

        if ($flag == TRUE) {
            $row = $rs->row_array();
        }
        return ($rs->num_rows() > 0) ? $row : FALSE;
    }

    public function get_row_arr($table, $where = array(), $flag = false) {
        $this->db->select('*');
        $this->db->from($table);
        if (!empty($where)) {
            foreach ($where as $col_name => $col_val) {
                $this->db->where($col_name, $col_val);
            }
        }
        $rs = $this->db->get();
        $row = $rs->row();

        if ($flag == TRUE) {
            $row = $rs->row_array();
        }
        return ($rs->num_rows() > 0) ? $row : FALSE;
    }

    public function check_login() {

        if (!isset($this->session->userdata['id'])) {
            redirect('login');
        }
    }

    public function query($query) {

        return $this->db->query($query);
    }

}
