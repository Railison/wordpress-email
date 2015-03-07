<?php
/*
Plugin Name: Wordpress Email - RAIV Informática
Description: Solução para Hospedagem LocaWeb, Para pobremas de envio de email.
Author: Railison Venancio
Author URI: http://raivinformatica.com
Plugin URI: http://raivinformatica.com
Version: 0.1
License: GPLv2
*/
class email_return_path {
  	function __construct() {
		add_action( 'phpmailer_init', array( $this, 'fix' ) );    
  	}

	function fix( $phpmailer ) {
	  	$phpmailer->Sender = $phpmailer->From;
	}
}

new email_return_path();