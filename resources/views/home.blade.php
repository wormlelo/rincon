@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Recent Updates</div>

                 <div class="card-body">

                    <form action="" method="post">
                        <textarea name="body" rows="4" class="form-control" placeholder="What's on your mind"></textarea>
                     <br />   <button type="submit" class="btn btn-primary">Post!</button>    
                    </form>  

                </div>
                <hr>
                <div class="card-body">
                    @foreach($messages as $message)  
                    <h5><a href="/u/{{ $message->user->id }}">{{ $message->user->name }}</a></h5>
                    {{$message->body}}
                    <br>
                <!--    <small>{{ $message->created_at->format('d/m/Y') }}</small> -->
                    <small>{{ $message->created_at->diffForHumans() }}</small>
                    <hr>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
