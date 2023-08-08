<footer class="footer text-center text-muted">
    All Rights Reserved by Freedash. Designed and Developed by <a href="https://adminmart.com/">Adminmart</a>.
</footer>

</div>

</div>

<script>
    $(".preloader ").fadeOut();
</script>
<script>
    (() => {
        'use strict'
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/ckeditor/ckeditor.js"></script>

<!-- apps -->
<!-- apps -->
<script src="../assets/dist/js/app-style-switcher.js"></script>
<script src="../assets/dist/js/feather.min.js"></script>
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../assets/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script>
<script src="../assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/dist/js/pages/dashboards/dashboard1.min.js"></script>
<!-- data table -->
<script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
<script src="../assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>