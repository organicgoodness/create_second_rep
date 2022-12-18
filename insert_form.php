CTYPE html>
<html>
<head>
<meta charset = "UTF-8" />
<title>コロナウイルスに関するアンケート</title>
</head>
<body>
<form method="POST" action="insert_process.php">
  <div>
    <label for="isbn">ISBNコード</label><br />
    <input id="isbn" type="text" name="isbn" size="25" maxlength="20" />
  </div><div>
    <label for="title">署名：</label><br />
    <input id=“title” type=“text” name=“title” size=“6” maxlength=“20” />
  </div><div>
    <label for="price">価格：</label><br />
    <input id=“price” type=“text” name=“price” size=“6” maxlength=“20” />
  </div><div>
    <label for="publish">出版社：</label><br />
    <input id="publish" type="text" name="publish" size="25" maxlength="30" />
  </div><div>
    <label for="published">刊行日</label><br />
    <input id=“published” type=“text” name=“published” size=“6” maxlength=“20” />
  </div>
</form>

