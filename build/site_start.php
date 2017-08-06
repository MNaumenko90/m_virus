<?php
/**
 * Шаблон стартовой страницы сайта
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2017 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<insert name="show_include" file="header">

<main class="content">
    <insert name="show_text">
    <br>
    <div class="border-form">
    	<div class="row">
    		<div class="column small-24 text-center">
    			<strong class="larger-font">Заполните эту форму и мы перезвоним в течение рабочего дня</strong>
    		</div>
    	</div>
    	<br>
    	<div class="row text-center">
            <insert name="show_form" module="feedback">
    	</div>
    </div>
    <br>
    <br>
    <br>
</main>

<insert name="show_include" file="footer">