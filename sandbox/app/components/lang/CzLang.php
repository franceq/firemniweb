<?php

class CzLang{
	
	private $data;

	public function __construct(){
		$this->init();
	}

	public function init(){
		$this->data['menu']['home']['home'] = "Hlavní strana";
		$this->data['menu']['about']['about'] = "O společnosti";

		$this->data['menu']['career']['career'] = "Kariéra v SSPC";
		$this->data['menu']['career']['positions'] = "Kariérní pozice";
		$this->data['menu']['career']['vacancies'] = "Volné pozice";
		$this->data['menu']['career']['photogallery'] = "Fotogalerie";

		$this->data['menu']['contact']['contact'] = "Kontakty";
		$this->data['menu']['contact']['branch'] = "Pobočky";
		$this->data['menu']['contact']['canteen'] = "Kiosky";
		$this->data['menu']['contact']['people'] = "Lidé";

		$this->data['menu']['edu']['edu'] = "Vzdělávání";
		$this->data['menu']['projects']['projects'] = "Projekty";
		$this->data['menu']['reference']['reference'] = "Reference";

		/** About **/
		$this->data['about']['text1'] = 'Jsme ryze českou společností s obchodním modelem, který zdokonalujeme od roku 2007

			Cílem a dlouhodobou vizí společnosti je přinést našim klientům co nejvíce výhod a snižovat jejich 

			měsíční zatížení.

			Pracujeme pouze s nejvýznamnějšími partnery v ČR.

			Specializujeme se na komplexní služby v oblasti pravidelných výdajů domácností.

			Realizujeme projekty, které jsou prospěšné široké veřejnosti.

			Díky tomu dokážeme přinést úsporu 10-25% měsíčně.

			NAŠÍM CÍLEM A VIZÍ JE SPOKOJENOST KLIENTA';
	}

	public function getData(){
		return $this->data;
	}
}