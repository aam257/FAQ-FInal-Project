@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card text-center">Questions in Database
            <div class="card-body">
                <div class="card-deck">
                    @foreach($questions as $question)
                        <div class="col-sm-4 d-flex align-items-stretch">
                            <div class="card mb-3 ">
                                <div class="card-header">
                                    <small class="text-muted">
                                        Question Number: {{ $question->id}}
                                    </small>
                                </div>

                                <div class="card-body">
                                    <p class="card-text">{{$question->body}}</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text">
                                        <a class="btn btn-primary float-right" href="{{ route('question.show', ['id' => $question->id]) }}">Answer Question </a>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div class="float-right">
                {{ $questions->links() }}
            </div>
        </div>

    </div>
@endsection