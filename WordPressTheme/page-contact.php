<?php get_header(); ?>
<main>
<section class="sub-mv js-mv">
    <h1 class="sub-mv__title">Contact</h1>
    <picture class="sub-mv__img">
    <source media="(min-width: 768px)" srcset="./assets/images/common/contact-mv-pc.jpg">
    <img src="./assets/images/common/contact-mv-sp.jpg" alt="サブメインビュー">
    </picture>
</section>

<div class="breadcrumb layout-breadcrumb">
    <div class="breadcrumb__inner inner">
    <div class="breadcrumb__content">
        <span>TOP</span>
        <span class="breadcrumb__between"></span>
        <span>お問い合わせ</span>
    </div>
    </div>
</div>

<div class="contact-page layout-page-top">
    <div class="contact-page__inner inner">
    <div class="contact-page__decoration">
        <img src="./assets/images/common/page-deco.png" alt="装飾">
    </div>
    <div class="contact-page__content page-form">
        <form action="" method="post" id="contact-form">
        <dl class="page-form__item">
            <dt class="page-form__term">
            お名前
            <span>必須</span>
            </dt>
            <dd class="page-form__description">
            <input type="text" name="name" value="" required>
            </dd>
        </dl>
        <dl class="page-form__item">
            <dt class="page-form__term">
            メールアドレス<span>必須</span>
            </dt>
            <dd class="page-form__description">
            <input type="email" name="mail_address" value="" required>
            </dd>
        </dl>
        <dl class="page-form__item">
            <dt class="page-form__term">
            電話番号<span>必須</span>
            </dt>
            <dd class="page-form__description">
            <input type="tel" name="number" value="" required>
            </dd>
        </dl>
        <dl class="page-form__item">
            <dt class="page-form__term">
            お問合せ項目<span>必須</span>
            </dt>
            <dd class="page-form__description">
            <label><input type="checkbox" name="diving_course" value="ダイビング講習について"><span>ダイビング講習について</span></label>
            <label><input type="checkbox" name="fun_diving" value="ファンデイビングについて" ><span>ファンデイビングについて</span></label>
            <label><input type="checkbox" name="experience_diving" value="体験ダイビングについて"><span>体験ダイビングについて</span></label>
            </dd>
        </dl>
        <dl class="page-form__item">
            <dt class="page-form__term">
            キャンペーン
            </dt>
            <dd class="page-form__description page-form__description--select">
            <select name="campaign_menu">
                <option value="">キャンペーン内容を選択</option>
                <option value="Twitter">ライセンス取得</option>
                <option value="Twitter">貸切体験ダイビング</option>
                <option value="口コミ">ナイトダイビング</option>
            </select>
            </dd>
        </dl>
        <dl class="page-form__item">
            <dt class="page-form__term">
            お問合せ内容
            <span>必須</span>
            </dt>
            <dd class="page-form__description">
            <textarea name="contact"></textarea>
            </dd>
        </dl>
        <div class="page-form__check">
            <label><input type="checkbox" name="privacy_policy_agreement" value="個人情報の取り扱いについて同意のうえ送信します。"><span>個人情報の取り扱いについて同意のうえ<br class="u-mobile">送信します。</span></label>
        </div>
        <div class="page-form__button btn-input">
            <span>
            <input type="button" value="Send">
            </span>
        </div>
        </form>
    </div>
    </div>
</div>
</main>
<?php get_footer(); ?>