<?
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

// пространство имен для подключений ланговых файлов
use Bitrix\Main\Localization\Loc;

// подключение ланговых файлов
Loc::loadMessages(__FILE__);

// основной массив $aMenu
$aMenu = array(
    array(
        'parent_menu' => 'global_menu_content', // пункт меню в разделе Контент
        'sort' => 1, // сортировка
        'text' => "Тестовый модуль", // название пункта меню
        'url' => 'settings.php?lang=ru&mid=hmarketing.d7' // ссылка для перехода
    ),
);

// возвращаем основной массив $aMenu
return $aMenu;
