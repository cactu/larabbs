<?php

/*
 * 自定义辅助函数
 * create_time:2018/7/24
 * author:cactus
 *
 * */

function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}