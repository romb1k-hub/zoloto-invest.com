<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?foreach ($arResult as $item):?>
    <?=$item["code"]?>: <?=$item["course"]?> <?=GetMessage("SOPDU_CURSE_RUB")?><br />
<?endforeach;?>

