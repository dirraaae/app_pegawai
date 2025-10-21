<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'App Pegawai')</title>

    <!-- Laravel Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: row;
            background-color: #fef6f9;
            font-family: 'Poppins', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #a0c4ff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 15px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar h3 {
            color: white;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .sidebar .nav-button {
            width: 100%;
            background-color: white;
            color: #457b9d;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            text-align: left;
            transition: 0.2s;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .sidebar .nav-button:hover {
            background-color: #ffe5ec;
            color: #1d3557;
            transform: translateX(3px);
        }

        /* Main content */
        main {
            flex: 1;
            padding: 40px;
            overflow-y: auto;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            background-color: #ffffffd9;
        }

        footer {
            background-color: #f8edeb;
            padding: 10px 0;
            text-align: center;
            border-top: 1px solid #ddd;
            position: fixed;
            bottom: 0;
            width: calc(100% - 220px);
            left: 220px;
        }

        footer p {
            margin: 0;
            color: #8d99ae;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .sidebar {
                flex-direction: row;
                width: 100%;
                justify-content: space-around;
                padding: 10px;
            }

            .sidebar h3 {
                display: none;
            }

            .sidebar .nav-button {
                flex: 1;
                margin: 5px;
                text-align: center;
            }

            footer {
                width: 100%;
                left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <h3>App Pegawai</h3>
        <a href="{{ url('/employees') }}"><button class="nav-button"><i class="bi bi-people-fill me-2"></i>Employee</button></a>
        <a href="{{ url('/departments') }}"><button class="nav-button"><i class="bi bi-building me-2"></i>Department</button></a>
        <a href="{{ url('/attendance') }}"><button class="nav-button"><i class="bi bi-calendar-check me-2"></i>Attendance</button></a>
        <a href="{{ url('/report') }}"><button class="nav-button"><i class="bi bi-file-earmark-text me-2"></i>Report</button></a>
        <a href="{{ url('/settings') }}"><button class="nav-button"><i class="bi bi-gear-fill me-2"></i>Settings</button></a>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} App Pegawai</p>
    </footer>
</body>
</html>
