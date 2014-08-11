<?php
/**
 *  Title      : 歌曲 简介
 *  -----------------------------------------------------
 *  Description:
 *  -----------------------------------------------------
 *  Author     : Nebula (nebula212@163.com)
 *  Date       : 2014-08-08
 *  -----------------------------------------------------
 */
class SongsController extends FrontBase
{
    public function actionSong_brief() {
        $edit_html_model = new EditHTML();
        $page_name = $_GET['pname'];
        if ($edit_html_result = $edit_html_model->find('page_name=:pname', array(':pname'=>$page_name))) {
            $edit_html_result->page_content = htmlspecialchars_decode($edit_html_result->page_content);
        }
        
        $data['model'] = $edit_html_result;
        $this->render('/briefs/songs/songs_brief', $data);
    }
}
