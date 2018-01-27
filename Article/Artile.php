<?php
/**
 * Created by PhpStorm.
 * User: zhangdeman
 * Date: 2017/11/24
 * Time: 23:10
 */
namespace Themis\Article;

class Article
{
    /**
     * @brief 是否原创
     * @field is_original
     */
    const IS_ORIGINAL_N = 0;   //否
    const IS_ORIGINAL_Y = 1;   //是

    /**
     * 是否原创map
     * @var array
     */
    public static $IS_ORIGINAL_MAP = array(
        self::IS_ORIGINAL_Y =>  '原创',
        self::IS_ORIGINAL_N =>  '转载',
    );

    /**
     * 获取是否原创value
     * @param int $isOriginal
     * @return mixed|string
     */
    public static final function getIsOriginalValue($isOriginal = self::IS_ORIGINAL_Y)
    {
        return isset(self::$IS_ORIGINAL_MAP[$isOriginal]) ? self::$IS_ORIGINAL_MAP[$isOriginal] : '未知';
    }
}