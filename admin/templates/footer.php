<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="copyright text-muted">Copyright &copy; <?= COMPANY ?> <?= date('Y') ?></p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Summernote -->
<script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

<!-- Theme JavaScript -->
<script src="../js/scripts.js"></script>

<!-- Summernote Initialization -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                  // set focus to editable area after initializing summernote
        });
    });
</script>
