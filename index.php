<form action="index.php" method="post">
  <p>
    <label for="hash">
      Hash value
      <input type="text" name="hash" id="hash">
    </label>
  </p>
  <p>
    <label for="challenge">
      Challenge value
      <input type="text" name="challenge" id="challenge">
    </label>
  </p>
  <p>
    <label for="challenge-submit">
      <input type="submit" name="challenge-submit" value="Hash challenge!">
    </label>
  </p>
</form>

Challenge result
<div id="result">
  <?=
    isset($_POST['challenge'])&&isset($_POST['hash'])
    ? password_verify($_POST['challenge'], $_POST['hash'])
      ? 'Yes!It matches the hash value! <br> Hash is '. $_POST['challenge']
      : 'It didn\'t match the hash value.'
    : 'No data'
  ?>
</div>

<br>
<br>
<br>
Hash encode test
<form action="index.php" method="post">
  <p>
    <label for="test">
      <input type="text" name="test" id="">
    </label>
  </p>
  <p>
    <label for="test-encode">
      <input type="submit" value="Hash encode!">
    </label>
  </p>
</form>

Hash encode result
<div id="test-result">
  <?=
    $_POST['test']
    ? password_hash($_POST['test'], PASSWORD_DEFAULT)
    : 'No data'
  ?>
</div>
