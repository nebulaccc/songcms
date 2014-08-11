<?php
/**
 *  Title      : 编辑HTML页面控制器
 *  --------------------------------------------------------
 *  Description: 
 *  --------------------------------------------------------
 *  Author     : Nebula (nebula212@163.com)
 *  Date       : 2014-08-08
 *  --------------------------------------------------------
 */
class EditHtmlController extends AdminBase {
    /**
     * 默认页面
     */
    public function actionIndex() {
        $this->render('index');
    }

    public function actionCreate() {
        $edit_html_model = new EditHTML();
        if (isset($_POST['edit_html'])) {
            $edit_html_model->page_name = $_POST['edit_html']['page_name'];
            $edit_html_model->page_content = htmlspecialchars($_POST['edit_html']['page_content']);
            $edit_html_model->create_time = time();
            $edit_html_model->update_time = time();
            if ($edit_html_model->save()) {
                $this->redirect(array('index'));
            }
        }

        $data['model'] = $edit_html_model;
        $this->render('create', $data);
    }
}
