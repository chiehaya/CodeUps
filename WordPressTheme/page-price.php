<?php get_header(); ?>

<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Price</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <div class="page-price layout-page-top">
        <div class="page-price__inner inner">
            <div class="page-price__decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <?php
            $pran_fields = array('pran01', 'pran02', 'pran03', 'pran04');
            foreach ($pran_fields as $field) :
                    $price_menu = SCF::get_option_meta('price', $field . '_name');
                    $free_item = SCF::get_option_meta('price', $field);
                if (!empty($free_item) && isset($free_item[0][$field . '_menu']) && isset($free_item[0][$field . '_price']) && $free_item[0][$field . '_menu'] !== '' && $free_item[0][$field . '_price'] !== '') :
            ?>
                <table id="price-lisence" class="page-price__table price-table">
                    <tbody>
                        <tr>
                            <th class="price-table__title js-price-table-title" colspan="2">
                                <p><?php echo esc_html($price_menu); ?></p>
                            </th>
                        </tr>
                        <?php foreach ($free_item as $fields) : ?>
                            <tr>
                                <td class="price-table__menu"><?= $fields[$field . '_menu']; ?></td>
                                <td class="price-table__price"><?= $fields[$field . '_price']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; 
            endforeach;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
