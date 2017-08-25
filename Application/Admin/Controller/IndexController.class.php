<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
      $this->display();
    }
    public function clearCache(){
      //判断目录是否存在
      if(deleteFile(HTML_PATH)){
      	$this->success('清除缓存成功');
      }else{
        $this->success('清除缓存成功');
      }
   }
   public function count(){
        $str = 'Day,访问量(PV),访问用户(UV)'."\n";
        for($i=0;$i<7;$i++){
        $oneDay = $i * 24 * 3600; 
        $stime = strtotime(date('Y-m-d')) - $oneDay;
        $etime = strtotime(date('Y-m-d')) + 24 * 3600 - 1 - $oneDay;
      
        $map[] = ['acs_time'=>['egt',$stime]];
        $map[] = ['acs_time'=>['elt',$etime]];

        $dayPV = M('Access')->where($map)->count();
        $dayUV = M('Access')->field('ip')->where($map)->group('ip')->select();
        
        $dayNumUV = count($dayUV);
        unset($map);
        $str .= date('Y-m-d',$stime).','.$dayPV.','.$dayNumUV."\n";
      }
      echo $str;
   }
}