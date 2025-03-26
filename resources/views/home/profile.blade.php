<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .profile-card {
            background: linear-gradient(130deg, #5fdfff, #feb47b);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            text-align: center;
            width: 350px;
        }
        .profile-card img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            border: 3px solid white;
            margin-bottom: 10px;
        }
        .profile-card h2 {
            color: #fff;
            margin-bottom: 5px;
        }
        .profile-card p {
            color: #fff;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="{{ $user->profile_image }}" alt="Profile Image">
        <h2>{{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        <p>Role: {{ $user->role }}</p>
    </div>
</body>
</html>
