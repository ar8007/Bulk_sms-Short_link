<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>customer table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</body>
</head>
<body>
<a href="<?php echo base_url('home');?>"><button type="button" class="btn btn-success" style="margin-top:20px;margin-left:50px">Back to form</button></a>
	<h1 style="text-align:center" class="text-success">Customer informartion</h1>
  <div class="container">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
	  <th scope="col">Contact No.</th>
    <th scope="col">Orignal link</th>
	  <th scope="col">Offer link</th>
    <th scope="col">Message</th>
    <th scope="col">Status</th>
    <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	  <?php $i=1;?>
	<?php foreach($status as $status):?>
        <tr>
		<th scope="row"><?php echo $i++ ;?></th>
		<td><?php echo $status->phone;?></td>
    <td><?php echo $status->link;?></td>
		<td><?php echo $status->short_link;?></td>
    <td><?php echo $status->message;?></td>
		<td><?php echo $status->status;?></td>
    <td><?php echo form_open('home/delete_customer');
                          echo form_hidden('offer_id',$status->offer_id);
                          echo form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']);
                          echo form_close();
                    ?>
    </td>
	  </tr>
	<?php endforeach ;?>
    

  </tbody>
</table>
</div> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>


</body>
</html>