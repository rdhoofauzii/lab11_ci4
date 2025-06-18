<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #login-wrapper {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #999;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #999;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            background-color: #777;
        }

        .alert {
            background-color: #f2dede;
            color: #a94442;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ebccd1;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div id="login-wrapper">
        <h1>Sign In</h1>

        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert">
                <?= session()->getFlashdata('flash_msg') ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>

            <div class="mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" id="InputForPassword">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
