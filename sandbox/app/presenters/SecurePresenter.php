<?php

namespace App\Presenters;


/**
 * Secure presenter.
 */

class SecurePresenter extends BasePresenter
{

	public function startup(){
		parent::startup();
		if(!$this->getUser()->isLoggedIn()){
			$this->redirect('Home:');
		}
	}

}