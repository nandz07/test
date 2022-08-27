<?php
    class Crud_model extends CI_Model {



        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function insert_entry($data)
        {
               

                return $this->db->insert('student', $data);
        }
        public function delete_entry($id)
        {
               

                return $this->db->delete('student', array('id' => $id));
        }
        public function single_entry($id){
                $this->db->select("*");
                $this->db->from("student");
                $this->db->where("id",$id);
                $query = $this->db->get();
                if(count($query->result())>0){
                        return $query->row();//new 
                }
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}
?>