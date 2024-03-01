<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход в админ-панель</title>    
</head>
<body>
    <h2 style="text-align:center; padding-top:100px">Вход в админ-панель</h2>
    <form action="admin/admin.php" method="post" style="text-align:center; padding-top:10px">
        <div class="form-group">
            <input type="text" placeholder="login" name="login">
        </div>
        <div class="form-group">
            <input type="text" placeholder="password" name="password">
        </div>
            <button type="submit" class="btn-primary">Войти</button>
    </form>
</body>
</html>