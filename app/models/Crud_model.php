<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Crud_model extends Model {
	public function getName(){
        return $this->db->raw('select * from act');
    }

    public function getData($id){
        return $this->db->table('act')->where('id', $id)->get();
    }

    public function updateData($id, $name, $password, $email){

        $data = array(
            'name' => $name,
            'password' => $password,
            'email' => $email
        );
        // $result = $this->db->table('act')->update($data)->where('id', $id)->exec();
        $result = $this->db->table('act')->where('id', $id)->update($data);
        
                     
                
    }

    
}
?>
