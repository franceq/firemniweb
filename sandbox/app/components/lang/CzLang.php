<?php

class CzLang{
	
	private $data;

	public function __construct(){
		$this->init();
	}

	public function init(){
		/** Forms **/

		/** Footer **/
		$this->data['copyright'] = "© Všechna práva vyhrazena. Naprogramoval Franceq.";

		// career-form
		$this->data['career-form']['label']['name'] = 'Křestní jméno';
		$this->data['career-form']['label']['surename'] = 'Příjmení';
		$this->data['career-form']['label']['postcode'] = 'PSČ';
		$this->data['career-form']['label']['email'] = 'Email';
		$this->data['career-form']['label']['telephone'] = 'Telefon';
		$this->data['career-form']['label']['cv'] = 'Životopis';
		$this->data['career-form']['label']['letter'] = 'Motivační dopis';
		$this->data['career-form']['label']['send'] = 'Odeslat';

		$this->data['career-form']['name']['required'] = 'Vyplňte prosím křestní jméno.';
		$this->data['career-form']['surename']['required'] = 'Vyplňte prosím příjmení.';
		$this->data['career-form']['postcode']['required'] = 'Vyplňte prosím PSČ.';
		$this->data['career-form']['telephone']['required'] = 'Vyplňte prosím telefon.';
		$this->data['career-form']['email']['required'] = 'Vyplňte prosím email.';
		$this->data['career-form']['cv']['required'] = 'Nahrajte prosím životopis.';
		$this->data['career-form']['letter']['required'] = 'Nahrajte prosím motivační dopis.';

		$this->data['career-form']['email']['rule1'] = 'Email není správně vyplněn.';

		/** Menu **/

		$this->data['menu']['home']['home'] = "Hlavní strana";
		$this->data['menu']['about']['about'] = "O společnosti";

		$this->data['menu']['career']['career'] = "Kariéra";
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
		$this->data['about']['text1'] = 'Jsme ryze českou společností s obchodním modelem, který zdokonalujeme od roku 2007. Cílem a dlouhodobou vizí společnosti je přinést našim klientům co nejvíce výhod a snižovat jejich měsíční zatížení. Pracujeme pouze s nejvýznamnějšími partnery v ČR. Specializujeme se na komplexní služby v oblasti pravidelných výdajů domácností. Realizujeme projekty, které jsou prospěšné široké veřejnosti. Díky tomu dokážeme přinést úsporu 10-25% měsíčně. NAŠÍM CÍLEM A VIZÍ JE SPOKOJENOST KLIENTA';
	
		/** Projects **/

		$this->data['projects']['project1']['title'] = 'SSPC CALL CENTRA';
		$this->data['projects']['project2']['title'] = 'SSPC FAMILY';
		$this->data['projects']['project3']['title'] = 'Síť kiosků EQUA BANK';
		$this->data['projects']['project4']['title'] = 'ACTIVE LIVE';
		$this->data['projects']['project5']['title'] = 'ACTIVE LIVE FAMILY';
		$this->data['projects']['project6']['title'] = 'SSPC vzdělávání';
		$this->data['projects']['project7']['title'] = 'HOME WORK';

		$this->data['projects']['project1']['text'] = 'Aktivní a pasivní projekty, podpora obchodníků.';
		$this->data['projects']['project2']['text'] = 'Služby klientům v oblasti výdajů domácností. Jjsme profesionálové a naším cílem je absolutní profesionalita našich obchodníků – nepracuje po bytech, neobtěžujeme – obchody realizujeme vždy přes předem domluvené schůzky.';
		$this->data['projects']['project3']['text'] = 'Provozujeme kontaktní kiosky banky po celé ČR.';
		$this->data['projects']['project4']['text'] = 'Aktivní projekty pro seniory, akce, společenské události a cestování.';
		$this->data['projects']['project5']['text'] = 'Aktivní projekty pro rodiny s dětmi, události, akce a cestování - spojujeme rodiče s dětmi a snažíme se utužit vztahy, vytváříme rodinná prostředí.';
		$this->data['projects']['project6']['text'] = 'Kurzy Komunikace po telefonu – pracujeme nejen s obchodníky na umění komunikovat po telefonu, umění zaujmout a prodat, ale komplexnosti jejich projevu, hlasu, tóniny a rétoriky - využíváme naše více než 6 leté zkušenosti.';
		$this->data['projects']['project7']['text'] = 'Pracuj z domu, projekt pro lidi, kteří mohou a chtějí pracovat z domu.';
		
		/** Edu **/

		$this->data['edu']['text1'] = 'Pracovat v SSPC je výzva, prestiž a také hrdost. Jde o příležitost změnit si vlastní život. V SSPC podporujeme v kariérním růstu každého, kdo má vůli, podnikatelské myšlení a chuť se vzdělávat. Klademe důraz na profesionalitu a zajímavé výdělky našich spolupracovníků za dobře odvedenou práci.';
		$this->data['edu']['text2'] = 'Vzdělání a správná kvalifikace našich spolupracovníků a manažerů je základním stavebním kamenem našeho úspěchu. Zaměřujeme se na individuální schopnosti a jejich rozvoj. Jak úspěšně komunikovat se svými spolupracovníky i klienty, jak si připravit obchodní jednání a jak je následně vést způsobem WIN-WIN.';
		$this->data['edu']['text3'] = 'Vždy se snažíme maximálně odměňovat a podporovat individuality a úspěšné spolupracovníky nejen finančně, ale také kariérně. Stojíme pouze o ty nejlepší z nejlepších.';
	}

	public function getData(){
		return $this->data;
	}
}