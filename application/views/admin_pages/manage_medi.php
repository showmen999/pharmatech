<div class="container">
    <table class="table" id="myTable">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Generic Name</th>
        <th scope="col">Strength</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($all_medicine_data as $row){?>
        <tr>
            <th scope="row"><?php echo $row->medicine_id;?></th>
            <td><?php echo $row->medicine_name;?></td>
            <td><?php echo $row->medicine_generic_name;?></td>
            <td><?php echo $row->medicine_strength;?></td>
            <td><?php echo $row->price;?></td>
            <td>
                <a href="<?php echo base_url()?>edit-medicine/<?php echo $row->medicine_id;?>" class="btn btn-warning btn-sm">Edit</a>
                
            </td>
            <td>
                <a href="<?php echo base_url()?>delete-medicine/<?php echo $row->medicine_id;?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>