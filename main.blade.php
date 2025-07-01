<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
        }
        .sidebar {
            background-color: #2c497f;
            min-height: 100vh;
            color: white;
            padding: 20px;
        }
        .sidebar h2 {
            font-size: 24px;
        }
        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }
        .sidebar ul li {
            margin: 15px 0;
        }
        .main-content {
            padding: 20px;
        }
        .header {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar">
                <h2>WAKWEKWOK</h2>
                <ul>
                    <li>Attendance</li>
                    <li>Settings</li>
                    <li>Manage Access</li>
                </ul>
            </div>

            <div class="col-md-9 col-lg-10 main-content">
                <div class="header">
                    👤 Username
                </div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>
