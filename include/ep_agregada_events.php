<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_ep_agregada  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeImport"]=true;

		$this->events["AfterImport"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Import Started
function BeforeImport($pageObject, &$message)
{

		$sql = DB::prepareSQL("TRUNCATE TABLE dbsep.ep_agregada;");
DB::Exec( $sql );


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeImport

		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, $pageObject)
{

		$sql = DB::prepareSQL("UPDATE	dbsep.ep_agregada SET	dbsep.ep_agregada.FECHA_ACTUALIZACION = CURRENT_DATE;");
DB::Exec( $sql );



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
