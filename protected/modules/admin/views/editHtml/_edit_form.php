<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/js/ckeditor/plugins/colordialog/ckeditor.js"></script>
<?php $form = $this->beginWidget('CActiveForm',
               array('id'=>'html_edit_form',
                     'method'=>'post',
                     'action'=>$this->createUrl($action,
                     array('id'=>$model->id)),
                     'htmlOptions'=>array('name'=>'company_form',
                          )
                     )
    );?>
<div>
<div>
  <label for="page_name">文件名：</label>
  <div class="">
  <input type="text" id="page_name" name="edit_html[page_name]" value="<?php echo $model->page_name; ?>" />
  <span style="color: #b94a48!important;"><?php echo $form->error($model, 'page_name'); ?></span>
  </div>
</div>
<div>
   <label for="page_content">内容：</label>
   <span style="color: #b94a48!important;"><?php echo $form->error($model, 'page_content'); ?></span>
   <div class="" style="width: 950px">
   <textarea id="edit_page" name="edit_html[page_content]" rows="10" cols="80" class="ckeditor"><?php echo $model->page_content; ?></textarea>
     <script>
       CKEDITOR.replace('edit_page'); 
     </script>
   </div>
</div>
<div class="">
    <button id="bsubmit" type="submit" data-loading-text="Submitting..." class="">保存</button>
</div>
</div>
<?php $this->endWidget(); ?>
</form>
