<?php

namespace App\Controllers;

class Users extends BaseController
{
    public  $ionAuth = null;
    /**
	 * Constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->ionAuth    = new \IonAuth\Libraries\IonAuth();
	}

    public function list()
    {
        $data['users'] = $this->ionAuth->users()->result();
      //  echo $data['users'][0]->id;
        //dd($this->ionAuth->getUsersGroups(1)->getResult());
       // dd($this->ionAuth->getUsersGroups($data['users'][0]->id));
        $data['auth'] = $this->ionAuth;
        return view('users/list',$data);
    }
}
