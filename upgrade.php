<?php
/*

 Website Baker Project <http://www.websitebaker.org/>
 Copyright (C) 2004-2006, Ryan Djurovich

 Website Baker is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Website Baker is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Website Baker; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

*/

// Must include code to stop this file being access directly
if(defined('LEPTON_PATH') == false) { exit("Cannot access this file directly"); }

echo '<div class="info"><B>Updating database for module: procalendar</B></div>';

// adding fields new in version 1.2:
//get settings table to see what needs to be created
$table = $database->query("DESCRIBE `".TABLE_PREFIX."mod_procalendar_eventgroups` 'format'");
// If not already there, add new fields to the existing settings table
echo'<div class="info"><b>Adding new fields to the settings table</b></div>';

if (!$table->numRows()){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_eventgroups` ADD `format` VARCHAR(255) NOT NULL default '' AFTER `name`";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `format` successfully</div>';
	}
}

$table = $database->query("DESCRIBE `".TABLE_PREFIX."mod_procalendar_eventgroups` 'format_days'");
if (!$table->numRows()){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_eventgroups` ADD `format_days` INT NOT NULL default '0' AFTER `format`";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `format_days` successfully</div>';
	}
}

$table=$database->query("SELECT * FROM `".TABLE_PREFIX."mod_procalendar_actions`");
$fields = $table->fetchRow();

if (!isset($fields['rec_id'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_id` INT NOT NULL default '0'";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_id` successfully</div>';
	}
}

if (!isset($fields['rec_day'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_day` VARCHAR(255) NOT NULL";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_day` successfully</div>';
	}
}

if (!isset($fields['rec_week'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_week` VARCHAR(255) NOT NULL";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_week` successfully</div>';
	}
}

if (!isset($fields['rec_month'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_month` VARCHAR(255) NOT NULL";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_month` successfully</div>';
	}
}

if (!isset($fields['rec_year'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_year` VARCHAR(255) NOT NULL";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_year` successfully</div>';
	}
}

if (!isset($fields['rec_count'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_count` SMALLINT NOT NULL default '0'";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_count` successfully</div>';
	}
}

if (!isset($fields['rec_exclude'])){
	$qs = "ALTER TABLE `".TABLE_PREFIX."mod_procalendar_actions` ADD `rec_exclude` VARCHAR(255) NOT NULL";
	$database->query($qs);
	if($database->is_error()) {
		echo '<div class="warning">'.($database->get_error()).'</div><br />';
	} else {
		echo '<div class="info">Added new field `rec_exclude` successfully</div>';
	}
}

echo '<div class="info"><B>Module proclendar updated to version: 1.3</B></div>';
echo '<div class="info"><B>Module proclendar updated to version: 1.4</B></div>';
