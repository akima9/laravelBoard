@extends('layouts.app')

@section('title', '회원가입페이지')

@section('contents')
    <form action="users" method="POST">
        @csrf
        <input type="text" name="userId" placeholder="아이디">
        <input type="password" name="userPw1" placeholder="비밀번호">
        <input type="password" name="userPw2" placeholder="비밀번호 재입력">
        <button type="submit">회원가입</button>
    </form>
@endsection