<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Cadastrar usuário</h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Nome **</label>
                      <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?php echo set_value('nome'); ?>" autocomplete="off">
                      <?php echo form_error('nome'); ?>
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label for="perfil">Perfil **</label>
                      <select class="form-control" name="perfil" id="perfil">
                        <option value=""></option>
                        <option value="1">Administrador</option>
                        <option value="2">Agendador</option>
                      </select>
                      <?php echo form_error('perfil'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label for="email">E-mail **</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="<?php echo set_value('email'); ?>" autocomplete="off">
                      <?php echo form_error('email'); ?>
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label for="senha">Senha **</label>
                      <input type="password" name="senha" id="email" class="form-control" placeholder="Senha" value="" autocomplete="off">
                      <?php echo form_error('senha'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="cadastrar_usuario" class="btn btn-primary btn-round float-md-right float-sm-right float-xs-right">Cadastrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view('elements/footer');?>
