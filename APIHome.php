<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="System/style.css">
    <title>APISample</title>
</head>
<body style="text-align:center;">
    <h1>ユーザー情報APIサンプル</h1>
    <h2>C:\xampp\htdocs\WebAPISample</h2>
    <a  href="http://192.168.1.53/phpmyadmin/index.php?route=/sql&db=traininggameuser&table=test&sql_query=SELECT+%2A+FROM+%60test%60++%0AORDER+BY+%60test%60.%60ID%60+ASC&sql_signature=664fdf226ac4a1cfac2e8760e88135365592ec0604fa11e5eccce605fa137ffb&session_max_rows=25&is_browse_distinct=0" target="_blank" rel="noopener noreferrer">データベース確認</a>
        <h3>Get</h3>
    <form action ="System/MyAPI_Get.php" method="get">
    ID<br><input type="text" placeholder="半角数字" oninput=" value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace(/\D/g,'');" autocomplete="off" name="ID" />
       <br> <input type="submit" name="button" value="Get"/>

    </form>
    <h3>Post</h3>
    <form action ="System/MyAPI_Post.php" method="post">
    Name<br><input type ="text" autocomplete="off" name="Name" value=""maxlength="20"/><br>
    Score<br><input type="text" placeholder="半角数字" oninput=" value = value.replace(/[０-９]/g,s => String.fromCharCode(s.charCodeAt(0) - 65248)).replace(/\D/g,'');" autocomplete="off" name="score" value="" maxlength="4"/><br>
    Message<br><textarea style="font-size:16px;" name="content"  rows="4" cols="60" placeholder="30字以内でお願いします" maxlength="30"></textarea><br>
   
       <br> <input type="submit" name="button" value="Post"/>

    </form>
    
</body>    
</html>