<?=$header;?>

<section class="section-01">
      <?=$nav;?>

      <div class="container d-flex align-items-center">

            <div class="row justify-content-center align-items-center minh-100">
                  <div class="text-center col-md-8">
                        <h2>Date the love of your life </h2>
                        <h2>Welcome to Kiev Dating Agency!</h2>
                        <h3>Our agency specializes in organizing dates with beautiful and smart single Ukrainian
                              women

                        </h3>
                        <button type="button" class="sha-1 btn btn-primary mt-4">CONTACT US</button>
                  </div>
            </div>


      </div>
</section>
<?php
$name_girls = ["Nadezhda", "Marina", "Vladislava", "Viktoriya", "Irina", "Mariya", "Tatiana", "Sofia"];
$url_img = ["model-nadezhda.jpg", "model-marina.jpg", "model-vladislava.jpg", "model-viktoriya.jpg", "model-irina.jpg", "model-mariya.jpg", "model-tatiana.jpg", "model-sofia.jpg"]

?>

<section class="section-02">
      <div class="container">
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-md-12 text-center">
                              <div id="news-slider" class="owl-carousel">
                                    <?php for ($i = 0; $i <= 7; $i++) {?>

                                    <div class="post-slide sha-1">
                                          <div class="post-img">
                                                <img src="application/public/img/main/<?php echo $url_img[$i]; ?>"
                                                      alt="">
                                                <a href="girls/<?=$top_girls[$i];?>" class="over-layer"><i
                                                            class="fa fa-link"></i></a>
                                                <h3 class="post-title">
                                                      <?php echo $name_girls[$i] ?>
                                                      <span class="icon icon-heart"></span>
                                                </h3>
                                          </div>

                                    </div>

                                    <?php }?>
                              </div>
                              <button type="button" class="sha-1 btn btn-primary mb-4">More ladies</button>
                        </div>
                  </div>
            </div>


      </div>
</section>

<section class="section-03">
      <div class="container text-center">
            <h2>Why to choose us?</h2>
            <div class="row p-5">
                  <div class="col-md-4">
                        <h3>Selected single women</h3>
                        <p>
                              We only invite serious women into our agency , who are looking for a serious relationship
                              with a
                              reliable man</p>
                  </div>
                  <div class="col-md-4">
                        <h3>
                              Professional team
                        </h3>
                        <p>
                              Our team was created with a unique format to all other marriage agen- cies. With our
                              totally new
                              concept that will guarantee that you meet the woman of your dreams</p>
                  </div>
                  <div class="col-md-4">
                        <h3>Individual approach</h3>
                        <p>
                              The manager of the agency will personally communicate with every customer . We give useful
                              advice and suggestions for you to find your
                              soulmate.
                        </p>

                  </div>
            </div>

      </div>
</section>
<?=$footer;?>