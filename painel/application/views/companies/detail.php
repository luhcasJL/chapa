<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <?php foreach ($company as $row): ?>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo $row->name?></h4>
              <span><?php echo $row->summary; ?></span>
            </div>
            <div class="card-body">

            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 pr-1">
                  <div class="form-group">
                    <label>Nome **</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome" value="<?php echo $row->name; ?>" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-4 pl-1 pr-1">
                  <div class="form-group">
                    <label for="email">E-mail **</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" value="<?php echo $row->email; ?>" autocomplete="off">
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
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 pr-md-1">
                  <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" class="form-control" maxlength="9"
                      onblur="pesquisacep(this.value);" value="<?php echo $row->cep; ?>">
                  </div>
                </div>
                <div class="col-md-5 pr-md-1 pl-md-1">
                  <div class="form-group">
                    <label for="rua">Endereço</label>
                    <input type="text" name="rua" id="rua" class="form-control" value="<?php echo $row->adress; ?>">
                  </div>
                </div>
                <div class="col-md-2 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $row->number; ?>">
                  </div>
                </div>
                <div class="col-md-3 pl-md-1">
                  <div class="form-group">
                    <label for="cargo">Complemento</label>
                    <input type="text" name="complemento" id="complemento" class="form-control" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label for="bairro">bairro</label>
                    <input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo $row->neighborhood; ?>">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1 pr-md-1">
                  <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $row->city; ?>">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label for="uf">Estado</label>
                    <input type="text" name="uf" id="uf" class="form-control" value="<?php echo $row->state; ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="text" name="latitude" id="latitude" class="form-control" value="<?php echo $row->latitude; ?>">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="text" name="longitude" id="longitude" class="form-control" value="<?php echo $row->longitude; ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">Avaliações recebidas</h4>
            </div>
            <div class="card-body">
              <table id="tabelaum" class="table table-striped">
                <thead class=" text-primary">
                  <th>Nome</th>
                  <th>Perfil</th>
                  <th>E-mail</th>
                  <th>Detalhes</th>
                </thead>
                <tbody>
                  <?php foreach ($ratings as $row): ?>
                    <tr>
                      <td><?php echo $row->company?></td>
                      <td><?php echo $row->rating?></td>
                      <td><?php echo $row->testimony?></td>
                      <td>
                        <a href="<?php echo base_url()?>usuarios/detalhe/<?php echo $row->id?>">
                          <i class="nc-icon nc-zoom-split"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalAlterar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Realmente editar dados?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="btn_modal_alterar_usuario" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('elements/footer');?>
<script type="text/javascript">
  $(document).on('click', '#alterar_usuario',  function(){
    $('#modalAlterar').modal('show');
    return false;
  });

  $(document).on('click', '#btn_modal_alterar_usuario', function(){
    $('#form_alterar_usuario').submit();
  });
</script>
