<?php get_header(); ?>
<main>
<section class="sub-mv js-mv">
    <h1 class="sub-mv__title">Price</h1>
    <picture class="sub-mv__img">
    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-pc.jpg">
    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv-sp.jpg" alt="サブメインビュー">
    </picture>
</section>

<div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <div class="breadcrumb__content">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div>
</div>

<div class="page-price layout-page-top">
        <div class="page-price__inner inner">
            <div class="page-price__decoration">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <table id="price-lisence" class="page-price__table price-table">
            <tbody>
                <tr>
                <th class="price-table__title js-price-table-title" colspan="2">
                    <p>ライセンス講習</p>
                </th>
                </tr>
                <?php
                $free_item = SCF::get('lisence_group',26);
                foreach ($free_item as $fields) { 
                ?>
                <tr>
                <td class="price-table__menu"><?php echo $fields['lisence_menu']; ?></td>
                <td class="price-table__price"><?php echo $fields['lisence_price']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            <table class="page-price__table price-table">
            <tbody>
                <tr>
                <th class="price-table__title js-price-table-title" colspan="2">
                    <p>体験ダイビング</p>
                </th>
                </tr>
                <?php
                $free_item = SCF::get('trial_diving',26);
                foreach ($free_item as $fields) { 
                ?>
                <tr>
                <td class="price-table__menu"><?php echo $fields['trial_diving_menu']; ?></td>
                <td class="price-table__price"><?php echo $fields['trial_diving_price']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            <table class="page-price__table price-table">
            <tbody>
                <tr>
                <th class="price-table__title js-price-table-title" colspan="2">
                    <p>ファンダイビング</p>
                </th>
                </tr>
                <?php
                $free_item = SCF::get('fun_diving',26);
                foreach ($free_item as $fields) { 
                ?>
                <tr>
                <td class="price-table__menu"><?php echo $fields['fun_diving_menu']; ?></td>
                <td class="price-table__price"><?php echo $fields['fun_diving_price']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            <table class="page-price__table price-table">
            <tbody>
                <tr>
                <th class="price-table__title js-price-table-title" colspan="2">
                    <p>スペシャルダイビング</p>
                </th>
                </tr>
                <?php
                $free_item = SCF::get('special_diving',26);
                foreach ($free_item as $fields) { 
                ?>
                <tr>
                <td class="price-table__menu"><?php echo $fields['special_diving_menu']; ?></td>
                <td class="price-table__price"><?php echo $fields['special_diving_price']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
<?php get_footer(); ?>