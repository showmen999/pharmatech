
<div class="container">
  <div class="row">
    <?php foreach($all_admin as $row){?>
    <div class="col-6">
      <div class="span2">
        <img src="asset/dashboard/img/new_logo.png"  alt="" class="img-rounded">
      </div>
      <div class="span4">
        <blockquote>
          <p><?php echo $row->admin_name?></p>
        </blockquote>
        <p>
          <i class="icon-envelope"></i> <?php echo $row->admin_email; ?> <br>
          <i class="icon-globe"></i> <?php echo $row->admin_number; ?> <br>
        </p>
      </div>
    </div>
 
    
    <?php } ?>
  </div>
</div>
<div class="counter">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="employees">
                    <p class="counter-count"><?php echo $c_appoint; ?></p>
                    <p class="employee-p">Appointment</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="customer">
                    <p class="counter-count"><?php echo $c_order; ?></p>
                    <p class="customer-p">Orders</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="design">
                    <p class="counter-count"><?php echo $c_medicine; ?></p>
                    <p class="design-p">Medicine</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="order">
                    <p class="counter-count"><?php echo $c_contact; ?></p>
                    <p class="order-p">Contact</p>
                </div>
            </div>
        </div>
    </div>
</div>