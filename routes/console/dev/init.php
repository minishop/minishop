<?php
/**
 * Created by PhpStorm.
 * User: Starwind
 * Date: 2017/10/7
 * Time: 上午10:58
 */

Artisan::command('dev:init', function () {

    foreach (File::directories(app_path()) as $dir) {
        set_time_limit(600);
        ini_set('memory_limit', '2048M'); // set at the top of the file
        //if (!is_dir("$dir/.git")) {
            chdir($dir);
            system('git init');
            system('git add -A');
            system('git commit -m "$(date)"');
            system('git remote add origin ssh://git@git.shopes.cn:10022/minishop/' . strtolower(basename($dir)) . ".git");
            system('git push -u origin master');
        //}
    }
});