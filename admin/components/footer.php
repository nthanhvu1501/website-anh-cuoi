<!-- <footer class="footer text-center text-muted">
    All Rights Reserved by Freedash. Designed and Developed by <a href="https://adminmart.com/">Adminmart</a>.
</footer> -->

</div>

</div>


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
<script src="../assets/js/admin_vuntpc07201.js"></script>
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="../assets/dist/js/app-style-switcher.js"></script>
<script src="../assets/dist/js/feather.min.js"></script>
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../assets/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script>

<script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<!-- <script src="../assets/dist/js/pages/dashboards/dashboard1.min.js"></script> -->

</body>

</html>