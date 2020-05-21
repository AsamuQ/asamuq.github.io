<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
//主要为跨域CORS配置的两大基本信息,Origin和headers

      /* 批量转换 文件名为 小写英文 + 使用 连字符-替换-空格 */
$path = '../model/test-path';//<--- 在此输入目录路径，并执行本面页


/*-----------------------------------------------------------------*/
                $path = str_replace('\\', '/', $path);
          if (substr($path, -1) != '/') $path = $path . '/';
/*-----------------------------------------------------------------*/
foreach ( glob($path.'*') as $file ) {
    $new_filename = str_replace(' ', '-', strtolower($file));
    rename($file, $new_name); echo $file.' -> '.$new_name." ok. \n";
}
/*-----------------------------------------------------------------*/
