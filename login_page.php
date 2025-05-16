<!DOCTYPE html>
<html lang="en">
<!-- 訓練POST -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        .backgroundpage {
            display: flex;
            width: 100%;
            height: 100vh;
            background-color: #f0f4f9;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            display: flex;
            width: 50%;
            height: 403px;
            background-color: #FFF;
            justify-content: center;
            align-items: space-between;
            padding: 1%;
            border-radius: 30px;
        }

        .text-box {
            width: 44%;
            /* background-color: pink; */
        }

        .acc-pw-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 55%;
            /* background-color: blue; */

        }

        .acc-pw-box-inside {}

        .acc-input {
            width: 98%;
            height: 50px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .pw-input {
            width: 98%;
            height: 50px;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .astyle {
            text-decoration: none;
            padding: 5px;
            border-radius: 15px;
        }

        .astyle:hover {
            background-color: rgb(149, 190, 240);
        }

        #h1text {
            margin-top: 1.34em;
            margin-bottom: 0.67em;
            margin-left: 0.67em;

        }

        .text-span {
            margin-left: 1.45em;
        }

        .create-login-box {
            margin-top: 30px;
            margin-left: 150px;
        }

        .createbox {
            width: 100px;
            background-color: white;
            height: 50px;
            border: none;

            border-radius: 30px;
        }

        .createbox:hover {
            background-color: #f0f4f9;
        }

        .loginbox {
            width: 100px;
            height: 50px;
            border-radius: 30px;
            border: none;
            background-color: rgb(25, 93, 175);
            color: white;
            font-size: 16px;
        }

        .loginbox:hover {
            background-color: rgb(5, 70, 150);
        }
    </style>
</head>

<body>
    <div class="backgroundpage">
        <div class="login-box">
            <div class="text-box">
                <h1 id="h1text">登入</h1>
                <span class="text-span">請注意，此為開發頁面</span>
            </div>
            <div class="acc-pw-box">
                <div class="acc-pw-box-inside">
                    <form action="" method="post">
                        <div>
                            <input type="text" class="acc-input" placeholder="電子郵件或手機號碼">
                        </div>
                        <div>
                            <input type="text" class="pw-input" placeholder="輸入您的密碼">
                        </div>
                        <div><a class="astyle" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley" target="_block">忘記電子郵件地址？</a></div>
                        <div>如果這不是你的電腦，請使用訪客模式登入</div>
                        <div>進一步了解如何使用訪客模式</div>
                        <div class="create-login-box">
                            <button type="submit" class="createbox">建立帳戶</button>
                            <button class="loginbox">登入</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>