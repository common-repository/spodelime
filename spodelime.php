<?php
/*
Plugin Name: Бутон за споделяне
Plugin URI: http://wordpress.org/extend/plugins/spodelime/
Description: Добавя бутон за споделяне в социални мрежи в края на всяка публикация.
Author: Васил Тошков
Author URI: http://spodelime.com/
Version: 1.5
*/

function spodelime($content) {
	if(is_single()) {
		$anchor[] = "бутон за сайт";
		$anchor[] = "бутон за споделяне";
		$anchor[] = "бутони за споделяне";
		$anchor[] = "бутон за социални мрежи";
		$anchor[] = "бутони за социални мрежи";
		$anchor[] = "бутони към социални мрежи";
		$anchor[] = "споделяне на връзка";
		$anchor[] = "споделяне в социални мрежи";
		$anchor[] = "share button";
		$anchor[] = "сподели ме";
		$anchor[] = "сподели бутон";
		$anchor[] = "социални мрежи";
		$anchor[] = "социални бутони";
		$anchor[] = "социално споделяне";
		$anchor[] = "spodelime";
		$anchor[] = "spodelime.com";
		$anchor[] = "споделяне във facebook";

		$salt = crc32($_SERVER['REQUEST_URI']);
		mt_srand($salt);
		$index = mt_rand(0, count($anchor)-1);

		$content.= "<p>";
		$content.= "<a href=\"http://spodelime.com/\" class=\"spodelime\">{$anchor[$index]}</a>";
		$content.= "<script src=\"//spodelime.com/sm.js\" async></script>";
		$content.= "</p>\n";
	}
	return($content);
}
add_filter("the_content", "spodelime");
