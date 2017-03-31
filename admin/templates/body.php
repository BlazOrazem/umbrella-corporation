<!-- Page Header -->
<header class="intro-header" style="background-image: url('../img/cover_default.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Administration</h1>
                    <hr class="small">
                    <span class="subheading">for <?= COMPANY ?> website</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
                // If action parameter is set on URL and is not empty
                if (isset($_GET['action']) && $_GET['action'] != '') {
                    switch($_GET['action']) {
                        case 'addPage':
                            include('addPage.php');
                            break;

                        case 'editPage':
                            $query = "SELECT * FROM page WHERE id = {$_GET['ID']}";
                            $result = mysqli_query($db, $query);
                            $page = mysqli_fetch_assoc($result);

                            include('editPage.php');
                            break;

                        case 'insertPage':
                            $title = $_POST['title'];
                            $menu = $_POST['menu'];
                            $content = $_POST['content'];
                            $isActive = $_POST['is_active'];

                            $sql = "INSERT INTO page (title, menu, content, is_active, created_at, updated_at)
                                    VALUES ('{$title}', '{$menu}', '{$content}', '{$isActive}', NOW(), NOW())";

                            $db->query($sql);

                            header('Location: index.php');
                            break;

                        case 'updatePage':
                            $title = $_POST['title'];
                            $menu = $_POST['menu'];
                            $content = $_POST['content'];
                            $isActive = $_POST['is_active'];

                            if (isset($_FILES['image']) && $_FILES['image']['name']) {
                                $fileName = $_FILES['image']['name'];;
                                $fileName = str_replace(' ', '', $fileName);
                                $fileTmp = $_FILES['image']['tmp_name'];

                                // Save image file in uploads folder
                                move_uploaded_file($fileTmp, realpath('') . "/../uploads/" . $fileName);

                                // Update this page with image value
                                $sql = "UPDATE page SET image = '{$fileName}' WHERE id = {$_GET['ID']}";
                                $db->query($sql);
                            }

                            $sql = "UPDATE page
                                    SET title = '{$title}',
                                        menu = '{$menu}',
                                        content = '{$content}',
                                        is_active = '{$isActive}',
                                        updated_at = NOW()
                                    WHERE id = {$_GET['ID']}";

                            $db->query($sql);

                            redirect(ADMIN_URL);
                            break;

                        case 'deletePage':
                            $id = $_GET['ID'];

                            $sql = "DELETE FROM page WHERE id = {$id}";

                            $db->query($sql);

                            redirect(ADMIN_URL);
                            break;
                    }
                } else {
                    include('listPage.php');
                }
            ?>
        </div>
    </div>
</div>

<hr>