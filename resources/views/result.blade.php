@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>Search Result</h4>
            <div class="container">

                <div class="card-body">

                    <div class="card-deck">
                        @if(count($result) > 0)
                            @forelse($result as $question)
                                <div class="col-sm-4 d-flex align-items-stretch">
                                    <div class="card mb-3 ">
                                        <div class="card-header">
                                            <small class="text-muted">
                                                Updated: {{ $question->created_at->diffForHumans() }}
                                                Answers: {{ $question->answers()->count() }}

                                            </small>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">{{$question->body}}</p>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text">

                                                <a id="view" class="btn btn-primary float-right" href="{{ route('question.show', ['id' => $question->id]) }}">
                                                    View
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                There are no questions to view, you can  create a question.
                            @endforelse
                        @else
                            <p>No Data to show</p>
                        @endif
                    </div>

                </div>

            </div>
    </div>
@endsection