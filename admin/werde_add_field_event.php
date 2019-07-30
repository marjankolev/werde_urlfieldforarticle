<?php

class Werde_Add_Field_Event extends oxUBase{

	public static function onActivate(){
        self:: addUrlField();
    }	

    public static function addUrlField(){
    	$oDbMetadata = oxNew('oxDbMetaDataHandler');
    	if(!$oDbMetadata->fieldExists('oxarticles_url', 'oxarticles')){
    		$queryAddURLField = "ALTER TABLE oxarticles
        					 ADD oxarticles_url VARCHAR(255) NOT NULL DEFAULT '';";
        	oxDb::getDb()->Execute($queryAddURLField);
    	}
    	
    }	
}