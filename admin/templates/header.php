<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?= ADMIN_URL ?>">Administration</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="?action=addPage">Add new page</a>
                </li>
                <li>
                    <a href="<?= ADMIN_URL ?>">List pages</a>
                </li>
                <li>
                    <a href="<?= BASE_URL ?>" target="_blank">Open website</a>
                </li>
            </ul>
        </div>

    </div>

</nav>