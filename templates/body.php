<?php
    // If redirect parameter is set on URL, redirect to a given URL via redirect() function, located in functions.php
    if (isset($_GET['redirect'])) {
        redirect($_GET['redirect']);
    }

    // If no page parameter is set on URL, the home page should be the page with ID: 1
    $pageId = !isset($_GET['page']) ? 1 : $_GET['page'];

    // Select all rows and fields from page table
    $query = "SELECT * FROM page WHERE id = {$pageId}";

    $result = mysqli_query($db, $query);

    $page = mysqli_fetch_assoc($result);

    // If page has a cover image uploaded, use that instead of the default one
    $coverImage = $page['image'] ? 'uploads/' . $page['image'] : 'img/cover_default.jpg';
?>

<!-- Page Header -->
<header class="intro-header" style="background-image: url('<?= $coverImage ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><?= $page['title'] ?></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?= $page['content'] ?>
        </div>
    </div>
</div>

<hr>

<?php
    // If page ID is 3, attach this contact form to the end of the page body
    if ($pageId == 3):
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form method="POST" action="<?= BASE_URL ?>contact.php" name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Your name</label>
                            <input name="name" type="text" class="form-control" placeholder="Your name"
                                   id="name" required data-validation-required-message="Enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email address</label>
                            <input name="email" type="email" class="form-control" placeholder="Email address"
                                   id="email" required data-validation-required-message="Enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone</label>
                            <input name="phone" type="text" class="form-control" placeholder="Phone"
                                   id="phone" required data-validation-required-message="Enter your phone.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea name="message" rows="5" class="form-control" placeholder="Message"
                                      id="message" required data-validation-required-message="Enter your message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
<?php
    endif;
?>
