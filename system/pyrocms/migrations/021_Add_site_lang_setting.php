<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_site_lang_setting extends Migration {

	function up()
	{
		$this->migrations->verbose AND print "Added setting - site_lang.";

		$this->db->insert('settings', array(
			'slug'			=> 'site_lang',
			'title'			=> 'Site Language',
			'description'	=> 'The native language of the website, used to choose templates of e-mail internal notifications and receiving visitors contact and other features that should not bend the language of a user.',
			'type'			=> 'text',
			'default'		=> 'en',
			'value'			=> '',
			'options'		=> '',
			'module'		=> '',
			'is_required'	=> 1,
			'is_gui'		=> 1
		));
	}

	function down()
	{
		$this->db->delete('settings', array('slug' => 'site_lang'));
	}
}