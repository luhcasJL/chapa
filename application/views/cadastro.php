<?php $this->load->view('elements/header');?>
<?php $this->load->view('elements/sidebar');?>
<div class="content">
  <section class="access-forms">
    <div class="container">
      <div class="row align-centered">
        <div class="col-12 col-lg-6">
          <form action="cadastro" method="post" class="form-login ">
            <h3 class="text-center">Cadastro</h3>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="city">Cidade</label>
                  <input type="text" class="form-control" name="city" id="city">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="state">Estado</label>
                  <input type="text" class="form-control" name="state" id="state">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="passwordConfirm">Confirmar Senha</label>
                  <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" name="terms" id="terms">
                  <label class="form-check-label" for="terms" name="terms"> Li e concordo com os termos do regulamento e políticas de privacidade</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12">
                <button type="submit" name="register" class="btn btn-primary btn-block text-capitalize">Criar conta</button>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12 col-sm-6">
                <button type="button" class="btn btn-gray btn-google btn-block">Continuar com o Google</button>
              </div>
              <div class="form-group col-12 col-sm-6">
                <button type="button" class="btn btn-gray btn-facebook btn-block">Continuar com o Facebook</button>
              </div>
            </div>
            <br><br>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->load->view('elements/footer');?>
