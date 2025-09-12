<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Styles / Scripts -->
      <!--  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else 
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com @layer theme{:root,:host{}}
            </style>
        @endif -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cooking Recipe Sharing - Login</title>
    </head>
    <body style="margin:0; padding:0; font-family: Arial, sans-serif; height:100vh; display:flex; justify-content:center; align-items:center; background:linear-gradient(-45deg, #f9f9f9, #ffe6e6, #fff7e6, #e6ffe6); background-size:400% 400%; animation: gradientBG 12s ease infinite;">

    <div style="background:white; padding:40px; border-radius:15px; box-shadow:0 8px 20px rgba(0,0,0,0.1); width:350px; text-align:center;">
        <h1 style="color:#ff7043; margin-bottom:10px;">Welcome, Cooks! 🍳</h1>
        <p style="color:#555; font-size:14px; margin-bottom:25px;">Share your recipes, inspire others, and discover new cooking ideas.</p>
        
        <form action="" method="POST" style="display:flex; flex-direction:column; gap:15px;">
            @csrf
            <input type="email" name="email" placeholder="Email" required
                style="padding:12px; border:1px solid #ddd; border-radius:8px; font-size:14px;">
            
            <input type="password" name="password" placeholder="Password" required
                style="padding:12px; border:1px solid #ddd; border-radius:8px; font-size:14px;">
            
            <button type="submit" 
                style="background:#ff7043; color:white; border:none; padding:12px; border-radius:8px; font-size:15px; cursor:pointer; transition:0.3s;">
                Login
            </button>
        </form>

        <p style="margin-top:20px; font-size:13px; color:#777;">
            Don’t have an account? <a href="" style="color:#ff7043; text-decoration:none;">Register</a>
        </p>
    </div>

    <style>
        @keyframes gradientBG {
            0% {background-position:0% 50%;}
            50% {background-position:100% 50%;}
            100% {background-position:0% 50%;}
        }
        button:hover {
            background:#e65c2a;
        }
    </style>

</body>
</html>
