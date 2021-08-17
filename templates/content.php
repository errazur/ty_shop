<?php include 'products.php' ?>

<main>
        <div class="cartes">
                <?php foreach ($products as $k => $v) { ?>
                        <div class="carte">
                                <img class="img" src="/images/<?= $v['image']; ?>" alt="<?= $v['image']; ?>"/>
                                <div class="prix">
                                        €<?= $v['price']; ?>
                                </div>
                                <div class="nom_glace">
                                        <h4><?= $v['title']; ?></h4>
                                 </div>
                                 <div class="description">
                                    <?= $v['description']; ?>
                                </div>
                                <div>
                                        Poids net <?= $v['weight']; ?> kg
                                </div>
                                <a href="/add_to_card?id=<?= $v['id']?>" class="boxClick">
                                        <span class="add_to_cart">AJOUTER AU PANIER</span>
                                </a>
                        </div>
                <?php } ?>
        </div>
</main>
