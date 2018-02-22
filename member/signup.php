<!DOCTYPE html>
    <html>
    <head>
      <title>두 번째 페이지</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="/web_project2/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
      <header class="jumbotron text-center">
          <h1>회원가입</h1>
      </header>

      <hr />

      <article>
        <form name="signup-form" action="./signup_check.php" method="post">

          <div class="form-group">
            <label for="form-id">아이디</label>
            <input type="text" class="form-control" name = "user_id">
          </div>
          <div class="form-group">
            <label for="form-pw">비밀번호</label>
            <input type="password" class="form-control" name = "user_pw">
          </div>
          <div class="form-group">
            <label for="form-pw2">비밀번호 확인</label>
            <input type="password" class="form-control" name = "user_pw2">
          </div>
          <div class="form-group">
            <label for="form-email">이메일</label>
            <input type="email" class="form-control" name = "user_email">
          </div>

          <div class="control">
            <input class="btn btn-success" type="submit" value="가입">
            <a class="btn btn-danger" href="javascript:history.back()">취소</a>
          </div>


        </form>
      </article>

      <hr />
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="/web_project2/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    </body>
    </html>
