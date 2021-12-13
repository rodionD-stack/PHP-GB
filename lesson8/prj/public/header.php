<header>
    <nav>
        <ul>
            <li><a href="index.php">ГЛАВНАЯ</a></li>
            <li><a href="reviews.php">ОТЗЫВЫ</a></li>
            <?php
            if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
                echo "<li><a href='login.php?action=profile'><u>Личный кабинет</u></a></li>";
                echo "<li><a href='login.php?action=logout'><u>Выйти</u> </a>(" . $_SESSION['login'] . ")</li>";
            } else {
                echo "<li><a href='login.php'><u>Войти</u></a></li>";
                echo "<li><a href='reg.php'><u>Регистрация</u></a></li>";
            }
            if (isset($_SESSION['login']) && isset($_SESSION['pass']) && $_SESSION['login'] == 'admin') {
            ?>
                <li><a href="../admin/">Админка</a></li>
            <? } ?>
        </ul>

        <?
        if (isset($_SESSION['basket'])) {
            echo "<h3 class=\"basket\">Корзина: <span class=\"basket-items\"><a href='basket.php'><u>Просмотреть товары</u></a></span></h3>";
        } else {
            echo "<h3 class=\"basket\">Корзина: <span class=\"basket-items\">Корзина пуста</span></h3>";
        }
        ?>
    </nav>
</header>