<?php include 'products.php';
 ?>

<main>
    <div class="panier">
        <?php if (isset($_SESSION['card'])) { ?>
            <div class="cartes">
                <?php $t = $_SESSION['card']; ?>
                <?php foreach ($t as $k => $v) { ?>
                    <div class="carte">
                        <img class="img" src="/images/<?= $v['image']; ?>" alt="<?= $v['image']; ?>" />
                        <div class="prix">
                            €<?= $v['price']; ?>
                        </div>
                        <div class="nom_glace">
                            <h4><?= $v['title']; ?></h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <a href="<?= makeUrl('?clean_panier')?>" class="boxClick"><span class="add_to_cart">VIDER MON PANIER</span></a>
    </div>
</main>