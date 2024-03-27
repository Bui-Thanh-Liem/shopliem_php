<div class="container">
    <p class="fw-bold fs-4 my-4 text-danger">Quản lý Menu</p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Thêm menu mới
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Mục Menu Mới</h5>
                    <button type="button" class="btn-close border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <form action="./index.php?action=nav&act=them" method="post">
                        <div class="mb-3">
                            <label for="name_nav" class="form-label">Tên Menu mới: </label>
                            <input type="text" name="name_nav" class="form-control" id="name_nav" placeholder="...">
                        </div>
                        <div class="mb-3">
                            <label for="key_nav" class="form-label">Key Menu mới: </label>
                            <input type="text" name="key_nav" class="form-control" id="key_nav" placeholder="...">
                        </div>
                        <div class="text-center mt-5">
                            <button name="submit" type="submit" class="btn btn-success w-50">OK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên menu</th>
                <th scope="col">Key menu (id loại sản phẩm)</th>
                <th scope="col">Cập nhật / Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nav = new Nav();
            $navs = $nav->getAllNav();
            while ($n = $navs->fetch()) :
            ?>
                <tr>
                    <td><?php echo $n['name_nav']; ?></td>
                    <td><?php echo $n['key_nav']; ?></td>
                    <td>
                        <div>
                            <a href="./index.php?action=nav&act=capNhat&id=<?php echo $n['id_nav'];?>" class="btn btn-warning">Cập nhật</a>
                            <a href="./index.php?action=nav&act=xoa&id=<?php echo $n['id_nav']; ?>" class="btn btn-danger">Xóa</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php 
// echo ($n['key_nav'] == 'all') || ($n['key_nav'] == 'sale') ? 'disabled' : '';
?>