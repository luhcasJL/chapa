<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <?php foreach ($sos as $row): ?>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo $row->name?> - telefone</h4>
              <h4 class="card-title text-center"><?php echo $row->description?> - <?php echo $row->register?></h4>
            </div>
            <div class="card-body">

            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-body">
              <!-- <iframe src="https://embed.waze.com/iframe?zoom=12&lat='.<?php //echo $row->latitude; ?>.'&lon='.<?php //echo $row->longitude; ?>.'" width="100%" height="600px"></iframe> -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52491.28276725693!2d-44.93822676499057!3d-22.63636680020995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9eac47d15d629f%3A0x1581178fbc401586!2sRod.%20Pres.%20Dutra!5e0!3m2!1spt-BR!2sbr!4v1592148053152!5m2!1spt-BR!2sbr" width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
</div>
<?php $this->load->view('elements/footer');?>
