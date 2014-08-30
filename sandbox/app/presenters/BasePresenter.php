<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	protected $lang;

	public function startup(){
		parent::startup();
		$country = $this->getSession('lang');
		if(!isset($country->language)){
			$country->language = "cz";
		}
		$this->lang = $country->language;
	}

	public function beforeRender(){
		parent::beforeRender();
		switch($this->lang){
			case 'cz':{
				$lang = new \CzLang();
				$this->template->lang = $lang->getData();
			}
			default:{
				$lang = new \CzLang();
				$this->template->lang = $lang->getData();
			}
		}
	}
}
