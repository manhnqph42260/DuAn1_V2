<div class="row mb">
    <div class="boxtrai mr" style="margin-bottom: auto;">

        <div class="row mb">
            <?php if (isset($onesp)): ?>
                <div class="boxtitle"><?= htmlspecialchars($onesp['name']) ?></div>
                <div class="row boxcontent">
                    <?= nl2br(htmlspecialchars($onesp['mota'])) ?>
                    <div class="row mb">
                        <img class="spct" src="<?= htmlspecialchars(BASE_URL . $onesp['img']) ?>" alt="Hình ảnh sản phẩm">
                    </div>
                    <div class="quantity">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" style="width: 60px;">
                        <button class="add-to-cart" data-id="<?= htmlspecialchars($id) ?>">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            <?php else: ?>
                <p>Không tìm thấy thông tin sản phẩm.</p>
            <?php endif; ?>
        </div>

        <?php if (isset($_SESSION['user'])): ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    const idpro = <?= isset($onesp['id']) ? json_encode($onesp['id']) : 'null' ?>;
                    if (idpro) {
                        $("#binhluan").load("view/binhluan/binhluanform.php", {
                            idpro: idpro
                        });
                    }
                });
            </script>
        <?php endif; ?>

        <div class="row" id="binhluan"></div>

        <div class="row mb">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">
                <?php if (!empty($sp_cung_loai)): ?>
                    <ul>
                        <?php foreach ($sp_cung_loai as $sanPham): ?>
                            <li>
                                <a style="text-decoration: none;" href="index.php?act=sanphamct&idsp=<?= htmlspecialchars($sanPham['id']) ?>">
                                    <?= htmlspecialchars($sanPham['name']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Không có sản phẩm cùng loại.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="boxphai" style="margin-bottom: auto;">
        <?php include "boxright.php"; ?>
    </div>
</div>