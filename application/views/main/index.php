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
                        <div class="col-md-12">
                              <div id="news-slider" class="owl-carousel">
                                    <?php for ($i = 0; $i <= 7; $i++) {?>

                                    <div class="post-slide">
                                          <div class="post-img">
                                                <img src="application/public/img/main/<?php echo $url_img[$i]; ?>"
                                                      alt="">
                                                <a href="girls/<?=$top_girls[$i];?>" class="over-layer"><i
                                                            class="fa fa-link"></i></a>
                                          </div>
                                          <div class="post-content">
                                                <h3 class="post-title">
                                                      <a href="#"><?php echo $name_girls[$i] ?></a>
                                                </h3>
                                                <p class="post-description"></p>
                                                <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                                <a href="girls/<?=$top_girls[$i];?>" class="read-more">read more</a>
                                          </div>
                                    </div>

                                    <?php }?>
                              </div>
                        </div>
                  </div>
            </div>


      </div>
</section>
<?=$footer;?>