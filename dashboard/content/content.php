
    <div class="container" id="vue">
        <input class="search" placeholder="Search a title, description, or category" v-model="liveSearchString" />
        <div class="loading" v-show="loading"></div>
        <div class="images-wrapper" v-show="!loading">
          <transition-group name="image-wrapper" tag="div" class="images-inner">
            <div class="image-wrapper" v-for="(image, i) in truncatedFilteredImages" :key="image.id + i">
            <div class="last-visited-grid">
              <a href="#"
              data-toggle="modal"
              :data-target="'#' + image.modal_id" v-on:click="startVideo('fr'+image.modal_id, image.modal_url)">
              <div class="app dropbox <?php echo $chg; ?>">
                <img :src="image.bigUrl" />
                <span>{{ image.name }}</span>
              </div>
            </a>
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


</style>

<script src="../../assets/js/jquery-3.3.1.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/jquery.sticky.js"></script>
<script src="../../assets/js/main.js"></script>
<script src="../../assets/js/scroll.js"></script>
