<div class="container" style="padding:0px;">
  <div class="row">
    <div class="col-md-12 font-normal">
      <?php if($this->session->userdata('donate')!=""):?>
        <?php foreach ($this->session->userdata('donate') as $r) {?>
          <div style="padding:10px 0px 10px 0px;">
            <?php echo $r->centre_donate_code;?>
          </div>
        <?php };?>
      <?php endif;?>
    </div>
  </div>
</div>
