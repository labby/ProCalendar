/**
 *	Backend Javascript for ProCalendar
 */
 
function procalendar_change_cat( aBaseURL, aPageID, aSectionID, aLeptokenHash, aGroupID ) {
	var s = aBaseURL+"?page_id="+aPageID;
	s += "&section_id="+aSectionID;
	s += "&group_id="+aGroupID;
	s += "&leptoken="+aLeptokenHash;
	
	document.location.href= s;
//document.location.href='http://localhost:8888/projekte/lepton_2/upload/modules/procalendar/modify_settings.php?page_id=6&amp;section_id=6&amp;leptoken=a69733c4742f12f909301z1468270310&amp;group_id=&amp;leptoken=906baeeac5e7ed25722a5z1468270320'+this.value


}