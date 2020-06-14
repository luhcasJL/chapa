<div id="load" style="display: none;">
  <div class="loader"></div>
</div>


<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">
    <!-- <div class="row">
      <nav class="footer-nav">
        <ul>
          <li>
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
          </li>
        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
        </span>
      </div>
    </div> -->
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/js/core/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<!-- script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script-->
<!-- Chart JS -->
<script src="<?php echo base_url()?>assets/js/plugins/chartjs.min.js"></script>
<!-- Full Calendar -->
<script src="<?php echo base_url()?>assets/fullcalendar/core/main.min.js"></script>
<script src="<?php echo base_url()?>assets/fullcalendar/daygrid/main.min.js"></script>
<script src="<?php echo base_url()?>assets/fullcalendar/list/main.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url()?>assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/js/endereco.js"></script>
<script src="<?php echo base_url()?>assets/js/gss.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mask.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/valida_cpf_cnpj.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.maskMoney.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
 $('.select_write').select2();

 $("#nascimento").mask("99/99/9999");
 $("#telefone").mask("(99) 99999-9999");
 $("#cpf").mask("999.999.999-99");
 $("#cep").mask("99999-999");
 $("#cnpj").mask("99.999.999/9999-99");
 $("#placa").mask("aaa - 9999");
});

$('#tabelaum').DataTable({
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  },
  initComplete: function () {
    this.api().columns().every( function (colIdx) {
      var column = this;
      var titulo = $(column.footer()).text();
      console.log(titulo);
      if (titulo == "Palestrante" || titulo == "Status") {
        var select = $('<select class="filtertable"><option value=""></option></select>')
        .appendTo( $(column.footer()).empty() )
        .on( 'change', function () {
          var val = $.fn.dataTable.util.escapeRegex(
            $(this).val()
            );

          column
          .search( val ? val : '', true, false )
          .draw();
        } );

        column.data().unique().sort().each( function ( d, j ) {
          select.append( '<option value="'+d+'">'+d+'</option>' )
        } );
      } else {
        $(column.footer()).empty();
      }
    } );
  }
});

$('#tabeladois').DataTable({
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabelatres').DataTable({
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabelaquatro').DataTable({
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabelacinco').DataTable({
  "language": {
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "Nenhum registro encontrado",
    "info": "Página _PAGE_ de _PAGES_",
    "infoEmpty": "Nenhum registro encontrado",
    "infoFiltered": "(Filtrado de _MAX_ registros no total)",
    "sSearch": "Buscar: _INPUT_",
    "paginate": {
      "previous": "Anterior",
      "next": "Próximo",
      "first": "Primeira página",
      "last": "Última página"
    }
  }
});

$('#tabelaum').keypress(function(e) {
    if(e.which == 13) {
      e.preventDefault();
      console.log('Não vou enviar');
    }
});

$('#tabeladois').keypress(function(e) {
    if(e.which == 13) {
      e.preventDefault();
      console.log('Não vou enviar');
    }
});

$('#tabelatres').keypress(function(e) {
    if(e.which == 13) {
      e.preventDefault();
      console.log('Não vou enviar');
    }
});

$('#tabelaquatro').keypress(function(e) {
    if(e.which == 13) {
      e.preventDefault();
      console.log('Não vou enviar');
    }
});

$('#tabelacinco').keypress(function(e) {
    if(e.which == 13) {
      e.preventDefault();
      console.log('Não vou enviar');
    }
});
</script>

</body>

</html>
