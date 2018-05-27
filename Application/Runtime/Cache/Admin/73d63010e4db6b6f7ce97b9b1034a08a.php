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
    <!-- 自定义样式可以直接写在这 -->
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>商品管理</h5>
                </div>
                <!--  -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-content">
                                <form role="form" class="form-inline" action="" method="get" target="_self">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2" class="">名称:</label>
                                        <input type="text" placeholder="请输入商家名" id="exampleInputEmail2" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2" class="">:分类</label>
                                        <select class="form-control" name="">
                                        <?php foreach ($classifylists as $value) {?>
                                        <option><?php echo $value['name'];?></option>
                                        <?php foreach ($value['child'] as $v) { ?>
                                        <option><?php echo $v['name'];?></option>
                                        <?php } ?>
                                        <?php }?>
                                        </select>
                                    </div>
                                    <button class="btn btn-white" type="submit">搜索</button>
                                    <a href="<?php echo U('admin/seller/edit');?>" class="btn btn-primary" type="submit" target="_self">新增</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>商家名字</th>
                            <th>地址</th>
                            <th>商家分类</th>
                            <th>状态(0:下线,1:上线)</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                <td><?php echo ($vo["id"]); ?></td>
                                <td><?php echo ($vo["name"]); ?></td>
                                <td><?php echo ($vo["address"]); ?></td>
                                <td><?php echo ($classify1[$vo['id']]); ?></td>
                                <td><?php echo ($vo["status"]); ?></td>
                                <td>
                            <?php if ($vo['status']==0) { ?>
                            <a href="<?php echo U('admin/seller/online',array('id'=>$vo['id']));?>" target="_self">上线</a>
                            <?php } else if ($vo['status'] == 1) { ?>
                            <a href="<?php echo U('admin/seller/offline',array('id'=>$vo['id']));?>" target="_self">下线</a>
                                <?php } ?>
                                </td>  
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                         <!-- <tfoot> -->
                            <tr>
                                <td colspan="6">
                                    <?php echo ($page); ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
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