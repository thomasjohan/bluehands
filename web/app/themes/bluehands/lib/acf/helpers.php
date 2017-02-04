<?php
//This file containes helpers for some advanced custom field action!

function flex_content_section_class($section_name, $style="", $section_class="") {
	$class = str_replace('_', '-', $section_name) . ' ';
	$class .= $style. ' ';
	$class .= $section_class;
	

	return trim($class);
}