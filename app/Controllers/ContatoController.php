<?php namespace App\Controllers;
        use App\Models\Contato;

class ContatoController extends BaseController
{
	public function store(){
        $userModel = new Contato();
                $data = [
                    'nome' => $this->request->getVar('nome'),
                    'email'  => $this->request->getVar('email'),
                    'telefone'  => $this->request->getVar('telefone'),
                ];
                $userModel->insert($data);
                return $this->response->redirect(site_url('/'));
    }
    // show users list
    public function index(){
        $userModel = new Contato();
        $data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
        return view('showContatos', $data);
    }
	// show single user
    public function singleUser($id = null){
        $userModel = new Contato();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
     // delete user
     public function delete($id = null){
        $userModel = new Contato();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    } 

	//--------------------------------------------------------------------

}