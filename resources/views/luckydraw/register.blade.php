<!DOCTYPE html>
<html>
<head>
    <title>ลงทะเบียนลุ้นโชค</title>
</head>
<body>
    <h1>ลงทะเบียนลุ้นโชค</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/luckydraw/register" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="ชื่อ-นามสกุล" required><br><br>
        <input type="email" name="email" placeholder="อีเมล" required><br><br>
        <input type="text" name="phone" placeholder="เบอร์โทรศัพท์" required><br><br>
        <input type="file" name="image" accept="image/*"><br><br>
        <button type="submit">ลงทะเบียน</button>
    </form>
</body>
</html>
