<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>
<div class="sub-banner">
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="paging">
            <h2>Para os caminhoneiros</h2>
            <ul>
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a>Caminhoneiros</a></li>
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
                <li> <span>Sistema S.O.S exclusivo para de dar mais segurança <br> nas viagens.</span></li>
                  <li> <span>Praticidade na escolhas de pontos de parada.</span></li>
                  <li> <span>GPS inteligênte com avisos de lugares perigosos.</span></li>
                    <li> <span>Suporte a educação e saúde.</span></li>
                      <li> <span>Descontos em diversos tipos de lazer.</span></li>
                    </ul>

              </div>
            </div>
            <div class="col-md-6">
              <div id="demo">
                <div class="span12">
                  <div id="services-slide" class="owl-carousel">
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_seis.jpg" alt=""></div>
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_dois.jpg" alt=""></div>
                    <div class="item"><img src="<?php echo base_url(); ?>assets/images/slides/banner_um.jpg" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            </div>
            <div class="services-one dark-back">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="service-sec">
                      <div class="icon">
                        <i class="icon-patient-bed"></i>
                      </div>
                      <div class="detail">
                        <h5>Segurança</h5>
                        <p>O aplicativo possui um sistema de SOS que agiliza o atendimento em caso de assaltos.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="service-sec">
                      <div class="icon">
                        <i class="icon-ambulanc"></i>
                      </div>
                      <div class="detail">
                        <h5>Saúde</h5>
                        <p>O aplicativo possui um sistema de SOS que agiliza o atendimento em caso de emêrgencias.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="service-sec">
                      <div class="icon">
                        <i class="icon-mortar-pestle"></i>
                      </div>
                      <div class="detail">
                        <h5>Valorização</h5>
                        <p>Parcerias com as principais empresas que oferecem benefícios excluisivos para os caminhoneiros.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="service-sec">
                      <div class="icon">
                        <i class="icon-doctor"></i>
                      </div>
                      <div class="detail">
                        <h5>Financeiro</h5>
                        <p>Com as informações corretas para você gastar menos.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $this->load->view('elements/footer');?>
