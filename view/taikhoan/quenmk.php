
<div class="row mb">
    <div style="margin-bottom: auto;" class="boxtrai mr">
    <div class="row mb">                          
        <div class="boxtitle">Quên mật khẩu</div>
            <div class="row boxcontent formtaikhoan">            
                <form action="index.php?act=quenmk  " method="post">
                    <div class="row mb10">
                        Email
                    <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                    <input type="submit" name="guiemail" value="Gửi">
                    <input style="margin-right :auto; margin-left : 5px;" type="reset" value="Nhập lại">
                    </div>
                    <div style="color: green;">
                        <?= $thongBaoThanhCong ?>
                    </div>
                    <div style="color: red;">
                        <?= $thongBaoLoi ?>
                    </div>
                </form>
            </div>            
        </div>                            
            </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>