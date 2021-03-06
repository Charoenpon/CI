<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">จัดการหมวดหมู่ข่าว</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="text-right">
            <a href="<?php echo base_url('admin/add_category') ?>" class="btn btn-xs btn-primary">
                <i class="fa fa-plus"></i>เพิ่มหมวดหมู่</a>
        </div>
        <div class="col-lg-12">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>ชื่อหมวดหมู่</th>
                    <th>จัดการ</th>
                </tr>
                //ถ้า category ที่ return ออกมามีค่ามากกว่า0
                <?php if ($category->num_rows() > 0) {
                    foreach ($category->result() as $c) {
                        ?>
                        <tr>
                            <td>1</td>
                            <td><?php echo $c->name ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/edit_category/' . $c->categories_id) ?>"
                                   class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>แก้ไข</a>
                                <a href="<?php echo base_url('admin/delete_category/' . $c->categories_id) ?>"
                                   class="btn btn-sm btn-danger"><i class="fa fa-times"></i>ลบ</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="3">== ไม่มีข้อมูล ==</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->