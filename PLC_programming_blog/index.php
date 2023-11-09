<?php require_once("SNIPPETS/HEADER.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="AwesomeCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#AwesomeCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#AwesomeCarousel" data-slide-to="1"></li>
                    <li data-target="#AwesomeCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="Pierwszy slajd">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Slajd 1</h3>
                            <p>Bardzo wazne, konicznie przeczytaj</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="Drugi slajd">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Slajd 1</h3>
                            <p>Bardzo wazne, konicznie przeczytaj</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid carouselImage" src="http://res.cloudinary.com/dmliyxggm/image/upload/v1511700177/large1_kfvfzm.jpg" alt="Trzeci slajd">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Slajd 1</h3>
                            <p>Bardzo wazne, konicznie przeczytaj</p>
                        </div>
                    </div>
                </div>

                <a href="#AwesomeCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Nastepny</span>
                </a>
                <a href="#AwesomeCarousel" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Nastepny</span>
                </a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 cardContainer">
            <div class="card">
                <a href="post.php"><img src="https://res.cloudinary.com/dmliyxggm/image/upload/v1511702046/poster_ysydov.jpg" alt="Podpis obrazu karty" class="card-img-top cardImage"></a>
                <div class="card-block">
                    <a href="post.php">
                        <h4 class="card-title">Wedrowki</h4>
                    </a>
                    <p class="card-text">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cardContainer">
            <div class="card">
                <a href="post.php"><img src="https://res.cloudinary.com/dmliyxggm/image/upload/v1511702046/poster_ysydov.jpg" alt="Podpis obrazu karty" class="card-img-top cardImage"></a>
                <div class="card-block">
                    <a href="post.php">
                        <h4 class="card-title">Wedrowki</h4>
                    </a>
                    <p class="card-text">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cardContainer">
            <div class="card">
                <a href="post.php"><img src="https://res.cloudinary.com/dmliyxggm/image/upload/v1511702046/poster_ysydov.jpg" alt="Podpis obrazu karty" class="card-img-top cardImage"></a>
                <div class="card-block">
                    <a href="post.php">
                        <h4 class="card-title">Wedrowki</h4>
                    </a>
                    <p class="card-text">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once("SNIPPETS/FOOTER.php"); ?>