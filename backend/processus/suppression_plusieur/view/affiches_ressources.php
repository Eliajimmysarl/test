<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="">Recuperes tous</a>
	</li>
	<li class="active">
		<strong>Recuperer</strong>
	</li>
</ol>

								
		
		<br />
		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
				    <TH>#</TH>
					<th>Text</th>
					<th>Select</th>
					<th >Date</th>
					<th>Email</th>
					<th >Telephone</th>
					<th >Radio</th>
					<th></th>
	
				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i < count($ajoutes); $i++)
				{         
					echo"                         
               			 <tr class='odd gradeX'>
								<td>$i</td>
					<td > " . $ajoutes[$i]->text ."</td>
					<td>". $ajoutes[$i]->select ."</td>
					<td>". $ajoutes[$i]->date ."</td>
					<td > ". $ajoutes[$i]->telephone ." </td>
					<td >". $ajoutes[$i]->email."</td>
					<td > ". $ajoutes[$i]->optionsRadios." </td>
					<td> <a href='?page=modifier_ajoute&id=". $ajoutes[$i]->id ."' class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Modifier</a> <a href='?page=supprimer_ajoute&id=". $ajoutes[$i]->id ."' class='btn btn-danger btn-sm btn-icon icon-left'><i class='entypo-cancel'></i>Supprimer</a> <a href='?page=recuperer_ajoute&id=". $ajoutes[$i]->id ."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Profile</a></td>
				</tr>";
						         
				}
				?>

               <thead>
				<tr>
                <TH>#</TH>
					<th>Text</th>
					<th>Select</th>
					<th >Date</th>
					<th>Email</th>
					<th >Telephone</th>
					<th >Radio</th>
					<th></th>
	
				</tr>
			</thead>
		</table>
		
		<br />
		
	

		
	
			
		
	





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
