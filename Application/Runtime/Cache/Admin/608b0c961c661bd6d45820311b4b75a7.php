<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="favicon.ico">
<link href="/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/admin/assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Data Tables -->
<link href="/Public/admin/assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<link href="/Public/admin/assets/css/animate.min.css" rel="stylesheet">
<link href="/Public/admin/assets/css/style.min.css" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑商品</h5>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal" action="<?php echo U('save');?>" method="post" target="_self">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">商品属性</label>
                                <div class="col-sm-5">
                                <br>
                                    名字:<input type="text" class="form-control" name="name">

                                <br>
                                    价格:<input type="text" class="form-control" name="price">
                                
                                    图片:<input type="file" class="form-control" name="img">
                                <br>
                                    商家:<input type="text" class="form-control" name="seller">
                                <br>
                                    简介:<input type="text" class="form-control" name="summary">
                                    </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所属分类</label>
                                
                                <div class="col-sm-5">
                                    <select class="form-control m-b" name="classify_id">
                                    <option value="0">请选择</option>
                                    <?php foreach ($classifylists as $value) {?>
                                        <option value="<?php echo $value['id'];?>"><?php echo $value['name'];?></option>
                                        <?php foreach ($value['child'] as $v) { ?>
                                            <option value="<?php echo $v['id'];?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $v['name'];?></option>
                                        <?php } ?>
                                    <?php }?>
                                    
                                        

                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-white" type="reset">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="/Public/admin/assets/js/jquery.min.js"></script>
<script src="/Public/admin/assets/js/bootstrap.min.js"></script>
<script src="/Public/admin/assets/js/plugins/jeditable/jquery.jeditable.js"></script>
<script src="/Public/admin/assets/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="/Public/admin/assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="/Public/admin/assets/js/content.min.js"></script>
</body>

</html>