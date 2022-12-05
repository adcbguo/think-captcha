<?php

namespace think\captcha;

class CaptchaController
{
    public function index(Captcha $captcha, $config = null)
    {
        $codeKey = input('code_key', '', 'strval');
        return $captcha->create($codeKey, $config);
    }
}
