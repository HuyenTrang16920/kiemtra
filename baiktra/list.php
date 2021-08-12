<?php if (!defined('IN_SITE')) die ('The request not found');
 
// Kiểm tra quyền, nếu không có quyền thì chuyển nó về trang logout
if (!is_admin()){
    redirect(base_url('admin'), array('m' => 'common', 'a' => 'logout'));
}
?>
 
<?php include_once('widgets/header.php'); ?>
 
<?php // VỊ TRÍ 01: CODE XỬ LÝ PHÂN TRANG ?>
 
<h1>Danh sách thành viên</h1>
<div class="controls">
    <a class="button" href="<?php echo create_link(base_url('admin'), array('m' => 'user', 'a' => 'add')); ?>">Thêm</a>
</div>
<table cellspacing="0" cellpadding="0" class="form">
    <thead>
        <tr>
            <td>Username</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        <?php // VỊ TRÍ 02: CODE HIỂN THỊ NGƯỜI DÙNG ?>
    </tbody>
</table>
 
<div class="pagination">
    <?php // VỊ TRÍ 03: CODE HIỂN THỊ CÁC NÚT PHÂN TRANG ?>
</div>
 
<?php include_once('widgets/footer.php'); ?>
 Kiểm tra quyền, nếu không có quyền thì chuyển nó về trang logout
if (!is_admin()){
    redirect(base_url('admin'), array('m' => 'common', 'a' => 'logout'));
}