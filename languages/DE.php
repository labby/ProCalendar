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

$monthnames = array(1=>"Januar", "Februar", "M&auml;rz", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember");
$weekdays = Array(1=>"Mo", "Di", "Mi", "Do", "Fr", "Sa", "So");
$public_stat = array("&ouml;ffentlich", "privat", "eingeloggt");
$CALTEXT['CAL-OPTIONS'] = "Optionen";
$CALTEXT['CAL-OPTIONS-STARTDAY'] = "Erster Wochentag";
$CALTEXT['CAL-OPTIONS-STARTDAY-1'] = "Montag";
$CALTEXT['CAL-OPTIONS-STARTDAY-2'] = "Sonntag";
$CALTEXT['CAL-OPTIONS-USETIME'] = "Uhrzeit";
$CALTEXT['CAL-OPTIONS-USETIME-1'] = "Uhrzeit nicht verwenden";
$CALTEXT['CAL-OPTIONS-USETIME-2'] = "Uhrzeit verwenden";
$CALTEXT['CAL-OPTIONS-FORMAT'] = "Datumsformat";
$CALTEXT['CAL-OPTIONS-ONEDATE'] = "Datum";
$CALTEXT['CAL-OPTIONS-ONEDATE-1'] = "Nur Startdatum verwenden";
$CALTEXT['CAL-OPTIONS-ONEDATE-2'] = "Start- und Enddatum verwenden";
$CALTEXT['CATEGORY-MANAGEMENT'] = "Kategorien verwalten";
$CALTEXT['CATEGORY'] = "Kategorie";
$CALTEXT['CHOOSE-CATEGORY'] = "Kategorie...";
$CALTEXT['ACTIVE'] = "Aktiv";
$CALTEXT['BACK'] = "&laquo; Zur&uuml;ck";
$CALTEXT['DATE-AND-TIME'] = "Datum und Uhrzeit";
$CALTEXT['NOTIME'] = "Keine Uhrzeit vorhanden...";
$CALTEXT['NODATES'] = "Keine Eintr&auml;ge vorhanden...";
$CALTEXT['NODETAILS'] = "Keine Details vorhanden...";
$CALTEXT['TIMESTR'] = "Uhr";
$CALTEXT['DEADLINE'] = "Ende";
$CALTEXT['DELETE'] = "L&ouml;schen";
$CALTEXT['DESCRIPTION'] = "Beschreibung";
$CALTEXT['NO_DESCRIPTION'] = "Keine Beschreibung verf&uuml;gbar...";
$CALTEXT['FROM'] = "Von";
$CALTEXT['NEW-EVENT'] = "Neuer Termin";
$CALTEXT['NEW'] = "Neu";
$CALTEXT['NON-SPECIFIED'] = "nichts hinterlegt";
$CALTEXT['NAME'] = "Bezeichnung";
$CALTEXT['SAVE'] = "Speichern";
$CALTEXT['VISIBLE'] = "Sichtbarkeit";
$CALTEXT['SETTINGS'] = "Optionen";
$CALTEXT['ADVANCED-SETTINGS'] = "Erweiterte Optionen";
$CALTEXT['SAVE-AS-NEW'] = "Als neu speichern";
$CALTEXT['TO'] = "Ende";
$CALTEXT['USE-THIS'] = "Verwenden";
$CALTEXT["CALENDAR-DEFAULT-TEXT"] = ""; // put default item title here if you like
$CALTEXT["CALENDAR-BACK-MONTH"] = "Monats&uuml;bersicht";
$CALTEXT['DATE'] = "Datum";
$CALTEXT['CUSTOMS'] = "Eigene Felder";
$CALTEXT['CUSTOM'] = "Eigenes Feld";
$CALTEXT['CUSTOM_TEMPLATE'] = "Feld-Template";
$CALTEXT['USE_CUSTOM'] = "Typ";
$CALTEXT['CUSTOM_NUMBER'] = "Feld Nummer";
$CALTEXT['CUSTOM_TYPE'] = "Feldtyp";
$CALTEXT['CUSTOM_NAME'] = "Feldbezeichnung";
$CALTEXT['CUSTOM_OPTIONS-0'] = "Nicht benutzt";
$CALTEXT['CUSTOM_OPTIONS-1'] = "Textfeld";
$CALTEXT['CUSTOM_OPTIONS-2'] = "Textarea";
$CALTEXT['CUSTOM_OPTIONS-3'] = "Link";
$CALTEXT['CUSTOM_OPTIONS-4'] = "Bild";
$CALTEXT['CUSTOM_SELECT_IMG'] = "Bild ausw&auml;hlen";
$CALTEXT['CUSTOM_CHOOSE_IMG'] = "Kein Bild";
$CALTEXT['CUSTOM_SELECT_WBLINK'] = "Seite ausw&auml;hlen";
$CALTEXT['RESIZE_IMAGES'] = "Bildgr&ouml;&szlig;e &auml;ndern";
$CALTEXT['SUPPORT_INFO'] = "Hinweise zum Modul";
$CALTEXT['SUPPORT_INFO_INTRO'] = "Bitte lies vor Verwendung des Moduls die ";
$CALTEXT['FORMAT_ACTION'] = "Mit dem Ballsymbol k&ouml;nnen Sie eine Farbe f&uuml;r die Kategorie festlegen";
$CALTEXT['FORMAT_DAY'] = "Diese Farbe im Kalender benutzen?";
$CALTEXT['MAKE_REC'] = "Wiederholender Termin?";
$CALTEXT['DAILY'] = "t&auml;glich";
$CALTEXT['WEEKLY'] = "w&ouml;chentlich";
$CALTEXT['MONTHLY'] = "monatlich";
$CALTEXT['YEARLY'] = "j&auml;hrlich";
$CALTEXT['DAYS'] = "Tage";
$CALTEXT['DAY'] = "Tag";
$CALTEXT['EVERY'] = "Jeden";
$CALTEXT['EVERY_SINGLE'] = "Jede";
$CALTEXT['WEEK_ON'] = "Woche am";
$CALTEXT['OF_EVERY'] = "jedes";
$CALTEXT['OF_MONATS'] ="Monats";
$CALTEXT['IN'] ="im";
$CALTEXT['COUNT'] =Array(1=>"ersten", "zweiten", "dritten", "vierten", "letzten");
$CALTEXT['NOT_AT'] ="Nicht am";
$CALTEXT['USE_EXCEPTION'] = "Ausnahmen zulassen?";
$CALTEXT['DATES'] = "Termine";
$CALTEXT['NEVER'] = "niemals";
$CALTEXT['ISREC_MESSAGE'] = "Dieser Termin ist Teil einer Terminserie. \n&quot;OK&quot; - um die ganze Serie zu &auml;ndern. \n&quot;Abbrechen&quot; - um den Termin zu &uuml;berschreiben oder einen neuen Termin anzulegen.";
$CALTEXT['REC_OVERWRITE_MESSAGE'] = "Dieser Temin &uuml;berschreibt eine Terminserie. \nWenn Sie diesen Termin l&ouml;schen, wird der urspr&uuml;ngliche Termin der Serie wieder aktiv.";
$CALTEXT['REC_OVERWRITE'] = "&Uuml;berschreiben";
?>