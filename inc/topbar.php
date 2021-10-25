<section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel:<?= $settings->phoneNumber; ?>"><i class="fa fa-phone"></i> <?= $settings->phoneNumber; ?></a></li>
                    <li><a href="mailto:<?= $settings->email; ?>"><i class="fa fa-envelope-o"></i> <?= $settings->email; ?></a></li>
                </ul>
                <ul class="list-inline lang fright">
                    <?php include('inc/translate.php'); ?>
                </ul>
            </div>
        </div>
    </section> <!--Top Strip-->