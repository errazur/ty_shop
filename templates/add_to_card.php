<?php include 'products.php'; ?>

<main>
        <?php if (isset($_GET['id'])) {
                $valeur = $products[$_GET['id']];
                $_SESSION['card'][] = $products[$_GET['id']] ?>
                <div class="cartes">
                        <div class="carte_add">
                                <img class="img_add" src="/images/<?= $valeur['image']; ?>" alt="<?= $valeur['image']; ?>" />
                                <span class="nom_glace_add">
                                        <h4 class=""><?= $valeur['title']; ?></h4>
                                </span>
                                <span>
                                        Poids net <?= $valeur['weight']; ?> kg
                                </span>
                                <div class="prix_add">
                                        €<?= $valeur['price']; ?>
                                </div>
                                <a href="/" class="boxClick_add">
                                        <span class="add_to_cart">CONTINUER MES ACHATS</span>
                                </a>
                                <a href="/panier" class="boxClick_add2">
                                        <span class="add_to_cart">VOIR MON PANIER</span>
                                </a>
                        </div>
                </div>
        <?php } ?>
</main>