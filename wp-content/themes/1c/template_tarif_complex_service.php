<?php 
/*
Template Name: Тариф Комплексный сервис
*/
?>
<?php get_header(); ?>	 
    <div class="content">
        <div class="wrapper">
        	<h1>Тариф &laquo;1С:БухОбслуживание. Комплексный сервис&raquo;</h1>
            <table>
                <tbody>
                <tr>
                    <td class="content_left">
                    	
                        <ul class="check-list">
                            <li>полный пакет бухгалтерских услуг для тех, кто использует достоверные данные бухучета для эффективного и&nbsp;рационального управления бизнесом </li>
                            <li>высокое качество учета на&nbsp;всех этапах&nbsp;&mdash; от&nbsp;оформления первички до&nbsp;расчета налогов и&nbsp;составления отчетности</li>
                            <li>возмещение убытков в&nbsp;случае неправильного расчета налогов или нарушения сроков сдачи отчетности</li>
                        </ul>
                        <h4>Услуги тарифа</h4>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%"><tr valign="top">
                        	<td width="50%">
                            	<ul class="check-list m0">
                                    <li>одна лицензия на&nbsp;право пользования &laquo;облачной&raquo; 1С:Бухгалтерией 8</li>
                                    <li>ведение учета</li>
                                    <li>кадровый учет</li>
                                    <li>расчет зарплаты</li>
                                </ul>
                            </td>
                            <td width="50%">
                            	<ul class="check-list m0">
                                	<li>устные консультации</li>
                                    <li>составление и&nbsp;сдача отчетности через интернет</li>
                                    <li>ведение архива </li>
                                    <li>услуги курьера</li>
                                </ul>
                            </td>
                        </tr></table>
                        <h4>Как сэкономить?</h4>
                        <p>Все операции, самостоятельно введенные клиентом в&nbsp;сервис 1С:БО, или загруженные клиентом из&nbsp;программы для ежедневного учета&nbsp;&mdash; не&nbsp;тарифицируются. Розничная выручка за&nbsp;месяц тарифицируется как одна операция.</p>
                        
                        <div class="operations-count-control content_left">
                            <p>Количество операций в месяц</p>
                            <div class="layout-slider">
                              <input id="SliderSingle" type="slider" name="opercount" value="23" /><!--value="23" -- Начальное значение бегунка -->
                            </div>
                            <script type="text/javascript" charset="utf-8">
							
							/*************      Руководство       ***************/
							
							// Ниже прописаны массивы данных для всех систем налогообложения.
							// Рассмотрим их содержимое на примере СН ОСНО:
							// var osno =  [
							//		["0", "20", "5", "10", "2000"],
							//		["21", "40", "10", "20", "4000"]
							// ]; 
							
							// osno -- код системы налогообложения. Не менять.
							
							// Далее комбинации скобочек, кавычек и цифр -- это своего рода табличка вида:
							
							// Операций от   Операций до    Визитов курьера    Кол-во работников    Цена
							// 0             20             5                  10                   2000
							// 21            40             10                 20                   4000
							
							// Если вы не используете какие-либо системы налогообложения из списка ниже, просто не изменяйте эти массивы или удалите строчки с этими СН, если уверены, что не удалите больше, чем нужно :-).
							
							/****************************************************/
							
								var osno =  [
									//"Операций от", "Операций до", "Визитов курьера", "Кол-во работников", "Цена"
									["0", "20", "5", "10", "2000"],
									["21", "40", "10", "20", "4000"]
								];
								
								var usn10 =  [
									["0", "20", "6", "11", "2100"],
									["21", "40", "11", "21", "4100"]
								];
								
								var usn6 =  [
									["0", "20", "7", "12", "2200"],
									["21", "40", "12", "22", "4200"]
								];
								
								var eshn =  [
									["0", "20", "8", "13", "2300"],
									["21", "40", "13", "23", "4300"]
								];
								
								var endv =  [
									["0", "20", "9", "14", "2400"],
									["21", "40", "14", "24", "4400"]
								];
								
								var patent =  [
									["0", "20", "10", "15", "2500"],
									["21", "40", "15", "25", "4500"]
								];
								
								var osn_envd =  [
									["0", "20", "11", "16", "2600"],
									["21", "40", "16", "26", "4600"]
								];
								
								var osn_patent =  [
									["0", "20", "12", "17", "2700"],
									["21", "40", "17", "27", "4700"]
								];
								var usn10_envd =  [
									["0", "20", "13", "18", "2800"],
									["21", "40", "18", "28", "4800"]
								];
								
								var usn6_envd =  [
									["0", "20", "14", "19", "2900"],
									["21", "40", "19", "29", "4900"]
								];
								
								var usn10_patent =  [
									["0", "20", "15", "20", "3000"],
									["21", "40", "20", "30", "5000"]
								];
								
								var usn6_patent =  [
									["0", "20", "16", "21", "3100"],
									["21", "40", "21", "31", "5100"]
								];
								
								var eshn_envd =  [
									["0", "20", "17", "22", "3200"],
									["21", "40", "22", "32", "5200"]
								];
								
								var eshn_patent =  [
									["0", "20", "18", "23", "3300"],
									["21", "40", "23", "33", "5300"]
								];
								
								jQuery("#SliderSingle").slider({
								  from: 1, // Указывается минимальное количество операций в месяц. Это будет минимум шкалы.
								  to: 40, // Указывается максимальное количество операций в месяц. Это будет максимум шкалы.
								  step: 1,
								  limits: false,
								  round: 1,
								  format: { format: '##', locale: 'de' },
								  skin: "round",
								  callback: function( value ){
									if(value == 40){ // Указывается максимальное количество операций в месяц.
										$("input#SliderSingle").attr("value", "40+"); // "40+" Указывается максимальное количество операций в месяц.
										$(".jslider-value span").append("+");
									}
									var cts = $("#currrent-taxation-system").attr("value");
									var cts = eval(cts);
									for(i = 0; i < cts.length; i++){
										if((value  >= parseInt(cts[i][0])) && (value  <= parseInt(cts[i][1]))){
											$("#price").text(cts[i][4]);
											$("#visit").text(cts[i][2]);
											$("#employees").text(cts[i][3]);
										}
									}
								  }
								});

                            </script>
                        </div>
                        <div class="taxation-system-control content_left">
                            <p>Система налогообложения</p>
                            <input type="hidden" name="currrent-taxation-system" id="currrent-taxation-system" value="osn_envd" />
                            <span class="currrent-taxation-system">ОСН+ЕНВД</span>
                            <span class="taxation-system-btn"></span>
                            <div class="dropdown_list_wrap">
                                <div class="dropdown_list">
                                <!-- Если вы не используете какие-либо системы налогообложения из списка ниже, удалите строчки с этими СН. -->
                                    <div class="dropdown_list_item"><a href="osno">ОСНО</a></div>
                                    <div class="dropdown_list_item"><a href="usn10">УСН 10%</a></div>
                                    <div class="dropdown_list_item"><a href="usn6">УСН 6%</a></div>
                                    <div class="dropdown_list_item"><a href="eshn">ЕСХН</a></div>
                                    <div class="dropdown_list_item"><a href="endv">ЕНВД</a></div>
                                    <div class="dropdown_list_item"><a href="patent">Патент</a></div>
                                    <div class="dropdown_list_item active"><a href="osn_envd">ОСН+ЕНВД</a></div>
                                    <div class="dropdown_list_item"><a href="osn_patent">ОСН+Патент</a></div>
                                    <div class="dropdown_list_item"><a href="usn10_envd">УСН 10% + ЕНВД</a></div>
                                    <div class="dropdown_list_item"><a href="usn6_envd">УСН 6% + ЕНВД</a></div>
                                    <div class="dropdown_list_item"><a href="usn10_patent">УСН 10% + Патент</a></div>
                                    <div class="dropdown_list_item"><a href="usn6_patent">УСН 6% + Патент</a></div>
                                    <div class="dropdown_list_item"><a href="eshn_envd">ЕСХН + ЕНВД</a></div>
                                    <div class="dropdown_list_item"><a href="eshn_patent">ЕСХН + Патент</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="board">
                        	<ins class="board-arrow"></ins>
                            <table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
                            	<td width="255">
                                	<div class="board-header">Цена в месяц</div>
                                    <div class="board-value"><span id="price">4600</span><i class="icon-rub"></i></div>
                                </td>
                                <td width="165">
                                	<div class="board-header">Визитов курьера</div>
                                    <div class="board-value"><span id="visit">16</span><i class="icon-run"></i></div>
                                </td>
                                <td>
                                	<div class="board-header">Работников</div>
                                    <div class="board-value"><span id="employees">26</span><i class="icon-stand"></i></div>
                                </td>
                            </tr></table>
                        </div>
                    </td>
                    <td class="content_right">
                        <div class="content_right_block">
                            <a href="docs/tarif_full_service.doc" class="file"><i></i>Подробное описание услуг тарифа&nbsp;(doc)</a>
                            <div class="file-desc">Сумма по&nbsp;тарифу зависит от&nbsp;системы налогов и&nbsp;количества операций (фактов хозяйственной жизни фирмы клиента, включая все документы и&nbsp;проводки), зарегистрированных в&nbsp;сервисе 1С:БухОбслуживание за&nbsp;месяц.</div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php get_footer(); ?>	 