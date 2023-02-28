<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <header class = "container">
      <div class="flex-container">
        <img src = "../images/Politech.png" class="lab_logo"></img>
        <h1>Домашняя работа: Feedback Form</h1>
      </div>
      <nav class="flex-container">
        <ul>
          <li><a href= "index.php">Index</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <form action="//httpbin.org/post" method="post" class="container">
    <legend>Форма обратной связи</legend>
    <div class="mb-3">
      <label for="name" class="form-label">Ваше имя</label>
      <input type="text" id="name" name = "name" class="form-control" placeholder="Ваше имя" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Ваш email</label>
      <input type="email" id="email" name = "email" class="form-control" placeholder="Ваш email">
    </div>
    <div class="mb-3">
      <label for="type" class="form-label">Тип обращения</label>
      <select name = "type" id="type" class="form-select">
        <option value = "Complain">Жалоба</option>
        <option value = "Suggest">Предложение</option>
        <option value = "Thank">Благодарность</option>
      </select>
    </div>
    <div class="mb-3">
      <textarea id ="message" name = "message" required></textarea>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-input" type="checkbox" value="sms" id="sms" name="reply" checked>
        <label class="form-label" for="sms">СМС</label>
      </div>
      <div class="form-check">
        <input class="form-input" type="checkbox" value="email" id="milo" name="reply">
        <label class="form-label" for="milo">Email</label>
      </div>
    </div>
    <div class="flex-container form-ending">
      <button type="submit" class="btn btn-primary">Отправить</button>
      <a href = "form-2.php">Get_headers</a>
    </div>
    </form>
    </main>
    <footer>
      <div class="container">
        <p>Петров Александр  221-321 / Серверная веб-разработка</p>
      </div>
    </footer>
  </body>
</html>