<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!--Закрываем right block -->
</div>
<!--Закрываем .container -->
</div>
<!--Закрываем .content.site -->
</div>
	<footer>
		<!--<div class="container">
		</div>-->
		<div class="footer_bottom">
			<div class="container">
				<div class="copyright">
					<?$APPLICATION->IncludeFile(
						"/include/copyright.php",
						array(),
						array(
							'MODE' => 'HTML'
						)
					);?>
				</div>
			</div>
		</div>
		</div>
	</footer>
	<!-- модальные окна -->
	<div id="auth" class="modal_form">
		<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:system.auth.form",
			"",
			array(
				"REGISTER_URL" => "/personal/register.php",
		    "FORGOT_PASSWORD_URL" => "",
		    "PROFILE_URL" => "/personal/profile.php",
		    "SHOW_ERRORS" => "Y"
	     )
		);?>
	</div>
	<!-- модальные окна -->
	<div id="overlay"></div>
	<!-- скрипты темы -->
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/theme.js');?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/slick.min.js');?>
	</body>
</html>
