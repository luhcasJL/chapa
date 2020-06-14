<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">SOS</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabelaum" class="table table-striped">
                  <thead class=" text-primary">
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Detalhes</th>
                  </thead>
                  <tbody>
                    <?php foreach ($sos as $row): ?>
                      <tr>
                        <td><?php echo $row->name?></td>
                        <td><?php echo $row->description?></td>
                        <td><?php echo $row->latitude?></td>
                        <td><?php echo $row->longitude?></td>
                        <td>
                          <a href="<?php echo base_url()?>sos/detail/<?php echo $row->id?>">
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
<?php $this->load->view('elements/footer');?>
