@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-10">
            <div class="card">
                    <div class="card-body row pt-30">
                        @csrf
                        <div class="col-md-3 offset-md-1">
                          <img src="{{ asset('/storage/img/'.$user->file_name) }}" class="card-img rounded-circle" alt="">
                          <p class="card-text text-center">{{ $user->name }}</p>
                        </div>
                        <div class="col-md-7 mt-5">
                          <dl class="row justify-content-around text-left">
                            <dt class="p-0 col-1">名前：</dt>
                            <dd class="col-5"><h5 class="card-title">{{ $user->name }}</h5></dd>
                          </dl>
                          <dl class="row justify-content-around text-left">
                            <dt class="p-0 col-3">メールアドレス：</dt>
                            <dd class="col-6"><p class="card-text">{{ $user->email }}</p></dd>
                          </dl>
                        </div>     
                    </div>
                          <div class="text-center">
                            <a class="btn btn-primary btn-sm mb-1" href="/edit/{{$user->id}}">プロフィールの編集</a>
                          </div>
                          <div class="text-center">
                              <div class="linkToLogout">
                                  <a href="{{ route('logout') }}">ログアウト</a>
                              </div>
                          </div>
            </div>
        </div>
    </div>
</div>
@endsection


