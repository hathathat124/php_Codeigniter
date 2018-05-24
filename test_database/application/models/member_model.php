<?php
class member_model extends CI_Model {
    public function insert()
    {
        $data= array(

            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname')
            );
        $query=$this->db->insert('tb_member',$data);
    
        if($query){
            return true;
        
        }
        else
        {
           return false;
        }

    }
    public function delete(){
        $this->db->where('id',$this->uri->segment(3));
        if($this->db->delete('tb_member'))
            return TRUE;
        else
            return false;
    }
    public function update(){
        $data=array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname')
            );        
        $this->db->where('id', $this->input->post('id'));
        if($this->db->update('tb_member',$data))
            return TRUE;
        else
            return false;
    
    }
    public function getmember(){

        $this->db->where('id',$this->uri->segment(3));
        return $this->db->get('tb_member');
    }
    
    public function all(){
        return $this->db->get('tb_member');
    }
}
    ?>
