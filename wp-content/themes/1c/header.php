<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/coin-slider-styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jslider.css" type="text/css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/coin-slider.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jshashtable-2.1_src.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.numberformatter-1.2.3.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tmpl.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.dependClass-0.1.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/draggable-0.1.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header">
        <div class="wrapper">
            <i class="home_triangle"></i>
            <table>
                <tbody>
                <tr>
                    <td class="header_left">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="1С БухОбслуживание">
                        </a>
                    </td>
                    <td class="header_right">
                        <div class="header_info">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="header_info_place">
                                        <b>Наша фирма</b>
                                        <span> / Наш город</span>
                                    </td>
                                    <td class="header_info_phone">
                                        +7 (861) 225-000-2
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="navigation">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="navigation_item first cl-effect-11">
                                        <a href="/?p=4" data-hover="О компании">О компании</a>
                                    </td>
                                    <td class="navigation_item">
                                        <div class="navigation_dropdown js-nav_dropdown">
                                            <span class="dropdown_link js-nav_dropdown_link" data-hover="Тарифы и услуги">Тарифы и услуги</span>
                                            <i class="dropdown_triangle"></i>
                                            <div class="dropdown_list_wrap">
                                                <div class="dropdown_active">
                                                    <span class="dropdown_link active js-nav_dropdown_link-close">Тарифы и услуги</span>
                                                    <i class="dropdown_triangle"></i>
                                                </div>
                                                <div class="dropdown_list">
                                                    <div class="dropdown_list_item"><a href="/?p=15">Тариф «Комплексный сервис»</a></div>
                                                    <div class="dropdown_list_item"><a href="/?p=17">Тариф «Отчетность»</a></div>
                                                    <div class="dropdown_list_item"><a href="/?p=19">Тариф «ИП без работников»</a></div>
                                                    <div class="dropdown_list_item"><a href="/?p=4">Дополнительные услуги</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="/?p=8" data-hover="Отзывы">Отзывы</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="/?p=10" data-hover="Частые вопросы">Частые вопросы</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="/?p=6" data-hover="Контакты">Контакты</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>