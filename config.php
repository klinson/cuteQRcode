<?php
$config = array(
    'data'  => 'https://klinson.com/',
    'level' => 'L',    //支持二维码容错率，动图时建议提高容错率能提高识别率
    'size'  => 300, // 大小单位像素，不超过1000px，不小于125px
    'mode'  => 'char', //background背景图模式，normal常规模式，char字符模式
    'alpha' =>  1,//背景填充颜色，1半透明；2全透明。半透明可以提高识别度，但是会使背景原图变灰
    'other' => [
        'filePath' => 'example'.DIRECTORY_SEPARATOR.'example.jpg',
        'char' => '██' //字符模式使用的字符（可以使用emoji）
    ],
);