<?php
//отображение блока в окне при выборе блока
$_['display']          = true;
//Категория(content, social, structure)
$_['category']         = 'content';
//отображать название блока
$_['display_title']    = false;
//Может содержать дочерние блоки
$_['child_blocks']     = true;
//Уровень доступный для добавления блока
$_['level_min']        = 3;
$_['level_max']        = 3;
//Расположение кнопок управления
$_['control_position'] = 'bottom';
//Отображение кнопок управления
$_['display_control']  = true;
//Кнопка перетаскивания
$_['button_drag']      = false;
//Кнопка редатирования
$_['button_edit']      = true;
//Кнопка копирования
$_['button_copy']      = true;
//Кнопка сворачивания
$_['button_collapse']  = true;
//Кнопка удаления
$_['button_remove']    = true;
//Свой шаблон
$_['custom_layout']    = 'column_inner';
//Типы полей
$_['types']            = array(
    'size' => 'string',
    'offset' => 'string',
    'float' => 'boolean',
    'align' => 'string',
    'size_phone' => 'string',
    'size_tablet' => 'string',
    'offset_phone' => 'string',
    'offset_tablet' => 'string'
);
//Настройки по умолчанию
$_['setting']          = array(
    'design_margin_bottom' => '',
    'size'   => 12,
    'offset' => '',
    'float'  => '',
    'align'  => 'center',
    'size_phone' => '',
    'size_tablet' => '',
    'offset_phone' => '',
    'offset_tablet' => ''
);