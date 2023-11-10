<?php require_once("SNIPPETS/HEADER.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Najlepsza galeria na swiecie</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>
    <div class="col-lg-2 col-md-3 clo-sm-6 col-12 thumbnailContainer">
        <img class="img-thumbnail img-fluid thumbnailImage" src="images/people.jpg" alt="Card image cap">
    </div>

</div>

<div class="row">
    <div class="col-12 text-center">
        <nav>
            <ul class="pagination" id="PaginationList">
                <li class="page-item"><a href="#" class="page-link">Poprzednia</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">Nastepna</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="modal fade" role="dialog" id="LightBoxModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ImageTitle">Tytul modala</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="images/people.jpg" alt="" class="img-thumbnail" id="ImageShowcase">
            </div>
        </div>
    </div>
</div>
<?php require_once("SNIPPETS/FOOTER.php"); ?>