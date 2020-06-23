<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Team -->
<section id="team" class="pb-5">
  <div class="container">
    <div class="row">
      <!-- Team member -->

      <!-- ./Team member -->

      <!-- Team member -->
      <style media="screen">
        /* FontAwesome for working BootSnippet :> */

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        #team {
          background: #eee !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {
          background-color: #108d6f;
          border-color: #108d6f;
          box-shadow: none;
          outline: none;
        }

        .btn-primary {
          color: #fff;
          background-color: #007b5e;
          border-color: #007b5e;
        }

        section {
          padding: 60px 0;
        }

        section .section-title {
          text-align: center;
          color: #007b5e;
          margin-bottom: 50px;
          text-transform: uppercase;
        }

        #team .card {
          border: none;
          background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
          -webkit-transform: rotateY(0deg);
          -moz-transform: rotateY(0deg);
          -o-transform: rotateY(0deg);
          -ms-transform: rotateY(0deg);
          transform: rotateY(0deg);
          border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
          -webkit-transform: rotateY(180deg);
          -moz-transform: rotateY(180deg);
          -o-transform: rotateY(180deg);
          transform: rotateY(180deg);
        }

        .mainflip {
          -webkit-transition: 1s;
          -webkit-transform-style: preserve-3d;
          -ms-transition: 1s;
          -moz-transition: 1s;
          -moz-transform: perspective(1000px);
          -moz-transform-style: preserve-3d;
          -ms-transform-style: preserve-3d;
          transition: 1s;
          transform-style: preserve-3d;
          position: relative;
        }

        .frontside {
          position: relative;
          -webkit-transform: rotateY(0deg);
          -ms-transform: rotateY(0deg);
          z-index: 2;
          margin-bottom: 30px;
        }

        .backside {
          position: absolute;
          top: 0;
          left: 0;
          background: white;
          -webkit-transform: rotateY(-180deg);
          -moz-transform: rotateY(-180deg);
          -o-transform: rotateY(-180deg);
          -ms-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
          -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
          -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
          box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
          -webkit-backface-visibility: hidden;
          -moz-backface-visibility: hidden;
          -ms-backface-visibility: hidden;
          backface-visibility: hidden;
          -webkit-transition: 1s;
          -webkit-transform-style: preserve-3d;
          -moz-transition: 1s;
          -moz-transform-style: preserve-3d;
          -o-transition: 1s;
          -o-transform-style: preserve-3d;
          -ms-transition: 1s;
          -ms-transform-style: preserve-3d;
          transition: 1s;
          transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
          min-height: 312px;
        }

        .backside .card a {
          font-size: 18px;
          color: #007b5e !important;
        }

        .frontside .card .card-title,
        .backside .card .card-title {
          color: #007b5e !important;
        }

        .frontside .card .card-body img {
          width: 120px;
          height: 120px;
          border-radius: 50%;
        }
      </style>
      <section id="team" class="pb-5">
        <div class="container">
          <h5 class="section-title h1">Konsultasi Dokter</h5>
          <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip">
                <div class="mainflip flip-0">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">sepecialis Poli Gigi</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Dapat menyembuhkan berbagai sakit gigi, seperti gigi berlubang, gigi cenut cenut, dan gigi baik baik saja</p>
                        <ul class="list-inline">
                          <button onclick="location.href='https://api.whatsapp.com/send?phone=628998937095&text=Halo%20dokter%3A%0D%0Asaya%20ingin%20konsultasi%20terkait%20sakit%20yang%20saya%20alami%0D%0Adapatkah%20anda%20membantu%20saya%3F';" type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Sepesialis Jantung</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Dapat menyembuhkan berbagai penyakit jantung, mulai dari sakit jantung, sakit sesak jantung, sampai sakit kebanyakan makan jantung</p>
                        <ul class="list-inline">
                          <button onclick="location.href='https://api.whatsapp.com/send?phone=628998937095&text=Halo%20dokter%3A%0D%0Asaya%20ingin%20konsultasi%20terkait%20sakit%20yang%20saya%20alami%0D%0Adapatkah%20anda%20membantu%20saya%3F';" type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Sepecialis mata</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Dapat menyembuhkan berbagai sakit mata, seperti sakit mata merah, mata minus, mata plus, mata pass passan, hingga mata keranjang</p>
                        <ul class="list-inline">
                          <button onclick="location.href='https://api.whatsapp.com/send?phone=628998937095&text=Halo%20dokter%3A%0D%0Asaya%20ingin%20konsultasi%20terkait%20sakit%20yang%20saya%20alami%0D%0Adapatkah%20anda%20membantu%20saya%3F';" type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Sepesiali Sakit gigi</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Dapat menyembuhkan berbagai sakitt gigi, mulai dari bau mulut, bau gigi, sampai gigi cekot cekot</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Sepesialis Psikologi</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Dapat menyembuhkan berbagai penyakit kelainan jiwa dan mental, cocok untuk anda yg sering sambat akibat SFH</p>
                        <ul class="list-inline">
                          <button onclick="location.href='https://api.whatsapp.com/send?phone=628998937095&text=Halo%20dokter%3A%0D%0Asaya%20ingin%20konsultasi%20terkait%20sakit%20yang%20saya%20alami%0D%0Adapatkah%20anda%20membantu%20saya%3F';" type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                <div class="mainflip">
                  <div class="frontside">
                    <div class="card">
                      <div class="card-body text-center">
                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image" /></p>
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">Sepecialis bukan apa-apa</p>
                        <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="backside">
                    <div class="card">
                      <div class="card-body text-center mt-4">
                        <h4 class="card-title">Sunlimetech</h4>
                        <p class="card-text">yaudah bukan apa2 pokok nya sepesialis
                        </p>
                        <ul class="list-inline">
                          <button onclick="location.href='https://api.whatsapp.com/send?phone=628998937095&text=Halo%20dokter%3A%0D%0Asaya%20ingin%20konsultasi%20terkait%20sakit%20yang%20saya%20alami%0D%0Adapatkah%20anda%20membantu%20saya%3F';" type="button" class="btn btn-success"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</button>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./Team member -->
          </div>
        </div>
      </section>
      <!-- Team -->
      <p></p>
