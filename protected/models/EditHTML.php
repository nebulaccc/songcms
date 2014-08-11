<?php
/**
 * Title      : {{edit_html}} 数据表模型类
 * ----------------------------------------------------
 * Description: 
 * ----------------------------------------------------
 * Author     : Nebula (nebula212@163.com)
 * Date       : 2014-08-08
 * ----------------------------------------------------
 */
class EditHTML extends BaseModel
{
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return '{{edit_html}}';
    }

    public function rules()
    {
        return array(
            array('page_name, page_content', 'required'),
            array('page_name', 'length', 'max'=>20, 'message'=>'不能超过20个字符'),
            array('page_name', 'match', 'pattern'=>'/^[a-zA-Z]+[_a-zA-Z0-9]*$/', 'message'=>'只允许数字，字母及下横杠（_）'),
            array('page_name', 'unique', 'message'=>'文件名已存在'),
        );
    }

    public function attributeLabesl()
    {
        return array(
            'page_name'=>'网页文件名',
            'page_content'=>'网页内容',
            );
    }

    public function relations()
    {
        return array(
            
        );
    }
}
