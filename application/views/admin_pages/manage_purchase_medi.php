
<div class="container" style="margin: 0 auto">
  <table class="table ml-5 " style="width: 90%" id="myTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Apoint ID</th>
        <th scope="col">Buyer Name </th>
        <th scope="col">Buyer Contact</th>
        <th scope="col">Prescription</th>
        <th scope="col">Preferred Data</th>
        <th scope="col">Buyer Address</th>
        <th scope="col">Medicine Name</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($all_medicine as $row){ ?>
      <tr>
      <th scope="row"><?php echo $row->id;?></th>
        <td><?php echo $row->buyer_name;?></td>
        <td><?php echo $row->buyer_contact;?></td>
        <td><img class="myImg" src="<?php echo $row->patient_prescrip?>" alt="Snow" style="width:100%;max-width:300px"></td>

        <td><?php echo $row->date;?></td>
        <td><?php echo $row->buyer_address;?></td>
        <td><?php echo $row->buyer_medicine;?></td>
        <td>
          <?php 
            $st = $row->status;

            if($st == 1){ ?>
                <a class="btn btn-info">Checked</a>
            <?php }
            else{ ?>
                <a href="admin_controller/check_purchase?cid=<?php echo $row->id;?>&cval=<?php echo $row->status?>" class="btn btn-warning">Unchecked</a>
          <?php }

          ?>
      </td>
      </tr>
      <?php }?>
      
    </tbody>
  </table>
</div>




