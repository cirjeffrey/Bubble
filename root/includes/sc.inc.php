<?php
//prevents getting to this page directly. Have to go through FindSG.php
if(!isset($_POST['criteria'])){
   header("Location: ../FindSG.php?enterSearchCriteria");
   exit();
}
include "dbh.inc.php";
    //***FOR WEBSITE EDITORS: add classes/ids to the tr/td tags then edit in a css file***

    //Display non full groups listed if no search criteria entered.	
    if($_POST['criteria'] != "empty"){
        $sc =  mysqli_real_escape_string($db_connection, $_POST['criteria']);
            
	    $select= mysqli_query($db_connection, "SELECT * FROM bGroup WHERE CONCAT(groupCreator, groupMajor, groupSubjectClass) LIKE '%$sc%' ORDER BY group_create_time DESC");

			
	    while($row = mysqli_fetch_assoc($select)){
		    //this needs to be styled
		    echo "
			    <tr>
				    <td> ".$row['groupSubjectClass']." </td>
				    <td> ".$row['groupCreator']." </td>
				    <td> ".$row['groupNumParticipants']." </td>
				    <td> <input type='button' value='Join'> </td>
			    </tr>
		    ";
				
	    }
    }
    //If no search criteria entered, show 5 most recent groups created.
    else{
        
        $select= mysqli_query($db_connection, "SELECT * FROM bGroup WHERE isFull = 0 ORDER BY group_create_time DESC");

		$counter = 0;
		while($row = mysqli_fetch_assoc($select)){
		    
			if($counter >= 5){
				break;
			}
			echo "
				<tr>
					<td> ".$row['groupSubjectClass']." </td>
					<td> ".$row['groupCreator']." </td>
					<td> ".$row['groupNumParticipants']." </td>
					<td> <input type='button' value='Join'> </td>
				</tr>
			";
			$counter++;
		}
    }
?>