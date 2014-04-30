<?php
class AdminController extends AppController {

	var $name = 'Admin';
	var $uses = array('player','card','playersCard');
	var $layout = "sg";
	
	function index() {
	
	   $fields = array(
	       "fields" => array(
	       "id",
	       "name"));
	   
       echo('<pre>');
       var_dump($players = $this->player->find('list',$fields));
       var_dump($cards = $this->card->find('list'));
       echo('</pre>');
       
       $this->set('players',$players);
       $this->set('cards',$cards);
	}
	
}