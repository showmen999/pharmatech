
<div class="container" style="margin 0 auto">
<table class="table ml-5 " style="width: 90%" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name </th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Message</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($all_contact as $row){ ?>
    <tr>
    <th scope="row"><?php echo $row->cnt_id;?></th>
      <td><?php echo $row->cnt_name;?></td>
      <td><?php echo $row->cnt_email;?></td>
      <td><?php echo $row->cnt_number;?></td>
      <td><?php echo $row->cnt_msg;?></td>
    </tr>
    <?php }?>
    
  </tbody>
</table>

</div>
