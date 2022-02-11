<?php

namespace App\Controllers;


class Config extends BaseController
{
    public  $ionAuth = null;
    public  $validation = null;
    public  $session = null;
    public  $configIonAuth = null;

    /**
	 * Validation list template.
	 *
	 * @var string
	 * @see https://bcit-ci.github.io/CodeIgniter4/libraries/validation.html#configuration
	 */
	protected $validationListTemplate = 'list';
	protected $validationSigneTemplate = 'single';
    protected $modelProduct = null;
    protected $modelProductCategory = null;

    /**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->ionAuth    = new \IonAuth\Libraries\IonAuth();
        $this->validation = \Config\Services::validation();
        helper(['form', 'url']);
		$this->configIonAuth = config('IonAuth');
		$this->session       = \Config\Services::session();

        if (! empty($this->configIonAuth->templates['errors']['list']))
		{
			$this->validationListTemplate = $this->configIonAuth->templates['errors']['list'];
		}
	}

    public function config()
    {
        if (!$this->ionAuth->loggedIn() || !$this->ionAuth->isAdmin())
		{
			return redirect()->to('/')->with("message", session()->get("message"))->with("code", session()->get("code"));
		}
        
        $data['auth'] = $this->ionAuth;
        return view('config/config',$data);
    }
    
    /**
	 * Create a new client|provider|delivery_men
	 *
	 * @return string|\CodeIgniter\HTTP\RedirectResponse
	 */
	public function create()
	{
		
		if (! $this->ionAuth->loggedIn() || ! $this->ionAuth->isAdmin())
		{
			return redirect()->to('/');
		}

        if (!$this->request->getPost())
		 {
			 return redirect()->back()->with("message2", "Erreur : Accès illégal !")->with("code", 0);
		}
		
        $data = [];
		// validate form input
		$rules = [
                    'name'=> 'trim|required|is_unique[products.products_name]',
                    'description'=> "trim",
                ];
        $errors =  [
                        "name"=>[
                            "required"=>"Renseignez la désignation du produit",
                            "is_unique"=>"La désignation ".$this->request->getPost('name')." existe déjà"
                            ],
                        
                    ]; 
        $this->validation->setRules($rules, $errors);
                     
		if ($this->validation->withRequest($this->request)->run())
		{
            $data['products_name'] = strtoupper($this->request->getPost('name'));
            $data['products_product_categorie_id'] = $this->request->getPost('product_categories_id');
            $data['products_description'] = $this->request->getPost('description');

            if($this->modelProduct->insert($data))
            {
                return redirect()->to("product/list")->with('message', 'Nouveau produit créé avec succès !')->with('code',1);
            }
            
        }
		//We find some error
		$this->data['message'] = $this->validation->getErrors() ? $this->validation->listErrors($this->validationListTemplate) : ($this->ionAuth->errors($this->validationListTemplate) ? $this->ionAuth->errors($this->validationListTemplate) : $this->session->getFlashdata('message'));
		$this->session->setFlashdata('message2', $this->data['message']);
		return redirect()->to("/product/list_create")->withInput();		
	}
   
}
