<!-- Start Page -->


<!-- СНИЗУ кусок кода для липкой менюшки на разрешения от 576 по Максимальную ширину -->
<div class="laptop-sticky-wrap sticky-top d-none d-sm-block">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="application/public/img/main/Logo.png" alt=""
                        class="header__logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto ">
                        <li class="nav-item <?=($action == '' ? 'active' : '');?>">
                              <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?=($action == 'service' ? 'active' : '');?>">
                              <a class="nav-link" href="#">Our Services</a>
                        </li>
                        <li class="nav-item <?=(stristr($action, 'gallery') ? 'active' : '');?>">
                              <a class="nav-link" href="#">Ladies Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?foreach ($blogs as $blog): ?>
                                    <a class="dropdown-item" href="/blog/<?=$blog['id'];?>"><?=$blog['title']?></a>
                                    <?endforeach;?>

                              </div>
                        </li>
                        <li class="nav-item <?=(stristr($action, 'girls') ? 'active' : '');?>">
                              <a class="nav-link" href="#">Девушкам</a>
                        </li>
                  </ul>

            </div>
      </nav>
</div>
<!-- СВЕРХУ кусок кода для липкой менюшки на разрешения от 576 по Максимальную ширину -->