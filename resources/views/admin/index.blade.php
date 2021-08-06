<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Admin panel</title>

        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">
        <div id="wrapper">
            <x-admin.sidebar></x-admin.sidebar>
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <x-admin.topbar></x-admin.topbar>
                    <div class="container-fluid">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Новости</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>Создать новость</a>
                        </div>

                        <div class="row">

                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->
                <x-admin.footer></x-admin.footer>
            </div>
        </div>
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    </body>
</html>
