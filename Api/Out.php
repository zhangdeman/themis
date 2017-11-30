<?php
/**
 * Created by PhpStorm.
 * User: zhangdeman
 * Date: 2017/11/24
 * Time: 23:09
 */
namespace Themis\Api;
class Out
{
    const ERROR_PARAMS_ERROR = 101; //参数错误
    const ERROR_GET_ID_FAIL = 102; //获取ID信息失败

    const ERROR_DIFF_PASSWORD = 201; //两次密码不一致

    public static $ERROR_MSG_MAP = array(
        self::ERROR_PARAMS_ERROR => '参数错误',
        self::ERROR_DIFF_PASSWORD => '两次密码不一致',
    );

    /**
     * 获取错误码对应的错误信息
     * @param $errorCode
     * @return mixed|string
     */
    public static function getErrorMsg($errorCode)
    {
        return isset(self::$ERROR_MSG_MAP[$errorCode]) ? self::$ERROR_MSG_MAP[$errorCode] : '';
    }
}