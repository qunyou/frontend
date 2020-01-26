@extends('frontend::layouts.default')

@section('head')
    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>
@endsection

@section('breadcrumb')
    <div class="page-breadcrumb">
        <ul>
            <li><a href="{{ url('/') }}">首頁</a></li>
            <li><a href="{{ url('profile') }}">學生資料維護</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="mb-4 pt-3">
            <h4>學生資料維護</h4>
        </div>
        <article class="article">
            <div class="article-frame">
                <form id="form1" name="form1" class="form-signin" method="post" action="">
                    @csrf
                    @method('PUT')
                    <label for="inputAccount">帳號</label>
                    <input type="text" id="inputAccount" name="school_student_id" class="form-control" placeholder="請填入：學生[身分證]，字母為大寫。ex：A123456789" value="{{ $student_detail->school_student_id }}" required="" autofocus="">
                    <small id="accountHelpBlock" class="form-text text-muted">
                        請填入：學生[身分證]，字母為大寫。ex：A123456789
                    </small>
                    <label for="inputPassword" class="mt-3">密碼</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="請填入：自定密碼">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                        請填入：自定密碼
                    </small>
                    <label for="student_name" class="mt-3">姓名</label>
                    <input type="text" id="student_name" name="student_name" class="form-control" placeholder="姓名" value="{{ $student_detail->student_name }}">
                    <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">送出</button>
                </form>
            </div>
        </article>
    </div>
@endsection