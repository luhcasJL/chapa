<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Cadastrar empresa</h5>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>Nome **</label>
                      <input type="text" name="name" class="form-control" placeholder="Nome" value="<?php echo set_value('name'); ?>" autocomplete="off">
                      <?php echo form_error('name'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-1 pr-1">
                    <div class="form-group">
                      <label for="email">E-mail **</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="<?php echo set_value('email'); ?>" autocomplete="off">
                      <?php echo form_error('email'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="type">Tipo **</label>
                      <select class="form-control" name="type" id="type">
                        <option value=""></option>
                        <?php foreach ($types_company as $row): ?>
                          <option value="<?php echo $row->type ?>"><?php echo $row->description ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php echo form_error('perfil'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2 pr-md-1">
                    <div class="form-group">
                      <label for="cep">CEP</label>
                      <input type="text" name="cep" id="cep" class="form-control" maxlength="9"
                        onblur="pesquisacep(this.value);" value="<?php echo set_value('cep'); ?>">
                      <?php echo form_error('cep'); ?>
                    </div>
                  </div>
                  <div class="col-md-5 pr-md-1 pl-md-1">
                    <div class="form-group">
                      <label for="rua">Endereço</label>
                      <input type="text" name="rua" id="rua" class="form-control"
                        value="<?php echo set_value('rua'); ?>">
                      <?php echo form_error('rua'); ?>
                    </div>
                  </div>
                  <div class="col-md-2 pl-md-1 pr-md-1">
                    <div class="form-group">
                      <label for="numero">Número</label>
                      <input type="text" name="numero" id="numero" class="form-control"
                        value="<?php echo set_value('numero'); ?>">
                      <?php echo form_error('numero'); ?>
                    </div>
                  </div>
                  <div class="col-md-3 pl-md-1">
                    <div class="form-group">
                      <label for="cargo">Complemento</label>
                      <input type="text" name="complemento" id="complemento" class="form-control"
                        value="<?php echo set_value('complemento'); ?>">
                      <?php echo form_error('complemento'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label for="bairro">bairro</label>
                      <input type="text" name="bairro" id="bairro" class="form-control"
                        value="<?php echo set_value('bairro'); ?>">
                      <?php echo form_error('bairro'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1 pr-md-1">
                    <div class="form-group">
                      <label for="cidade">Cidade</label>
                      <input type="text" name="cidade" id="cidade" class="form-control"
                        value="<?php echo set_value('cidade'); ?>">
                      <?php echo form_error('cidade'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label for="uf">Estado</label>
                      <input type="text" name="uf" id="uf" class="form-control" value="<?php echo set_value('uf'); ?>">
                      <?php echo form_error('uf'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-md-1">
                    <div class="form-group">
                      <label for="latitude">Latitude</label>
                      <input type="text" name="latitude" id="latitude" class="form-control"
                        value="<?php echo set_value('latitude'); ?>">
                      <?php echo form_error('latitude'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1 pr-md-1">
                    <div class="form-group">
                      <label for="longitude">Longitude</label>
                      <input type="text" name="longitude" id="longitude" class="form-control" value="<?php echo set_value('uf'); ?>">
                      <?php echo form_error('longitude'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                    <div class="form-group">
                      <label for="description">Descrição</label>
                      <input type="text" name="summary" id="summary" maxlength="60" class="form-control" value="<?php echo set_value('summary'); ?>">
                      <?php echo form_error('summary'); ?>
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
