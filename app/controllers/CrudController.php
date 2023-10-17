<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class CrudController extends Controller {

    public function insert(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            
            $insert = array(
                'name' => $name,
                'email' => $email,
                'password' => $password
            );
            
            if (!empty($name) && !empty($email) && !empty($password)) {
                
                if ($this->db->table('act')->insert($insert)) {
                
                     redirect('table');
                }else {
                    $this->call->view('fillup');
                } 
                }else {
                    $this->call->view('fillup');
            } 
            } else {
                $this->call->view('fillup');
            }
        }

    public function fillup(){
        $this->call->view('fillup');
    }
    
        

    public function useVar(){
        $this->call->model('Crud_model');
        $data['users'] = $this->Crud_model->getName();
        $this->call->view('table', $data);
        // $this->call->view('table');
    }


    public function getUser($id){
        $this->call->model('Crud_model');
        $data = $this->Crud_model->getData($id);
        $this->call->view('edit', $data);
    }

    public function table(){
        $this->call->view('table');
    }

    public function editform(){
        $this->call->view('edit');
    }

    public function delete($id)
    {
        
        if ($this->db->table('act')->where('id', $id)->delete()) {
        
            return redirect('table');
        } else {
    
        echo "There has an error in deleting";
        }
    }

    public function update(){
        $this->call->model('Crud_model');
    if($this->Crud_model->updateData($this->io->post('id'), $this->io->post('name'), $this->io->post('password'), $this->io->post('email'))){
        return redirect('table');
    }else{
        return redirect('table');
    }
    }

    }
    
?>
