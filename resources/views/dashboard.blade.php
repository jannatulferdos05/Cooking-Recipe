<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Dashboard</title>

    <style>
    .menu-item {
        background: rgba(255,255,255,0.1);
        padding: 12px;
        border-radius: 8px;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    .menu-item:hover {
        background: rgba(255,255,255,0.3);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        transform: translateX(5px);
    }

    a {
        color:white; 
        text-decoration:none; 
        display:block; 
        font-weight:bold;
    }
</style>
</head>
<body style="margin:0; font-family:Arial, sans-serif; display:flex; background:#fafafa;">

    <!-- Sidebar -->
    <div style="width:220px; background:#ff7043; height:100vh; padding:20px; box-sizing:border-box; color:white; position:fixed;">
    <h1 style="margin:0 0 30px 0; font-size:20px; text-align:center;">🍲 KiRanbo</h1>

    <div class="menu-item">
        <a href="#" class="menu-link">Home</a>
    </div>

    <div class="menu-item">
        <a href="#" >Video Tutorial</a>
    </div>

    <div class="menu-item">
        <a href="#" >My Profile</a>
    </div>

    <div class="menu-item">
        <a href="#" >About</a>
    </div>

    <div class="menu-item">
        <a href="#" >Contact</a>
    </div>
</div>


    <!-- Main Content -->
    <div style="margin-left:220px;  padding:30px; flex:1;">
        <h1 style="color:#333; margin-bottom:20px;">Welcome Back, Chef! 👩‍🍳</h1>
        <p style="color:#555; margin-bottom:30px;">Here are your latest recipes and what people are saying:</p>

        <!-- Post Card Example -->
        <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); margin-bottom:20px;">
            <h2 style="color:#ff7043; margin-bottom:10px;">Spicy Chicken Curry</h2>
            <p style="color:#555; font-size:14px; margin-bottom:15px;">A rich and flavorful chicken curry with a spicy kick, loved by everyone!</p>
            
            <!-- Likes & Comments -->
            <div style="display:flex; justify-content:space-between; align-items:center; font-size:14px; color:#777; margin-bottom:10px;">
                <span>👍 120 Likes</span>
                <span>💬 15 Comments</span>
            </div>

            <!-- Comments -->
            <div style="background:#f9f9f9; padding:10px; border-radius:8px;">
                <p style="margin:5px 0;"><strong>Anna:</strong> Wow! I tried this and it was amazing 😍</p>
                <p style="margin:5px 0;"><strong>John:</strong> Perfect recipe for dinner, thanks chef!</p>
            </div>
        </div>

        <!-- Another Post -->
        <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); margin-bottom:20px;">
            <h2 style="color:#ff7043; margin-bottom:10px;">Smashed Egg</h2>
            <p style="color:#555; font-size:14px; margin-bottom:15px;">Make yummy smashed eggs in easiest way!</p>
            
            <div style="display:flex; justify-content:space-between; align-items:center; font-size:14px; color:#777; margin-bottom:10px;">
                <span>👍 200 Likes</span>
                <span>💬 32 Comments</span>
            </div>

            <div style="background:#f9f9f9; padding:10px; border-radius:8px;">
                <p style="margin:5px 0;"><strong>Sara:</strong> This looks so delicious, can’t wait to try 🍕</p>
                <p style="margin:5px 0;"><strong>Mike:</strong> I added mushrooms, turned out perfect!</p>
            </div>
        </div>
        
    </div>

</body>
</html>
