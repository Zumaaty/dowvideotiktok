<div class="download">
  <a class="button btn-danger" href="#opendownload">Download now</a>
  <div class="opendownload" id="opendownload">
    <div style="background-image: url(assets/images/ken-cheung-256045-2000x1333.jpg);" class="popup-inner">
      <div class="popupphoto">
        <img src="<?php echo $data->thumbnail ?>" alt="">
      </div>
      <div class="popuptext">

        <div class="col-12 mb-10 mb-lg-0">
          <h2 class="mt-3 mb-0 text-center"><?php echo $data->title ?></h2>

          <div class="row text-center">
            <div class="col-md-4 col-sm-12 mt-3">
              <img class="img-thumbnail" src="<?php echo $data->author_avatar ?>" alt=""> 
            </div>

            <div class="col-md-8 col-sm-12 mt-3 p-0">
              
              <a href="<?php echo download(encode($data->video_link_wm), 'mp4') ?>" class="button btn-danger btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank"><strong>Watermark</strong><br><svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 467.968 467.968"><path d="M264.704 96.512H51.2c-28.16 0-51.2 23.04-51.2 51.2v172.544c0 28.16 23.04 51.2 51.2 51.2h213.504c28.16 0 51.2-23.04 51.2-51.2V147.712c0-28.672-23.04-51.2-51.2-51.2zM430.08 124.672c-3.072.512-6.144 2.048-8.704 3.584l-79.872 46.08V293.12l80.384 46.08c14.848 8.704 33.28 3.584 41.984-11.264 2.56-4.608 4.096-9.728 4.096-15.36V154.368c0-18.944-17.92-34.304-37.888-29.696z"></path></svg> mp4<br></a>

              <a href="<?php echo download(encode($data->video_link_nwm), 'mp4') ?>" class="button btn-danger btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank"><strong>Without watermark</strong><br><svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 467.968 467.968"><path d="M264.704 96.512H51.2c-28.16 0-51.2 23.04-51.2 51.2v172.544c0 28.16 23.04 51.2 51.2 51.2h213.504c28.16 0 51.2-23.04 51.2-51.2V147.712c0-28.672-23.04-51.2-51.2-51.2zM430.08 124.672c-3.072.512-6.144 2.048-8.704 3.584l-79.872 46.08V293.12l80.384 46.08c14.848 8.704 33.28 3.584 41.984-11.264 2.56-4.608 4.096-9.728 4.096-15.36V154.368c0-18.944-17.92-34.304-37.888-29.696z"></path></svg> mp4<br></a>
              
              <a href="<?php echo download(encode($data->music_uri), 'mp3') ?>" class="button btn-danger btn-sq btn-dl text-uppercase mx-1 my-1" target="_blank"><strong>Audio</strong><br><svg xmlns="http://www.w3.org/2000/svg" height="1rem" fill="white" viewBox="0 0 415.963 415.963"><path d="M328.712 264.539c12.928-21.632 21.504-48.992 23.168-76.064 1.056-17.376-2.816-35.616-11.2-52.768-13.152-26.944-35.744-42.08-57.568-56.704-16.288-10.912-31.68-21.216-42.56-35.936l-1.952-2.624c-6.432-8.64-13.696-18.432-14.848-26.656-1.152-8.32-8.704-14.24-16.96-13.76a15.957 15.957 0 00-14.88 15.936v285.12c-13.408-8.128-29.92-13.12-48-13.12-44.096 0-80 28.704-80 64s35.904 64 80 64 80-28.704 80-64V165.467c24.032 9.184 63.36 32.576 74.176 87.2-2.016 2.976-3.936 6.176-6.176 8.736-5.856 6.624-5.216 16.736 1.44 22.56 6.592 5.888 16.704 5.184 22.56-1.44 4.288-4.864 8.096-10.56 11.744-16.512.384-.448.737-.928 1.056-1.472z"></path></svg> mp3<br></a>
              
            </div>

          </div>

          <a class="closepopup" href="#">X</a>
        </div>
      </div>
    </div>
  </div>