<!-- <?php
        echo $annonces;
        ?> -->

<h1 class="text-center"><?= $title ?></h1>

<!--<p><?php var_dump($annonces) ?></p>-->

<div class="container border border-secondary p-5">
    <div class="row justify-content-around">
        <?php foreach ($annonces as $key => $annonce) : ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= SITEBASE ?>img/annonces/<?= $annonce['image'] ?>" class="card-img-top" alt="<?= $annonce['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $annonce['title'] ?>, categorie : <?= $annonce['titleCat'] ?></h5>
                    <p class="card-text"><?= $annonce['description'] ?></p>
                    <p><?= $annonce['price'] ?> €</p>
                    <a href="#" class="btn btn-primary">Voir le détail</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>