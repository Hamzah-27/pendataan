<html>

<head>
    <!-- Initial meta charset -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scalle=1">

    <!-- My Css link -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Title -->
    <title><?= $title; ?></title>
</head>

<body>
    <header>Pendataan penduduk</header>
    <div class="container-css">
        <aside>

            <ul class="menu">
                <li> <a href="/" class="aktif">Dashboard</a></li>
                <li> <a href="/dashboard/datapenduduk"> Data penduduk </a></li>
                <li> <a href="/dashboard/create"> Insert data </a></li>
                <li> <a href="/logout"> Keluar </a></li>
            </ul>

        </aside>
        <?= $this->renderSection('content'); ?>

        <!-- Javascript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <!-- Script Penampilfoto -->
        <script>
        function previewImg() {
            const foto = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            const $fileFoto = new FileReader();
            $fileFoto.readAsDataURL(foto.files[0]);

            $fileFoto.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
        </script>

        <!-- Script hitung umur otomatis -->
        <script type="text/javascript">
        $(function() {
            $("#tgl_lahir")
        });

        window.onload = function() {
            $('#tgl_lahir').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('#usia').val(age);
            });
        }
        </script>
    </div>

    <footer>Copyright &copy; Muhammad Hamzah Risvi</footer>
</body>

</html>