<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/add" method="post">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        <input type="text" name="email">
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <button>送信する</button>
      </td>
    </tr>
  </table>
</body>
</html>