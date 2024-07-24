<?php
/* Smarty version 3.1.30, created on 2022-04-29 18:22:49
  from "/home/t/tdevelrc/theworldbuilder.ru/public_html/poll/views/default/poll/body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626c02c98796f0_31171183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b890535b85315477f71e0239b14c9e6884b39de' => 
    array (
      0 => '/home/t/tdevelrc/theworldbuilder.ru/public_html/poll/views/default/poll/body.tpl',
      1 => 1651245768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_626c02c98796f0_31171183 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>
<div class="clearfix"></div>

		<div class="wrapper">
			<div class="wizard-content-1 pos-flex clearfix">
				<div class="steps d-inline-block clearfix">
					<span class="bg-shape"></span>
					<ul class="tablist multisteps-form__progress">
						<li class="multisteps-form__progress-btn js-active current">
							<div class="step-btn-icon-text">
								<span>1</span>
								<div class="step-btn-icon float-left position-relative">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/bt1.png" alt="">
								</div>
								<div class="step-btn-text">
									<h2 class="text-uppercase">Призы</h2>
									<span class="text-capitalize">Выберите приз</span>
								</div>
							</div>
						</li>
						<li class="multisteps-form__progress-btn">
							<div class="step-btn-icon-text">
								<span>2</span>
								<div class="step-btn-icon float-left position-relative">
									<img class="fix-image" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/bt2.png" alt="">
								</div>
								<div class="step-btn-text">
									<h2 class="text-uppercase">Свой вариант</h2>
									<span class="text-capitalize">Укажите свой вариант</span>
								</div>
							</div>
						</li>
						<li class="multisteps-form__progress-btn">
							<div class="step-btn-icon-text">
								<span>3</span>
								<div class="step-btn-icon float-left position-relative">
									<img class="fix-image-2" src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/bt3.png" alt="">
								</div>
								<div class="step-btn-text">
									<h2 class="text-uppercase">Спасибо</h2>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="step-inner-content clearfix position-relative">
					<span class="bg-shape"></span>
					<form class="multisteps-form__form" action="action.php" id="wizard" method="POST" enctype="multipart/form-data">
						<div class="form-area position-relative">
							<div class="multisteps-form__panel js-active" data-animation="scaleIn">
								<div class="wizard-forms position-relative">
									<span class="step-no position-absolute">Шаг 1</span>
									
									<div class="wizard-inner-box">
										<div class="inner-title text-center">
											<h2>Какой приз Вы хотели бы видеть?</h2>
											<p>Пролистните вправо чтобы указать свой вариант </p>
										</div>
										<div id="need-job-slide-id" class="need-job-slide owl-carousel">
											<label class="need-job-icon-text text-center">
												<input type="radio" name="job_title" value="1_yandex" class="j-checkbox" checked="">
												<span class="need-job-text-inner">
													<span class="checkbox-circle-mark position-absolute"> </span>
													<span class="need-job-icon">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/orig.webp" alt="">
													</span>
													<span class="need-job-text">
														<span class="text-uppercase need-job-title">Яндекс Станция Мини</span>
														<span class="text-capitalize need-job-text">(с часами)</span>
													</span>
												</span>
											</label>
											<label class="need-job-icon-text text-center">
												<input type="radio" name="job_title" value="2_headphones" class="j-checkbox">
												<span class="need-job-text-inner">
													<span class="checkbox-circle-mark position-absolute"> </span>
													<span class="need-job-icon">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/headphones.jpeg" alt="">
													</span>
													<span class="need-job-text">
														<span class="text-uppercase need-job-title">Беспроводные наушники</span>
													</span>
												</span>
											</label>
											<label class="need-job-icon-text text-center">
												<input type="radio" name="job_title" value="3_hdd" class="j-checkbox">
												<span class="need-job-text-inner">
													<span class="checkbox-circle-mark position-absolute"> </span>
													<span class="need-job-icon">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/796798_r1899.jpg" alt="">
													</span>
													<span class="need-job-text">
														<span class="text-uppercase need-job-title">Внешний жёсткий диск</span>
														<span class="text-capitalize need-job-text">(1ТБ)</span>
													</span>
												</span>
											</label>
											<label class="need-job-icon-text text-center">
												<input type="radio" name="job_title" value="4_your" class="j-checkbox">
												<span class="need-job-text-inner">
													<span class="checkbox-circle-mark position-absolute"> </span>
													<span class="need-job-icon">
														<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/faqs.png" alt="">
													</span>
													<span class="need-job-text">
														<span class="text-uppercase need-job-title">Свой вариант</span>
													</span>
												</span>
											</label>
										</div>
									</div>
									<div class="actions">
										<a title="NEXT" class="js-btn-next button button--primary d-md-inline-block">Далее</a>
									</div>
								</div>
								<div class="bottom-vector position-absolute">
									<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/sd1.png" alt="">
								</div>
							</div>
							<!-- step 1 -->
							<div id="yourStep" class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms form-step-2">
									<span class="step-no position-absolute">Шаг 2</span>
									
									<div class="wizard-inner-box">
										<div class="inner-title text-center">
											<h2>Укажите ваш вариант приза</h2>
											<p>Оставьте ссылку на ваш приз и мы обязательно его рассмотрим  </p>
										</div>
									</div>
									<div class="details-form-area">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-input-inner position-relative has-float-label">
													<input id="rewardLink" type="text" name="link" placeholder="Ссылка на приз" class="form-control required" required="">
													<label>Укажите ссылку на новый приз</label>
													<div class="icon-bg text-center">
														<i class="fas fa-link"></i>
													</div>
													
												</div>
											</div>
											
										</div>
									</div>
									<div class="actions">
										<a title="BACK" class="js-btn-prev button button--primary d-md-inline-block">Назад</a>
										<a id="endPoll" type="submit" name="submit" title="NEXT" class="js-btn-next button button--primary d-md-inline-block">Далее</a>
									</div>
									<div class="bottom-vector position-absolute">
										<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/sd1.png" alt="">
									</div>
								</div>
							</div>
							<!-- step 2 -->
							<div id="finalyStep" class="multisteps-form__panel" data-animation="scaleIn">
								<div class="wizard-forms form-step-3">
									<span class="step-no position-absolute">Шаг 3</span>
									
									<div class="wizard-inner-box">
										<div class="thank-content text-center">
											<div class="thank-img">
												<img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
poll/assets/img/th1.png" alt="">
											</div>
											<div class="thank-text">
												<h2>Спасибо за участие</h2>
												<p>Мы обязательно учтем <span>Ваши</span> пожелания</p>
											</div>
											<a title="BACK" class="js-btn-prev button button--primary d-md-inline-block">Перевыбрать</a>
											<a class="button button--primary d-md-inline-block" href="/">На главную</a>
										</div>
									</div>

								</div>
							</div>
							<!-- step 3 -->
						</div>
					</form>
				</div>
			</div>
		</div><?php }
}
