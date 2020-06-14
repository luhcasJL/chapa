<?php $paginaCorrente = $_SERVER['REQUEST_URI'];?>
<div class="sidebar" data-color="white" data-active-color="danger">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="" class="simple-text logo">
      <div class="logo-image">
        <img src="<?php echo base_url();?>assets/img/chapa.jpg">
      </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php echo(strpos($paginaCorrente, '/inicio') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>inicio">
          <i class="nc-icon nc-bank"></i>
          <p>Início</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/sos') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>sos">
          <i class="nc-icon nc-diamond"></i>
          <p>SOS</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/truckers') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>truckers">
          <i class="nc-icon nc-diamond"></i>
          <p>Caminhoneiros</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/companies') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>companies">
          <i class="nc-icon nc-diamond"></i>
          <p>Empresas</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/usuarios') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>usuarios">
          <i class="nc-icon nc-diamond"></i>
          <p>Usuarios</p>
        </a>
      </li>

      <li class="active-pro">
        <a href="<?php echo base_url();?>login/logout">
          <i class="nc-icon nc-button-power"></i>
          <p>Sair</p>
        </a>
      </li>
    </ul>
  </div>
</div>
