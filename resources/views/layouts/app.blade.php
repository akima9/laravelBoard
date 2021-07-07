<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>즐망의 기술블로그</title>
</head>
<body>
    <ul>
        <li><a href="/">홈</a></li>
        <li><a href="register">회원가입</a></li>
        <li><a href="login">로그인</a></li>
        <li><a href="logout">로그아웃</a></li>
        <li><a href="mypage">마이페이지</a></li>
    </ul>
    <h1>@yield('title')</h1>
    
    <div class="container">
        @section('contents')
            내용이 없습니다.
        @show
    </div>
</body>
</html>