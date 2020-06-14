<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <?php foreach ($trucker as $row): ?>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center"><?php echo $row->name?></h4>
            </div>
            <div class="card-body">

            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-body">
              <!-- <form id="form_alterar_usuario" action="<?php echo base_url()?>usuarios/alterar_usuario" method="post"> -->
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" value="<?php echo $row->name?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="exemplo@email.com" value="<?php echo $row->email?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for="city">Cidade **</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="" value="<?php echo $row->city?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="state">Estado **</label>
                        <input type="text" name="state" id="state" class="form-control" placeholder="" value="<?php echo $row->state?>">
                      </div>
                    </div>
                  </div>
                <!-- <div class="row">
                  <div class="update ml-auto mr-auto">
                    <input type="hidden" name="id_usuario" value="<?php echo $row->id; ?>">
                    <button id="alterar_usuario" name="alterar_usuario" class="btn btn-primary btn-round" >Alterar</button>
                  </div>
                </div> -->
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title text-center">Avaliações realizadas</h4>
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
