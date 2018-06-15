<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12">
      <?php if($this->session->userdata('about')!=""):?>
        <?php foreach ($this->session->userdata('about') as $r) {?>
          <div>
            <?php echo $r->centre_about_code;?>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>
</div>
