<?php

class Hyperlink extends DataObject {
	
	static $db = array(
		'Title' => 'Varchar',
		'Link' => 'LinkField',
		'Sort' => 'Int'
	);

	public function getCMSFields(){
		$fields = parent::getCMSFields();
		$fields->removeByName('Sort');
		return $fields;
	}

}