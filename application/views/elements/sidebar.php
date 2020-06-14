<?php $paginaCorrente = $_SERVER['REQUEST_URI'];?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="index.html" class="logo"><img src="<?php echo base_url(); ?>assets/images/chapa.jpg" alt=""></a>
      </div>
      <div class="col-md-9">
        <nav class="menu-2">
          <ul class="nav wtf-menu">
            <li <?php if ($paginaCorrente == '/chapa/'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>">Home</a></li>
            <li <?php if ($paginaCorrente == '/chapa/parceiros'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>parceiros">Seja um parceiro</a>
            </li>
            <li <?php if ($paginaCorrente == '/chapa/ccr'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>ccr">CCR</a>
            </li>

            <li <?php if ($paginaCorrente == '/chapa/caminhoneiros'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>caminhoneiros">Caminhoneiros</a>
            </li>
            <li <?php if ($paginaCorrente == '/chapa/cadastro'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>cadastro">Cadastro</a></li>
            <li <?php if ($paginaCorrente == '/chapa/painel'){echo "class='active-sidebar parent'";}else{echo "class='parent'";}?>><a href="<?php echo base_url(); ?>painel/login">Painel</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!--End Header-->

<!-- Mobile Menu Start -->
<div class="container">
  <div id="page">
    <header class="header">
      <a href="#menu"></a>

    </header>

    <nav id="menu">
      <ul>
        <li class="select"><a href="#.">Home</a>
          <ul>
            <li class="select"> <a href="index.html">Home Page 1</a> </li>
            <li> <a href="index2.html">Home Page 2</a> </li>
            <li> <a href="index3.html">Home Page 3</a> </li>
            <li> <a href="index4.html">Home Page 4</a> </li>
          </ul>
        </li>
        <li><a href="#.">About us</a>
          <ul>
            <li> <a href="about-us.html">About Us</a> </li>
            <li> <a href="about-us2.html">About Us 2</a> </li>
          </ul>
        </li>
        <li><a href="#.">Pages</a>
          <ul>
            <li> <a href="services.html">Services</a> </li>
            <li> <a href="services2.html">Services Two</a> </li>
            <li> <a href="appointment.html">Appointment</a> </li>
            <li> <a href="departments.html">Departments</a> </li>
            <li> <a href="patient-and-family.html">Patient and Family</a> </li>
            <li> <a href="team-members.html">Team Members One</a> </li>
            <li> <a href="team-members2.html">Team Members Two</a> </li>
            <li> <a href="research.html">Research</a> </li>
            <li> <a href="tables.html">Pricing tabels</a> </li>
          </ul>
        </li>

        <li><a href="procedures.html">Procedures</a></li>

        <li><a href="#.">Gallery</a>

          <ul>
            <li><a href="#.">Simple Gallery</a>
              <ul>
                <li> <a href="gallery-simple-two.html">Columns Two</a> </li>
                <li> <a href="gallery-simple-three.html">Columns Three</a> </li>
                <li> <a href="gallery-simple-four.html">Columns Four</a> </li>
              </ul>
            </li>

            <li><a href="#.">Nimble Gallery</a>
              <ul>
                <li> <a href="gallery-nimble-two.html">Columns Two</a> </li>
                <li> <a href="gallery-nimble-three.html">Columns Three</a> </li>
                <li> <a href="gallery-nimble-four.html">Columns Four</a> </li>
              </ul>
            </li>
          </ul>

        </li>


        <li><a href="#.">News Posts</a>
          <ul>
            <li> <a href="news-sidebar.html">Sidebar</a> </li>
            <li> <a href="news-text.html">Text-Based</a> </li>
            <li> <a href="news-single.html">Single Post</a> </li>
            <li> <a href="news-double.html">Double Post</a> </li>
            <li> <a href="news-masonary.html">Masonary</a> </li>
          </ul>
        </li>

        <li><a href="shop.html">Shop</a></li>

        <li><a href="#.">Contact Us</a>
          <ul>
            <li> <a href="contact-us.html">Contact-Us One</a> </li>
            <li> <a href="contact-us2.html">Contact-Us Two</a> </li>
          </ul>
        </li>

      </ul>


    </nav>
  </div>
</div>
<!-- Mobile Menu End -->
