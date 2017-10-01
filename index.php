<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?>
<?if($isHomePage):?>
<div class="home_text">
  <?$APPLICATION->IncludeFile(
    "/include/home_text.php",
    array(),
    array(
      'MODE' => 'TEXT'
    )
  );?>
</div>
<?endif;?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
