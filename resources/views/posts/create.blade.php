@extends('layouts')

@section('content')

        <div class="container mt-4">
           <div class="border p-4">
               <h1 class="h5 mb-4">投稿の新規作成</h1>
               <form method="POST" action="{{route('posts.store')}}">
                   {{csrf_field()}}
                   
                   <fieldset class="mb-4">
                        <div class="form-group">
                            <label for="title">
                              タイトル
                            </label>
                            <input class="form-control" id="title" name="title" type="text">
                        </div>
                        <div>
                        　　<label for="body">
                              本文
                            </label>
                            <textarea class="form-control" id="body" name="body" rows="4">
                                
                            </textarea>
                        </div>
                        
                        <div class="mt-5">
                            <a class="btn btn-secondary" href="{{route('top')}}">
                                キャンセル
                            </a>
                       
                            <button class="btn btn-primary" type="submit">
                               投稿する
                            </button>
                        </div>
                   </fieldset>
               </form>
           </div>
        </div>

@endsection('content')