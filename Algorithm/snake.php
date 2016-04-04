<?php 

/* *
 * @param $w : 宽
 * @param $h : 高
 * @param $s : 起始数字
 * @param $x, $y : 起始位置坐标 只能从四顶点开始
 * @param $r :方向 默认顺时间 false为逆时针
 * @author : http://www.zh30.com/php-python-shuzi-luoxuan-juzhen.html
 * 
 */
function print_matrix($w, $h, $s = 1, $l = 1, $x = 0, $y = 0, $r = true) {
	// 表示四个方向
    $R = array(array(1, 0), array(0, 1), array(-1, 0), array(0, -1));
    !$r && $R = array_reverse($R);
    // 创建一个无限迭代器
    $iterator = new InfiniteIterator(new ArrayIterator($R)); 

    $iterator->rewind(); 
    list($_x, $_y) = $iterator->current();

    $result = [];
    $result[$x][$y] = $s;
    for ($i = $s+1; $i < ($s + $w * $h); $i++) {
        $new_x = $x + $_x;
        $new_y = $y + $_y;
        
        if (0 <= $new_x && 0 <= $new_y && $new_x < $w && $new_y < $h && !isset($result[$new_x][$new_y])) {
            $result[$new_x][$new_y] = $i;
            $x = $new_x;
            $y = $new_y;
        } else {
            $iterator->next();
            list($_x, $_y) = $iterator->current();
            $i--;
        }

    }
    // 打印
    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j < $w; $j++) {
            echo $result[$j][$i], "\t";
        }
        echo "<br />";
    }
}

function snake($row = 5, $col = 5)
{
	// 结果集
	$res = array();
	// 初始值
	$start = 1;
	// 当前遍历层数
	$flag = intval(($row + 1) / 2);

	for ($i = 1; $i <= $flag; $i++) { 
		$startX = $i - 1;
		$startY = $i - 1;
		$width = $col - $i + 1;
		$height = $row - $i + 1;

		// 上
		for ($u = $startY; $u < $width; $u++) { 
			$res[$startX][$u] = $start;
			$start += 1;
		}
		// 右
		for ($r = $startX + 1; $r < $height; $r++) { 
			$res[$r][$u-1] = $start;
			$start += 1;
		}
		// 下
		for ($d = $u - 1 - 1; $d >= $startY; $d--) { 
			$res[$r-1][$d] = $start;
			$start += 1;
		}
		// 左
		for ($l = $r - 1 - 1; $l >= $startX + 1; $l--) { 
			$res[$l][$d+1] = $start;
			$start += 1;
		}

	}

	// 输出
	for ($i = 0; $i < $row; $i++) { 
		for ($j = 0; $j < $col; $j++) { 
			echo $res[$i][$j] . " ";
		}
		echo "<br />";
	}

}

print_matrix(7, 3);
//snake(7, 8);
