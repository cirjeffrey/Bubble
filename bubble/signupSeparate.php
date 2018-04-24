<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            font-size:16px;
        }
        table {
            width:900px;
            border:1px solid white;
        }
        #colo {
            color:red;
        }
        #leftsize th{
            font-size:12px;
            float:left;

        }
        #leftsize td{
            font-size:12px;
            float:left;

        }
        #header .title{
            height:50px;
            width:900px;
            border:1px solid white;
            font-size:20px;
            text-align:center;

            line-height:50px;
        }
    </style>
    <meta charset="utf-8">
    <title>Sign Up page</title>
    <!--<meta name="generator" content="1" />
    <meta name="keywords" content="2" />
    <meta name="description" content="3" />
    <link rel="stylesheet" type="text/css" href="zc.css" />-->
</head>
<body>
<center><div id="header">
    <div class="title">
        Sign up
    </div></div><center>
    <div id="leftsize">
        <table align="center">
            <form action = "includes/signup.inc.php" method = "POST">
                <tr>
                    <th>Name</th>
                    <td class="te"><input type="text" name = "name">*</td>
                </tr>
                <tr>
                    <th>Password：</th>
                    <td><input type="password" name = "password">*</td>
                </tr>
                <tr>
                    <th>Confirm Password：</th>
                    <td><input type="password">*</td>
                </tr>
                <tr>
                    <th>User's Email：</th>
                    <td><input type="text" value="" name = "email">*</td>
                </tr>
                <tr>
                    <th>Security Question：</th>
                    <td><select>
                        <option checked>None</option>
                        <option>Who's your best friend?</option>
                        <option>What your mother's name?</option>
                        <option>What's kind of food do you like?</option>
                    </select>
                        (When you forgot the password)
                    </td>
                </tr>
                <tr>
                    <th>Answer：</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>Gender： </th>
                    <td>
                        <input type="radio" checked name="xingbie" value="boy">M
                        <input type="radio" name="xingbie" value="girl">F
                        <input type="radio" name="xingbie" value="baomi">Secret
                    </td>
                </tr>
                <tr>
                    <th>Terms&Privacy：</th>
                    <td><textarea name="xieyi" cols="40" rows="10">1. xxxxxxxxxxxxxxxxxxxxxx. 2. xxxxxxxxxxxxxxxxxxxxx. 3. xxxxxxxxxxxxxxxxxxxxxxxxx</textarea></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked>Agree</td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name = "submit"> Sign up </button>
                        <input type="reset" value="Reset">
                </tr>
            </form>

        </table>

    </div>
</body>
</html>