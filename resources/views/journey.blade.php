<!-- Stored in resources/views/journey.blade.php -->

@extends('layouts.app')

@section('title', "Journey from $source->name to $target->name")
@section('content')
    <div class="container-fluid viewport journey">
        <div class="row h-100">
            <div class="col-lg-3 bg-emerald pt-3 pb-3">
                @include('partials.journey.search-form')
            </div>
            <div class="col-lg-4 p-3">
                @foreach ($routes as $edge)
                    @if ($edge->agg_cost==0)
                        <div class="clearfix route-result d-flex">
                            <a href="#route-{{$edge->path_id}}" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="route-{{$edge->path_id}}">>
                                <span class="node pull-left mr-3">
                                    {{$source->name}}
                                </span>
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                --&gt;<span class="node pull-left mr-3">
                                    {{$target->name}}
                                </span>
                    @endif
                    @if ($edge->edge===-1)
                        </a>
                        <div class="pull-right">{{$edge->agg_cost}}</div></div>
                    @endif
                @endforeach
            </div>
            <div class="col-5">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @foreach ($routes as $edge)
                        @if ($edge->agg_cost==0)
                            <div class="card">
                                <div class="card-header" role="tab" id="heading-{{$edge->path_id}}">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#route-{{$edge->path_id}}" aria-expanded="false" aria-controls="route-{{$edge->path_id}}">
                                            route 1 name
                                        </a>
                                    </h5>
                                </div>

                                <div id="route-{{$edge->path_id}}" class="collapse" role="tabpanel" aria-labelledby="heading-{{$edge->path_id}}">
                                    <div class="card-block">
                        @endif
                                        <div>
                                            From {{$edge->source_name}}, drive on  {{$edge->route_name}} ({{$edge->cost}} Km)
                                        </div>

                        @if ($edge->edge===-1)
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection