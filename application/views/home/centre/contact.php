<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12">
      <?php if(isset($contact)):?>
        <?php foreach ($contact as $r) {?>
          <div>
            <p style="font-weight:bold; font-size:20px; color:#5dbfec;">ที่อยู่</p>
            <hr style="margin:0px; border:1px solid black;">
            <div class="col-md-8" style="margin:30px 0px 30px 0px;">
              <div style="width:100%; height:400px;">
                <img src="" alt="" title="" class="w-100 h-100">
              </div>
            </div>
          </div>
          <div>
            <p style="font-weight:bold; font-size:20px; color:#5dbfec;"><?php echo $r->centre_contact_name;?></p>
            <hr style="margin:0px; border:1px solid black;">
            <div style="margin:30px 0px 30px 0px;">
              <p><?php echo $r->centre_contact_from;?><br>
              โทรศัพท์ <?php echo $r->centre_contact_phone;?> โทรสาร <?php echo $r->centre_contact_fax;?><br>
              อีเมล : <?php echo $r->centre_contact_email;?> </p>
            </div>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>
</div>
