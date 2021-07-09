@extends('layouts.app')

@section('title', '회원가입페이지')

@section('contents')
    <form action="users" method="POST">
        @csrf
        <input type="text" name="userId" onkeyup="dupeCheckUserId(this)" placeholder="아이디">
        <input type="password" name="userPw1" placeholder="비밀번호">
        <input type="password" name="userPw2" placeholder="비밀번호 재입력">
        <button type="submit">회원가입</button>
    </form>
@endsection

<script type="text/javascript">
    //아이디 중복체크
	function dupeCheckUserId(box) {
        let userId = box.value; //아이디

        xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        xhr.open("post", "users", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    console.log(xhr.responseText);
                } else {
                    alert("요청오류 : " + xhr.status);
                }
            }
        }
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{csrf_token()}}');
        xhr.send("userId=" + userId); 
    }
</script>