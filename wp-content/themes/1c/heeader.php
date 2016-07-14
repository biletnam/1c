<!DOCTYPE html>
<html>
<head>
     <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/coin-slider-styles.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/coin-slider.min.js"></script>
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
                        <a href="index.html">
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
                                        <a href="about.html" data-hover="О компании">О компании</a>
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
                                                    <div class="dropdown_list_item"><a href="tarif_complex_service.html">Тариф «Комплексный сервис»</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_reporting.html">Тариф «Отчетность»</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_without_employees.html">Тариф «ИП без работников»</a></div>
                                                    <div class="dropdown_list_item"><a href="tarif_additional services.html">Дополнительные услуги</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="feedbacks.html" data-hover="Отзывы">Отзывы</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="faq.html" data-hover="Частые вопросы">Частые вопросы</a>
                                    </td>
                                    <td class="navigation_item">
                                        <a href="contacts.html" data-hover="Контакты">Контакты</a>
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