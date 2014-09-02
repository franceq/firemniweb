<?php

namespace App\Presenters;

use \Nette\Application\UI\Form,
	\Nette\Mail\SendmailMailer,
	\Nette\Mail\Message;

/**
 * Homepage presenter.
 */
class CareerPresenter extends BasePresenter
{
	protected function createComponentCareerForm(){
		$form = new Form;

		$form->addText('name', $this->lang['career-form']['label']['name'].':')
			 ->setRequired($this->lang['career-form']['name']['required']);

		$form->addText('surename', $this->lang['career-form']['label']['surename'].':')
			 ->setRequired($this->lang['career-form']['surename']['required']);

		$form->addText('telephone', $this->lang['career-form']['label']['telephone'].':')
			 ->setRequired($this->lang['career-form']['telephone']['required']);

		$form->addText('email', $this->lang['career-form']['label']['email'].':')
			 ->setRequired($this->lang['career-form']['email']['required'])
			 ->addRule(Form::EMAIL, $this->lang['career-form']['email']['rule1']);

		$form->addUpload('cv', $this->lang['career-form']['label']['cv'].':')
			 ->setRequired($this->lang['career-form']['cv']['required']);

		$form->addSubmit('send', $this->lang['career-form']['label']['send']);

		$form->onSuccess[] = array($this, 'careerFormSubmited');

		return $form;
	}

	public function careerFormSubmited( $form ){
		$values = $form->getValues();

		$mail = new Message;
		$mail->setFrom('SSPC <kariera@sspc.cz>')
		     ->addTo('fffrantik@seznam.cz')
		     ->setSubject('Zájemce o kariéru')
		     ->setBody("Dobrý den,\nmáte tu člověka, který se zajímá o kariéru. Informace:\n\n\nJméno: ".$values['name']." ".$values['surename']."\nTelefon: ".$values['telephone']."\nEmail: ".$values['email']);

		$mail->addAttachment($values['cv']);

		$mailer = new SendmailMailer;
		$mailer->send($mail);

		$this->flashMessage('Děkujeme za váš zájem, formulář byl odeslán našim pracovníkům.');
		$this->redirect('this');
	}
}