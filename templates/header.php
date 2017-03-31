<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?= BASE_URL ?>"><?= COMPANY ?></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                    // Select all fields from page table, but only for the active pages
                    $query = "SELECT * FROM page WHERE is_active = 1";

                    $result = mysqli_query($db, $query);

                    $pages = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach ($pages as $page) {
                        // Assign active class to <li> element on current page
                        $class = (isset($_GET['page']) && $_GET['page'] == $page['id']) ? 'active' : '';

                        echo "<li class='{$class}'>";

                        // Page title should be menu field value, unless it's empty - in that case, use title field value
                        $pageTitle = $page['menu'] ?: $page['title'];

                        echo "<a href='?page={$page['id']}'>{$pageTitle}</a>";

                        echo "</li>";
                    }
                ?>
                <li>
                    <!-- Redirect to official Umbrella Corporation website -->
                    <a href="?redirect=http://residentevil.wikia.com/wiki/Umbrella_Corporation" target="_blank">Source</a>
                </li>
            </ul>
        </div>
    </div>

</nav>