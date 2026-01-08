<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbie Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* --- GLOBAL STYLES --- */
        :root {
            --barbie-hot-pink: #E0218A;
            --barbie-soft-pink: #FFD1DC;
            --barbie-blue: #40C4FF; /* For accents */
        }

        body {
            font-family: 'Fredoka', sans-serif;
            /* Fun Gradient Background */
            background: linear-gradient(135deg, #fff0f5 0%, #ffd1dc 100%);
            min-height: 100vh;
        }

        /* --- NAVBAR --- */
        .navbar {
            background-color: var(--barbie-hot-pink) !important;
            box-shadow: 0 4px 15px rgba(224, 33, 138, 0.4);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .navbar-brand {
            font-size: 1.8rem;
            text-shadow: 2px 2px 0px rgba(0,0,0,0.1);
        }
        .nav-link {
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            color: #fff !important;
            transform: scale(1.1) rotate(-2deg); /* Cute tilt on hover */
            text-shadow: 0 0 10px rgba(255,255,255,0.8);
        }

        /* --- CARDS (Containers) --- */
        .card {
            border: none;
            border-radius: 25px; /* Super rounded */
            box-shadow: 0 10px 25px rgba(224, 33, 138, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(5px);
        }
        .card:hover {
            transform: translateY(-10px); /* Floats up when hovered */
            box-shadow: 0 15px 35px rgba(224, 33, 138, 0.25);
        }
        .card-header {
            background-color: var(--barbie-soft-pink);
            color: var(--barbie-hot-pink);
            font-weight: 700;
            border-top-left-radius: 25px !important;
            border-top-right-radius: 25px !important;
            border-bottom: 2px solid white;
            text-align: center;
            font-size: 1.5rem;
        }

        /* --- BUTTONS (The Interactive Part) --- */
        .btn {
            border-radius: 50px; /* Pill shape */
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275); /* Bouncy animation */
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .btn-primary {
            background-color: var(--barbie-hot-pink);
        }
        .btn-primary:hover {
            background-color: #b01b6c;
            transform: scale(1.1); /* Grow */
        }
        
        /* Edit Buttons = Barbie Blue */
        .btn-warning, .btn-info {
            background-color: var(--barbie-blue);
            color: white !important;
        }
        .btn-warning:hover, .btn-info:hover {
            transform: scale(1.1) rotate(3deg);
            background-color: #009be0;
        }

        /* --- INPUT FORMS --- */
        .form-control, .form-select {
            border-radius: 15px;
            border: 2px solid var(--barbie-soft-pink);
            padding: 10px;
        }
        .form-control:focus {
            border-color: var(--barbie-hot-pink);
            box-shadow: 0 0 0 0.25rem rgba(224, 33, 138, 0.25);
        }

        /* --- TABLE STYLING --- */
        .table thead {
            background-color: var(--barbie-hot-pink);
            color: white;
            border-radius: 15px;
        }
        .table thead th:first-child { border-top-left-radius: 15px; }
        .table thead th:last-child { border-top-right-radius: 15px; }
        
        /* --- PAGE ANIMATION --- */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .container {
            animation: fadeIn 0.8s ease-out;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-5">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">💖 Student Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/students/create') }}">Add New</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>