/**
 *	Backend Javascript for ProCalendar
 */
 
function procalendar_change_cat( aBaseURL, aPageID, aSectionID, aLeptokenHash, aGroupID ) {
	var s = aBaseURL+"?page_id="+aPageID;
	s += "&section_id="+aSectionID;
	s += "&group_id="+aGroupID;
	s += "&leptoken="+aLeptokenHash;
	
	document.location.href= s;

}