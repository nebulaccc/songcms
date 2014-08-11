<?php $this->renderPartial('/_includes/header'); ?>
<body>
<div>
<?php
$this->renderPartial('_edit_form', array(
        'model'=>$model,
        'action'=>'create',
    ));
?>
</div>
</body>
</html>
