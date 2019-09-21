# PHP验证码
```
Usage:
    $verify = new VerifyCode();
    $verify->show();                  //显示图片
    $data = $verify->getData();       //返回验证码类型type和文本text
    
三种模式:
/**
 * 图文点击模式
 */
const TYPE_IMG = 'img';
/**
 * 混合字模式
 */
const TYPE_MIX = 'mix';
/**
 * 数字模式
 */
const TYPE_NUM = 'num';
```