<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Portfolio Manager</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #3b82f6;
            --bg: #0f172a;
            --card: #1e293b;
            --text: #f8fafc;
            --text-dim: #94a3b8;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .btn {
            background-color: var(--primary);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-outline {
            background: transparent;
            border: 1px solid var(--text-dim);
            color: var(--text-dim);
        }
        .btn-danger {
            background-color: #ef4444;
        }
        .card {
            background-color: var(--card);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            text-align: left;
            color: var(--text-dim);
            padding-bottom: 10px;
            border-bottom: 1px solid #334155;
        }
        td {
            padding: 15px 0;
            border-bottom: 1px solid #334155;
        }
        .img-preview {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 4px;
        }
        .category-tag {
            font-size: 12px;
            background: rgba(59, 130, 246, 0.1);
            color: var(--primary);
            padding: 4px 8px;
            border-radius: 4px;
            text-transform: uppercase;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        /* Form Styles */
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-dim);
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            background: #0f172a;
            border: 1px solid #334155;
            color: white;
            border-radius: 8px;
            box-sizing: border-box;
        }
        textarea { height: 100px; }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div style="background: #10b981; color: white; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
