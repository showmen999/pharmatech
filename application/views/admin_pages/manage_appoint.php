
<div class="container">
<table class="table" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Apoint ID</th>
      <th scope="col">Patient Name </th>
      <th scope="col">Patient E-Mail</th>
      <th scope="col">Contact</th>
      <th scope="col">Preferred Doctor</th>
      <th scope="col">Preferred Date</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach($all_appoint as $row){
    if($row->doctor == 1){
      $doc_name = "DR. IQBAL AHMED CHOWDHURY (Medicine)";
    }
    else if($row->doctor == 2){
      $doc_name = "DR. RABEYA BEGUM (Gynecology)";
    }
    else if($row->doctor == 3){
      $doc_name = "DR. FARZANA HAMID (Pediatric Medicine)";
    }
    else{
      $doc_name = "No Mention";
    }
  ?>
    <tr>
      <th scope="row"><?php echo $row->id;?></th>
      <td><?php echo $row->name;?></td>
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->phone;?></td>
      <td><?php echo $doc_name;?></td>
      <td><?php echo $row->date;?></td>

      <td>
        <?php 
          $st = $row->status;

          if($st == 1){ ?>
              <a class="btn btn-info">Checked</a>
          <?php }
          else{ ?>
              <a href="admin_controller/check_sts?cid=<?php echo $row->id;?>&cval=<?php echo $row->status?>" class="btn btn-warning">Unchecked</a>
         <?php }

        ?>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
