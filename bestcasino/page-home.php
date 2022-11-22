<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php global $country_code; ?>
    <div class="page-container">
        <div class="page-content">
            <?php $companies_block_top = get_field('companies_block_top'); ?>
            <div class="outside-block-container">
                <div class="title">
                    <h1><?php echo $companies_block_top['text']; ?></h1>
                    <p><?php echo $companies_block_top['description']; ?></p>
                </div>
                <div class="block-container">
                    <?php foreach ($companies_block_top['companies'] as $key => $companies) : ?>
                        <div class="block">
                            <div class="block-inside">
                                <?php if ($key === 0) : ?>
                                    <div class="block-backgraund" style="background: url(wp-content/themes/bestcasino/asetts/images/1.png) no-repeat;"></div>
                                <?php elseif ($key === 1) : ?>
                                    <div class="block-backgraund" style="background: url(wp-content/themes/bestcasino/asetts/images/2.png) no-repeat;"></div>
                                <?php elseif ($key === 2) : ?>
                                    <div class="block-backgraund" style="background: url(wp-content/themes/bestcasino/asetts/images/3.png) no-repeat;"></div>
                                <?php endif; ?>
                                <div class="logo-container">
                                    <div class="logo">
                                        <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                            <img src="<?php echo get_field($country_code . '_logo', $companies->ID) != '' ? get_field($country_code . '_logo', $companies->ID) : get_field('logo', $companies->ID); ?>" alt="block-logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="bonus-container">
                                    <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?> " target="_blank">
                                        <h2><?php echo get_field($country_code . '_bonus', $companies->ID) != '' ? get_field($country_code . '_bonus', $companies->ID) : get_field('bonus', $companies->ID); ?></h2>
                                    </a>
                                    <h3><?php echo get_field($country_code . '_bonus_type', $companies->ID) != '' ? get_field($country_code . '_bonus_type', $companies->ID) : get_field('bonus_type', $companies->ID); ?></h3>
                                </div>
                                <div class="btn-container">
                                    <div class="button-container">
                                           <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                               visit casino
                                           </a>
                                       </div>
                                    <div class="tc-apply">
                                        <a href="<?php echo get_field($country_code . '_terms_link', $companies->ID) != '' ? get_field($country_code . '_terms_link', $companies->ID) : get_field('terms_link', $companies->ID); ?>" target="_blank">
                                            <p class="apply">18+. T&C’s applies.</p>
                                            <div class="show-text">
                                                <div class="hover-info">
                                                    <p>(Hover for more info)</p>
                                                </div>
                                                <div class="show-text-hover">
                                                    <h6>Bonus Terms & Conditions</h6>
                                                    <p><?php echo get_field($country_code . '_terms_text', $companies->ID) != '' ? get_field($country_code . '_terms_text', $companies->ID) : get_field('terms_text', $companies->ID); ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $companies_block = get_field('companies_block'); ?>
            <div class="list-container">
                <div class="title">
                    <h2><?php echo $companies_block['text']; ?></h2>
                    <p><?php echo $companies_block['description']; ?><p>
                </div>
                <?php foreach ($companies_block['companies'] as $key => $companies) : ?>
                    <div class="list-paragraf-container">
                    <div class="list">
                        <div class="logo-name-container">
                            <div class="logo">
                                <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                    <img src="<?php echo get_field($country_code . '_logo', $companies->ID) != '' ? get_field($country_code . '_logo', $companies->ID) : get_field('logo', $companies->ID); ?>" alt="block-logo">
                                </a>
                            </div>
                            <div class="name">
                                <h3><?php echo $companies->post_title; ?></h3>
                            </div>
                        </div>
                        <div class="bonus">
                            <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>" target="_blank">
                                <h2><?php echo get_field($country_code . '_bonus', $companies->ID) != '' ? get_field($country_code . '_bonus', $companies->ID) : get_field('bonus', $companies->ID); ?></h2>
                            </a>
                            <h3><?php echo get_field($country_code . '_bonus_type', $companies->ID) != '' ? get_field($country_code . '_bonus_type', $companies->ID) : get_field('bonus_type', $companies->ID); ?></h3>
                        </div>
                        <div class="btn">
                            <a href="<?php echo get_field($country_code . '_affiliate_link', $companies->ID) != '' ? get_field($country_code . '_affiliate_link', $companies->ID) : get_field('affiliate_link', $companies->ID); ?>"" target="_blank">
                                visit Casino
                            </a>
                        </div>
                    </div>
                    <div class="paragraf-icon-apply">
                        <p><?php echo get_field($country_code . '_terms_text', $companies->ID) != '' ? get_field($country_code . '_terms_text', $companies->ID) : get_field('terms_text', $companies->ID); ?></p>
                        <a href="<?php echo get_field($country_code . '_terms_link', $companies->ID) != '' ? get_field($country_code . '_terms_link', $companies->ID) : get_field('terms_link', $companies->ID); ?>" target="_blank">
                            <div class="icon-apply">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 422 422" style="enable-background:new 0 0 422 422;" xml:space="preserve"><style type="text/css">.st0{fill:none;stroke:#e2e2e2;stroke-width:53;}.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#e2e2e2;}</style><title>18</title><desc>Created with Sketch.</desc><g id="Registration-Mobile"><g id="over18Iconv2.png" transform="translate(0.000000, -444.000000)"><g transform="translate(0.000000, 444.000000)"><circle id="Oval-4" class="st0" cx="211" cy="211" r="184.5"/><path class="st1" d="M108.8,145.4c2.1-1.2,4-1.6,6.5-1.6h26.4c3.3,0,5.3,1.9,5.3,5.3v112.6c0,3.3-1.9,5.3-5.3,5.3h-24.6c-3.3,0-5.3-1.9-5.3-5.3v-81.1L90,192.2c-3.5,1.9-6.3,0.4-6.3-3.7V163c0-2.8,1.2-4.8,3.7-6.2L108.8,145.4z M239.4,202.5c11.1,6.7,16.8,17.5,16.8,29.8c0,22.5-16.2,37.1-47,37.1s-47-14.6-47-37.1c0-12.3,5.7-23.1,16.8-29.8c-7.8-5.7-12.5-14-12.5-24.6c0-23.2,18.3-36.6,42.8-36.6s42.8,13.4,42.8,36.6C251.9,188.5,247.2,196.8,239.4,202.5z M209.2,172.3c-7,0-11.1,3-11.1,9c0,6,4,9,11.1,9c6.3,0,11.1-3,11.1-9C220.3,175.3,215.5,172.3,209.2,172.3z M209.2,237.8c7.4,0,11.8-3.9,11.8-10.4c0-6.5-4.4-10.4-11.8-10.4c-7.4,0-11.8,3.9-11.8,10.4C197.4,233.9,201.8,237.8,209.2,237.8z M348.8,189.6c3.3,0,5.3,1.9,5.3,5.3V216c0,3.3-1.9,5.3-5.3,5.3h-22.9v22.9c0,3.3-1.9,5.3-5.3,5.3h-21.1c-3.3,0-5.3-1.9-5.3-5.3v-22.9h-22.9c-3.3,0-5.3-1.9-5.3-5.3v-21.1c0-3.3,1.9-5.3,5.3-5.3h22.9v-22.9c0-3.3,1.9-5.3,5.3-5.3h21.1c3.3,0,5.3,1.9,5.3,5.3v22.9H348.8z"/></g></g></g></svg>
                                <p>T&C’s applies.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>