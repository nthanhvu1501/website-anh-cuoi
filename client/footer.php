</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
<script src="../assets/js/select-image_vuntpc07201.js"></script>
<script src="../assets/js/slide_vanlthpc07042.js"></script>
<script src="../assets/js/admin_vuntpc07201.js"></script>
<!-- <script src="../assets/bootstrap/dist/js/bootstrap.min.js"></script> -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->

<!-- <script src="../assets/dist/js/app-style-switcher.js"></script> -->
<script src="../assets/dist/js/feather.min.js"></script>
<!-- <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script> -->
<!-- <script src="../assets/dist/js/sidebarmenu.js"></script> -->
<script src="../assets/dist/js/custom.min.js"></script>
<!-- <script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script> -->

</body>

</html>