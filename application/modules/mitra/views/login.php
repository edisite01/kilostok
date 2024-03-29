    <!-- fixed-top-->
<!--    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item">
                <h3 class="brand-text">Robust Admin</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container">
          <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="index.html"><i class="ficon ft-arrow-left"></i></a></li>
              <li class="dropdown nav-item"><a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-settings"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>-->
<!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-md-4 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <div class="p-1"><img src="<?php echo base_url(); ?>app-assets/images/logo/kilostok.png" alt="branding logo"></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login sebagai Mitra</span></h6>
                        </div>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <?php echo $form->open(); ?>
                                <?php echo $form->messages(); ?>
                                <form class="form-horizontal" action="index.html">
                                        <?php echo $form->bs3_text('Username', 'username', ENVIRONMENT==='development' ? 'edisite01@gmail.com' : ''); ?>
                                        <?php echo $form->bs3_password('Password', 'password', ENVIRONMENT==='development' ? '123456' : ''); ?>
                                    </fieldset>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-12 text-center text-sm-left">
                                            <fieldset>
                                                <input type="checkbox" id="remember-me" name="remember" class="chk-remember">
                                                <label for="remember-me"> Remember Me</label>
                                            </fieldset>
                                        </div>
                                       
                                    </div>
                                    <button type="submit" class="btn btn-blue-grey btn-block"><i class="ft-unlock"></i> Login</button>
                                </form>
                            </div>
                            <?php echo $form->close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
        <div class="card-body pb-0">
            <p class="text-center"><a href="forgot_password" class="card-link">Lupa password?</a></p>
            <p class="text-center">Belum pernah terdaftar sebelumnya? <a href="register" class="card-link">Daftarkan diri Anda</a></p>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
