<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../assets/css/node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../../assets/css/styles.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css'>
    <!-- Theme -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../assets/css/theme/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/theme/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../../assets/css/theme/css/style.css">
    <link rel="stylesheet" href="./style.css">
    <title>Funbrain</title>
  </head>
  <body>

    <div class="container" id="vue">
      <h1 class="jk">Learning Games</h1>
      <input class="search" placeholder="Search a title, description, or category" v-model="liveSearchString" />
      <div class="loading" v-show="loading"></div>
      <div class="images-wrapper" v-show="!loading">
        <transition-group name="image-wrapper" tag="div" class="images-inner">
          <div class="image-wrapper" v-for="(image, i) in truncatedFilteredImages" :key="image.id + i">
            <div class="image-img" :style="{ background: 'url(' + image.url + ')' }"></div>
            <div class="image-details">
              <h3 class="image-title">{{ image.name }}</h3>
              <p class="image-description"><span></span>{{ image.description | truncateText }}<span></span></p>
              <p class="image-category"></p>
              <p class="image-category"><b>Category:</b> {{ image.category }}
              <a style="margin-top:5px;float:right;" href="#"
              class="btn btn-sm btn-primary btn-custom-1"
              data-toggle="modal"
              :data-target="'#' + image.modal_id" v-on:click="startVideo('fr'+image.modal_id, image.modal_url)"><i class="fa fa-gamepad"></i> Play Now</a>
              </p>
              <!-- modal -->
              <div :id="image.modal_id"
                   class="modal animated bounceIn"
                   tabindex="-1"
                   role="dialog"
                   :aria-labelledby="'h'+image.modal_id"
                   aria-hidden="true">

                <!-- dialog -->
                <div class="modal-dialog">

                  <!-- content -->
                  <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                      <h1 :id="'h'+image.modal_id"
                          class="modal-title">
                        {{ image.name }}
                      </h1>
                      <p class="text-left text-muted" style="color:white!important;">Name</p>
                    </div>
                    <!-- header -->

                    <!-- body -->
                    <div class="modal-body">
                    <iframe src="" width="100%" height="100%" :id="'fr' + image.modal_id"  sandbox="allow-scripts allow-forms	 allow-same-origin" allowfullscreen></iframe>
                    </div>
                    <!-- body -->

                    <!-- footer -->
                    <div class="modal-footer">

                      <button class="btn btn-danger"
                              data-dismiss="modal" v-on:click="stopVideo('fr'+image.modal_id)">
                        Exit
                      </button>
                      <button class="btn btn-primary">
                        Restart
                      </button>
                    </div>
                    <!-- footer -->

                  </div>
                  <!-- content -->

                </div>
                <!-- dialog -->

              </div>
              <!-- modal -->
            </div>


          </div>

        </transition-group>
      </div>
      <div class="load-wrapper" v-show="!loading && liveSearchString == ''">
        <div class="button-wrapper" v-if="!allLoaded">
          <button @click="showMore()">Load More</button>
        </div>
        <p v-else>ALL LOADED</p>
      </div>
      <div id="imageLoaderDock" style="display: none"></div>
    </div>
    <div class="row">
      <p></p>
    </div>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.js'></script><script  src="./script.js"></script>

<style media="screen">

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  border-radius: 0px!important;
}
.modal-dialog {
  position: fixed;
  margin: 0;
  width: 100%;
  height: 100%;
  padding: 0;
}
.modal-content {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border: 2px solid #3c7dcf;
  border-radius: 0;
  box-shadow: none;
}
.modal-header {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  height: 50px;
  padding: 10px;
  background: #6598d9;
  border: 0;
}
.modal-title {
  font-weight: 300;
  font-size: 2em;
  color: #fff;
  line-height: 30px;
}
.modal-body {
  position: absolute;
  top: 50px;
  bottom: 60px;
  width: 100%;
  font-weight: 300;
  overflow: auto;
  padding: 0px !important;
}
.modal-footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  height: 60px;
  padding: 10px;
  background: #f1f3f5;
}
.btn-modal {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -100px;
  width: 200px;
}
::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 10px;
  background: #f1f3f5;
  border-left: 1px solid #d3d9e0;
}
::-webkit-scrollbar-thumb {
  background: #b5c0cb;
}
.modal-dialog {
    max-width: 100% !important;
}
.card-img-top {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.breadcrumb-item + .breadcrumb-item::before {
    content: ">";
}
#info {
    position:relative;
    z-index:10;
}
.cards {
    padding:0;
    margin:20px auto;
    list-style:none;
    position:relative;
    height:270px;
    width:200px;
}
.cards > li {
    width:200px;
    height:270px;
    position:absolute;
    top:0;
    left:0;
    transform-origin: 100px 300px;
    -ms-transform-origin: 100px 300px;
    -o-transform-origin: 100px 300px;
    -moz-transform-origin: 100px 300px;
    -webkit-transform-origin: 100px 300px;
    -webkit-transition: 0.75s;
    -moz-transition: 0.75s;
    -o-transition: 0.75s;
    transition: 0.75s;
}
.cards > li > a {
    display:block;
    width:200px;
    height:270px;
    border:1px solid #ccc;
    position:absolute;
    background:#fff;
    top:0;
    left:0;
    color:#000;
    text-decoration:none;
    font:bold 12px/18px arial, sans-serif;
    border-radius:10px;
    -moz-border-radius:10px;
    -moz-box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3), inset 0 0 10px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3), inset 0 0 10px rgba(0, 0, 0, 0.1);
    box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3), inset 0 0 10px rgba(0, 0, 0, 0.1);
}
.cards > li > a:after, .cards > li > a:before {
    display:block;
    width:75%;
    height:75%;
    content:"";
    position:absolute;
    z-index:-1;
}
.cards > li > a:after {
    right: 5px;
    bottom:5px;
    transform-origin: bottom right;
    -o-transform-origin: bottom right;
    -moz-transform-origin: bottom right;
    -webkit-transform-origin: bottom right;
    -ms-transform-origin: bottom right;
    transform: rotate(5deg) skew(12deg);
    -o-transform: rotate(5deg) skew(12deg);
    -moz-transform: rotate(5deg) skew(12deg);
    -webkit-transform: rotate(5deg) skew(12deg);
    -ms-transform: rotate(5deg) skew(12deg);
    box-shadow: 4px 8px 12px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 4px 8px 12px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 4px 8px 12px rgba(0, 0, 0, 0.3);
}
.cards > li > a:before {
    left:5px;
    bottom:5px;
    transform-origin: bottom left;
    -o-transform-origin: bottom left;
    -moz-transform-origin: bottom left;
    -webkit-transform-origin: bottom left;
    -ms-transform-origin: bottom left;
    transform: rotate(-5deg) skew(-12deg);
    -o-transform: rotate(-5deg) skew(-12deg);
    -moz-transform: rotate(-5deg) skew(-12deg);
    -webkit-transform: rotate(-5deg) skew(-12deg);
    -ms-transform: rotate(-5deg) skew(-12deg);
    box-shadow: -4px 8px 12px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: -4px 8px 12px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: -4px 8px 12px rgba(0, 0, 0, 0.3);
}
ul.cards > li a b {
    display:block;
    width:100px;
    height:20px;
    margin-left:-40px;
    text-align:right;
    margin-top:50px;
    transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
}
ul.cards:hover > li:nth-of-type(1) {
    transform: rotate(-30deg);
    -ms-transform: rotate(-30deg);
    -o-transform: rotate(-30deg);
    -moz-transform: rotate(-30deg);
    -webkit-transform: rotate(-30deg);
}
ul.cards:hover > li:nth-of-type(2) {
    transform: rotate(-18deg);
    -ms-transform: rotate(-18deg);
    -o-transform: rotate(-18deg);
    -moz-transform: rotate(-18deg);
    -webkit-transform: rotate(-18deg);
}
ul.cards:hover > li:nth-of-type(3) {
    transform: rotate(-6deg);
    -ms-transform: rotate(-6deg);
    -o-transform: rotate(-6deg);
    -moz-transform: rotate(-6deg);
    -webkit-transform: rotate(-6deg);
}
ul.cards:hover > li:nth-of-type(4) {
    transform: rotate(6deg);
    -ms-transform: rotate(6deg);
    -o-transform: rotate(6deg);
    -moz-transform: rotate(6deg);
    -webkit-transform: rotate(6deg);
}
ul.cards:hover > li:nth-of-type(5) {
    transform: rotate(180deg);
    -ms-transform: rotate(18deg);
    -o-transform: rotate(18deg);
    -moz-transform: rotate(18deg);
    -webkit-transform: rotate(18deg);
}
ul.cards:hover > li:nth-of-type(6) {
    transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -webkit-transform: rotate(30deg);
}
ul.cards > li:nth-of-type(-n+5):hover {
    height:480px;
    top:-200px;
    transform-origin: 100px 470px;
    -ms-transform-origin: 100px 470px;
    -o-transform-origin: 100px 470px;
    -moz-transform-origin: 100px 470px;
    -webkit-transform-origin: 100px 470px;
}
ul.cards li ul {
    padding:0;
    margin:0;
    list-style:none;
    position:absolute;
    top:25px;
    left:30px;
}
ul.cards li ul li a {
    font:bold 12px/18px arial, sans-serif;
    color:#000040;
    /* Текст ссылок до наведения */
    text-decoration:none;
}
ul.cards li ul li a:hover {
    color:#2060ff;
    /* Текст ссылок при наведении */
}
ul.cards li span:nth-of-type(1) {
    font-size:30px;
    position:absolute;
    top:10px;
    right:10px;
    color:#007bff;
}
ul.cards li em:nth-of-type(1) {
    font-size:30px;
    position:absolute;
    top:10px;
    right:10px;
    color:#000;
}
ul.cards li span:nth-of-type(2) {
    font-size:30px;
    position:absolute;
    top:220px;
    left:10px;
    color:#007bff;
}
ul.cards li em:nth-of-type(2) {
    font-size:30px;
    position:absolute;
    top:220px;
    left:10px;
    color:#000;
}
ul.cards li i {
    font:normal 200px/270px arial, sans-serif;
    color:#007bff;
    /* Цвет короны */
    position:absolute;
    left:0;
    top:0;
    width:200px;
    text-align:center;
}
</style>

<script src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/jquery.sticky.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/scroll.js"></script>
  </body>
</html>