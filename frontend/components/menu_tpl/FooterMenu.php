<div class="col-lg-2 hidden-md hidden-sm">
    <div class="single-footer">
        <h4 class="footer-title border-left"><?= $category['name'] ?></h4>
        <ul class="footer-menu">
            <?php if(isset($category['childs'])):?>
            <?= $this->getMenuHtml($category['childs']) ?>
            <?php endif;?>
        </ul>
    </div>
</div>
<div class="col-lg-2 col-md-3 col-sm-4">
    <div class="single-footer">
        <h4 class="footer-title border-left">my account</h4>
        <ul class="footer-menu">
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Account</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Wishlist</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>My Cart</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>Sign In</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>Registration</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>Check out</span></a>
            </li>
            <li>
                <a href="#"><i class="zmdi zmdi-circle"></i><span>Oder Complete</span></a>
            </li>
        </ul>
    </div>
</div>