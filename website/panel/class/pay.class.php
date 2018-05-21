<?php
session_start();
include_once('paypal.class.php');

class pay
{
	public $p;
	
	var $this_script = 'http://www.cschanger.eu/panel/class/payments.class.php';
	var $this_script_other = 'http://www.cschanger.eu/panel/premium.php';
	function __construct()
	{
		global $p;
		$this_script  = $this->this_script;
		$this_script_other  = $this->this_script_other;
		$p = new paypal;
		$CatDescription = $_REQUEST['CatDescription'];
		$payment = $_REQUEST['payment'];
		$id = $_REQUEST['id'];
		$key = $_REQUEST['key'];

		$p->add_field('business', 'kamilbialy76@gmail.com');
	  
		$p->add_field('return', $this_script_other.'?action=success');
		$p->add_field('cancel_return', $this_script_other.'?action=cancel');
		$p->add_field('notify_url', $this_script.'?action=ipn');
		
		$p->add_field('item_name', "Premium");
		
		$user_name = $_SESSION["login_name"];
		$user_id = $_SESSION["login_id"];
		$custom_code = substr(md5(date("d.m.Y.H.i.s").rand(1,1000000)) , 0 , 10000000000000);
		
		$p->add_field('on1', "ID");
		$p->add_field('os1', $user_id);
		$p->add_field('on2', "Nick");
		$p->add_field('os2', $user_name);
		$p->add_field('custom', $custom_code);
		
		$p->add_user_id($user_id);
	}
	
	public function item1()
	{
		global $p;
		$p->add_field('amount', "2.29");
		$p->add_field('currency_code', "USD");
		$p->add_field('on0', "Price");
		$p->add_field('os0', "$2.29 - 14Days");
	}
	
	public function item2()
	{
		global $p;
		$p->add_field('amount', "3.99");
		$p->add_field('currency_code', "USD");
		$p->add_field('on0', "Price");
		$p->add_field('os0', "$3.99 - 30Days");
	}
	
	public function item3()
	{
		global $p;
		$p->add_field('amount', "7.69");
		$p->add_field('currency_code', "USD");
		$p->add_field('on0', "Price");
		$p->add_field('os0', "$7.69 - 60Days");
	}
	function submit()
	{
		global $p;
		$p->submit_paypal_post();
	}
}
/*
if(isset($_GET["id"]))
{
	$px = new pay();
	switch($_GET["id"])
	{
		case 1: $px->item1(); $px->submit(); break;
	}
	
}*/
?>