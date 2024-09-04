<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar .logo {
            padding: 20px;
            text-align: center;
            background-color: #1a252f;
            font-size: 24px;
            font-weight: bold;
        }

        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .sidebar ul li {
            padding: 15px 20px;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #34495e;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .header {
            padding: 20px;
            background-color: #ecf0f1;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            margin: 0;
        }

        .header button {
            padding: 10px 20px;
            background-color: #2980b9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .content {
            padding: 20px;
            flex-grow: 1;
            background-color: #fff;
            overflow-y: auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }

        .card {
            background-color: #3498db;
            padding: 20px;
            border-radius: 8px;
            color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            margin-top: 0;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            padding: 15px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">Admin Dashboard</div>
        <ul>
            <li><a href="department.php">Department</a></li>
            <li><a href="Job.html">Job</a></li>
            <li><a href="Employee.html">Employee</a></li>
            <li><a href="Hotel.html">Hotel</a></li>
            <li><a href="Room.html">Room</a></li>
            <li><a href="roomtype.html">Room Type</a></li>
        </ul>
        <ul>
            <li><a href="" id="logout">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Admin Dashboard</h2>
            <button>Admin Action</button>
        </div>

        <div class="alert">
            <p><strong>Restricted Access:</strong> This page is only accessible to individuals in high-level positions within the hotel. Please ensure you have the appropriate authorization to use this dashboard.</p>
        </div>

        <div class="content">
            <div class="cards">
                <div class="card">
                    <h3>Department</h3>
                    <p>Manage department information.</p>
                </div>
                <div class="card">
                    <h3>Job</h3>
                    <p>Manage job roles and descriptions.</p>
                </div>
                <div class="card">
                    <h3>Employee</h3>
                    <p>Manage employee details and records.</p>
                </div>
                <div class="card">
                    <h3>Hotel</h3>
                    <p>Manage hotel information and settings.</p>
                </div>
                <div class="card">
                    <h3>Room</h3>
                    <p>Manage room details and availability.</p>
                </div>
                <div class="card">
                    <h3>Room Type</h3>
                    <p>Manage different types of rooms.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            window.location.href = 'index.html'; // Redirect to login page
        });
    </script>
</body>
</html>
