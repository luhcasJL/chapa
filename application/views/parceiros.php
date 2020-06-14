<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>
<div class="sub-banner">
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="paging">
            <h2>Seja um parceiro</h2>
            <ul>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a>Parceiros</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="content">
  <div class="research">
    <div class="container">
      <div class="research-sec">
        <div class="row">
          <div class="how-treat">
            <div class="col-md-6">
              <ul class="research-detail">
                <li> <span>O Brasil possui mais de 2 milhões de caminhoneiros.</span></li>
                <li> <span>Seja visto via aplicativo em tempo real.</span></li>
                  <li> <span>Aumente o faturamento enquanto apoia a valorização da profissão que move o mundo.</span></li>
                  <li> <span>Receba feedbacks sobre o atendimento e ganhe mais clientes com isso.</span></li>
                    </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div id="demo">
                <div class="span12">
                  <div id="services-slide" class="owl-carousel">
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_sete.jpg" alt=""></div>
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_oito.jpg" alt=""></div>
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_nove.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <h1>Entre em contato para fazer parte</h1>
            <div class="col-md-5">
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="">&nbsp;</label>
                <button type="button" class="btn btn-primary form-control" name="button">Enviar</button>
              </div>
            </div>
          </div>
        </div>

            </div>
          </div>
        </div>
        <?php $this->load->view('elements/footer');?>
