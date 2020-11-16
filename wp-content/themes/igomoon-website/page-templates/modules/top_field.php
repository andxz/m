<section class="module top_field p-5">

    <div class="container">
        <div class="row d-flex align-items-center mx-auto">
            <div class="col-6 align-self-stretch pr-5">
                <div class="pr-4">

                <?php if( $content['headline'] ) { ?>
                <h1 class="pb-3"><?= $content['headline'] ?></h1>
                <?php } ?>

                <?php if( $content['blurb'] ) { ?>
                 <div class="blurb pb-3"><?= $content['blurb'] ?></div>
                 <?php } ?>

                <?php if( $content['top_field_cta_link'] ) { ?>

                 <a href="<?= $content['top_field_cta_link'] ?>" class="cta-button"><?= $content['top_field_cta_text'] ?></a>
                 <?php } ?>

            </div>
            </div>
            <div class="col-6 align-self-stretch">
            <?php if( $content['top_field_image']['url'] ) { ?>

                <div class="headline-img bg-cover" style="background-image: url(<?= $content['top_field_image']['url']?>)" title="<?= the_title() ?>">
                <?php } ?>

            </div>
        </div>
    </div>

</section>