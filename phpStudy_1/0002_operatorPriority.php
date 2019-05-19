<?php 
echo '<pre />';
/**
 * 算术运算符
 * @var integer
 */
$a = 100;
echo -$a,' ' ;//取反(取负数)
echo 1+2,' ',2-1,' ',3*4,' ',5.5/2,' ', 5.55%2, ' ' , 2.5**2;//加减乘除取模 + - * / % **

/**
 * 赋值运算符
 */


/**
 *位运算符  基于二进制
 *
 * &  按位与  都是1才是1
 * |  按位或  都是0才是0
 * ^ 按位异或  不同为1 相同为0
 *  << 左移
 *  >> 右移
 */

echo ~4;  //4的二进制 0000 0000 0000 0000 0000 0000 0000 0100
          //取反      1111 1111 1111 1111 1111 1111 1111 1011


/**
 *比较运算符
 *
 * ==  === !=  !== > >= < <=  <=>  ??
 */

/**
 * @ 错误控制运算符
 */

/**
 * 执行运算符
 * 
 * ``  php会尝试把反引号中的字符当做shell 命令执行   反引号不能再双引号中使用
 */


/**
 * 递增递减运算符
 *
 * 前加 后加  前减 后减
 */

/**
 * 逻辑运算符
 *
 * and 逻辑与  只有全为true结果为true
 * or 逻辑或  只要一个为true则结果为true
 * xor 逻辑异或  只有一个为true则结果为true
 * ！ 取反
 * && 逻辑与
 * || 逻辑或 
 * （逻辑短路，编程中可以合理运用，优化运行）
 */

/**
 * 字符串运算符
 * 
 * "." 后接数字需要添加空格 
 * ".="
 */

/**
 * 数组运算符
 *
 * + 联合  运算符把右边的数组元素附加到左边数组后，两个数组中都有的键名，则只用左边数组的，右边忽略。
 * 
 */

/**
 * 类型运算符
 *
 * instanceof  
 * 
 */

/**
 * operator priority
 * 运算符有限级
 *
 * clone new                无联结
 * [ (array())              左联
 * **                       右联
 * ++ -- ~ (int）@          右联
 * instanceof               无联结
 * ！                       右联
 * * / %                    左联
 *  + - .                   左联
 *  << >>                   左联
 *  < > <= >=               无联结
 *  == != === !== <> <=>    无联结
 *  &                       左联
 *  ^                       左联
 *  |                       左联
 *  &&                      左联
 *  ||                      左联
 *  ??                      左联
 *  ?:                      左联
 *  = += -= *= **= /= .= (赋值运算)  右联
 *  and
 *  xor
 *  or
 *
 *
 *  1<2>1 不合法表达式  无结合方向切等优先级的运算不可连续使用
 *
 * 为增加代码可读性 通常是使用（）明确标明运算顺序  而不是使用优先级和结合方向来确定。
 * 
 */