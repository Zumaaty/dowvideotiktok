<div class="container position-sticky z-index-sticky  top-0 ">
  <div class="row">
    <div class="col-12">
      <!-- Begin::Navbar -->
      <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
          <a class="navbar-brand font-weight-bolder ms-sm-3" title="<?php echo website_title ?>" href="<?php echo website_url ?>">
            <div class="logo-image">
              <img src="<?php echo image_header ?>">
            </div>
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100 justify-content-center justify-content-md-end align-items-center align-items-md-end" id="navigation">
            <ul class="navbar-nav navbar-nav-hover">
              <li class="nav-item mx-2 my-auto">
                <button class="btn btn-sm bg-gradient-danger btn-round mb-lg-0" onclick="location.href='<?php echo website_url ?>'">Refresh</button>
              </li>
              <li class="nav-item mx-2 my-auto">
                <button class="btn btn-sm bg-gradient-danger btn-round mb-lg-0" onclick="location.href='<?php echo contact ?>'">Buy Now</button>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End::Navbar -->
    </div>
  </div>
</div>
<body>
  <header class="header-2">
    <div class="page-header min-vh-75 relative">
      <div class="img-fluid shadow overlay-preview" style="<?php echo background_style ?>">
      </div>
      <img class="position-absolute start-0 top-0 w-100 parallax-image" src="<?php echo background_image ?>" style="filter: blur(1px);">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white"> <?php echo website_title ?> </h1>
            <h2 class="lead text-white letter-normal my-3"> <?php echo website_subtitle ?> </h2>
          </div>
          <form wire:submit.prevent="onDownload" method="post" id="formDownload">
            <div class="col-lg-8 z-index-2 border-radius-xl mx-auto py-3">
              <div class="row bg-white shadow border-radius-md py-3 p-2 position-relative">
                <div class="col-12 col-lg-10 mb-lg-0 mb-2">
                  <div class="input-group">
                    <input type="text" class="form-control form-control-lg" name="link" id="link" wire:model="link" placeholder="Dán URL vào đây để bắt đầu tải xuống..." required>
                  </div>
                </div>
                <div class="col-12 col-lg-2 ps-lg-0">
                  <button class="btn bg-gradient-success w-100 mb-0 h-100 position-relative z-index-2 p-lg-0">
                    <span>
                      <div wire:loading.inline wire:target="onDownload">
                        <i class="fas fa-spinner fa-spin fa-fw"></i>
                      </div>
                      <span wire:target="onDownload" class="text-capitalize btn-download">Search</span>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </form>
          <div class="col-lg-8 mx-auto">
            <br> <?php include_once 'action.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </header>