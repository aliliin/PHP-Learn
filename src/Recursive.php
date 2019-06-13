<?php
namespace Learn;

class Recursive
{
    // 递归走楼梯的算法
    // 可以一次走一个台阶或者两个台阶
    // 分为两类，第一类 走一个台阶。另一类 走二个台阶
    // 所以如果有 n 个台阶的话 就相当于 走了。n-1 或者 n -2 个台阶
    // 用公式表达 就是 f(n) = f(n-1)+f(n-2)
    //  终止条件是 当有了且只剩下一个台阶的时候，我们不需要递归了。只有一种方法 f(n-1) 的走法
    //  我们可以把 f(2)=2 作为一种终止条件，表示走 2 个台阶的话。有两种走法，一步一个台阶，或者一步两个台阶
    //  所以终止条件，有两个，  f(1) =1 和 f(2)=2 ;
    public function digui($int)
    {
        //f(1) =1
        if ($int == 1) {
            return $int;
        }
        //f(2) =2
        if ($int == 2) {
            return $int;
        }
        return $this->digui($int - 1) + $this->digui($int - 2);
    }
}
