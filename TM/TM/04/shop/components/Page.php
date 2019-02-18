<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 15:49
 * Used: 分页实现
 *
 * @class: Page
 * @param: $total_data - 总记录数
 * @param: $page_size - 一页显示的记录数
 * @param: $page_now - 当前页面
 * @param: $link_url - 获取当前url
 */
class Page
{
    private $total_data;   //总共多少条记录
    private $page_size;    //每页多少条记录
    private $page_now;     //当前页
    private $page_total;   //总页数
    private $page_start;   //起始页数
    private $page_end;     //结尾页数
    private $link_url;     //当前url

    /*
     * Dec:页面显示的格式,显示链接2*$show_pages+1
     * Use:$page_shows ->[首页] [上页] 1 2 3 4 5 [下页] [尾页]
     */
    private $page_shows;

	/*
	 * __construct 构造函数
	 * @param int    $total_data 总记录数
	 * @param int    $page_size  每页多少条
	 * @param int    $page_now   当前第几页
	 * @param string $link_url   链接地址
	 * @param init   $show_pages 显示页码范围 
	 */
    public function __construct($total_data = 1, $page_size = 1, $page_now = 1, $link_url, $show_pages = 2)
    {
        $this->total_data = $this->num_eric($total_data);
        $this->page_size = $this->num_eric($page_size);
        $this->page_now = $this->num_eric($page_now);
        $this->page_total = ceil($this->total_data / $this->page_size);
        $this->link_url = $link_url;
        if ($this->total_data < 0) {
            $this->total_data = 0;
        }
        if ($this->page_now < 1) {
            $this->page_now = 1;
        }
        if ($this->page_total < 1) {
            $this->page_total = 1;
        }
        if ($this->page_now > $this->page_total) {
            $this->page_now = $this->page_total;
        }
        $this->limit = ($this->page_now - 1) * $this->page_size;
        $this->page_start = $this->page_now - $show_pages;
        $this->page_end = $this->page_now + $show_pages;
        if ($this->page_start < 1) {
            $this->page_end = $this->page_end + (1 - $this->page_start);
            $this->page_start = 1;
        }
        if ($this->page_end > $this->page_total) {
            $this->page_start = $this->page_start - ($this->page_end - $this->page_total);
            $this->page_end = $this->page_total;
        }
    }

    //检测是否为数字
    private function num_eric($num)
    {
        if (strlen($num)) {
            if (!preg_match("/^[0-9]+$/", $num)) {
                $num = 1;

            } else {
                $num = substr($num, 0, 11);
            }
        } else {
            $num = 1;
        }
        return $num;
    }

    //地址替换
    private function url_replace($url)
    {
        $strurl = $this->link_url . $url;
        return $strurl;
    }

    //前往首页
    private function go_home()
    {
        if ($this->page_now != 1) {
            return "<li><a href='" . $this->url_replace(1) . "' title='首页'>首页</a></li>";
        } else {
            return "<li class='disabled'><a href='#'>首页</a></li>";
        }
    }

	//上一页
    private function page_prev()
    {
        if ($this->page_now != 1) {
            return "<li><a href='" . $this->url_replace($this->page_now - 1) . "' title='上一页'>上一页</a></li>";
        } else {
            return "<li class='disabled'><a href='#'>上一页</a></li>";
        }
    }

	//下一页
    private function page_next()
    {
        if ($this->page_now != $this->page_total) {
            return "<li><a href='" . $this->url_replace($this->page_now + 1) . "' title='下一页'>下一页</a><li>";
        } else {
            return "<li class='disabled'><a href='#'>下一页</a></li>";
        }
    }
	
	//最后一页
    private function go_last()
    {
        if ($this->page_now != $this->page_total) {
            return "<li><a href='" . $this->url_replace($this->page_total) . "' title='尾页'>尾页</a></li>";
        } else {
            return "<li class='disabled'><a href='#'>尾页</a></li>";
        }
    }

	//生成分页html
    public function write_html($id = 'page')
    {
        $str = "<ul class='pagination' id='" . $id . "'>";
        $str .= $this->go_home();
        $str .= $this->page_prev();
        for ($i = $this->page_start; $i <= $this->page_end; $i++) {
            if ($i == $this->page_now) {
                $str .= "<li class='active'><a href='" . $this->url_replace($i) . "' title='第" . $i . "页'>$i</a><li>";
            } else {
                $str .= "<li><a href='" . $this->url_replace($i) . "' title='第" . $i . "页'>$i</a></li>";
            }
        }
        $str .= $this->page_next();
        $str .= $this->go_last();
        $str .= "<span style='line-height:30px;' class='label label-info'>共<b>" . $this->page_total . "</b>页 <b>" . $this->total_data . "</b>条数据</span>";
        $str .= "</ul>";
        return $str;
    }
}

?>