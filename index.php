<h1>Hash decode challenge</h1>
<form action="index.php" method="post">
  <p>
    <label for="hash">
      <input type="text" name="hash" placeholder="Hash value">
    </label>
  </p>
  <p>
    <label for="challenge">
      <input type="text" name="challenge" placeholder="Challenge value">
    </label>
  </p>
  <p>
    <label for="challenge-submit">
      <input type="submit" name="challenge-submit" value="Hash challenge!">
    </label>
  </p>
</form>

<h3>Challenge result</h3>
<div>
  <p>
    <?=
      isset($_POST['challenge'])&&isset($_POST['hash'])
      ? password_verify($_POST['challenge'], $_POST['hash'])
        ? 'Yes!It matches the hash value!<br>Hash is '. $_POST['challenge']
        : 'It didn\'t match the hash value.'
      : 'No data'
    ?>
  </p>
</div>

<h1>Hash encode</h1>
<form action="index.php" method="post">
  <p>
    <label for="Ms.encode-chan">
      <input type="text" name="Ms.encode-chan" placeholder="Encode characters">
    </label>
  </p>
  <p>
    <label for="Mr.encode">
      <input type="submit" name="Mr.encode" value="Hash encode!">
    </label>
  </p>
</form>

<h3>Hash encode result</h3>
<div>
  <?=
    $_POST['Ms_encode-chan']
    ? password_hash($_POST['Ms_encode-chan'], PASSWORD_DEFAULT)
    : 'No data'
  ?>
</div>
