<!-- Stored in resources/views/journey.blade.php -->

@extends('layouts.app')

@section('title', "Journey from $source->name to $target->name")
@section('content')
    <div class="container-fluid viewport journey">
        <div class="row h-100">
            <div class="col-sm-5 col-md-4 col-lg-3 bg-emerald pt-3 pb-3">
                @include('partials.journey.search-form')
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9 p-3">
                <div class="row">
                    <div class="col-lg-4 pr-lg-0">
                        <ul class="list-group">
                            @foreach ($routes as $edge)
                                @if ($edge->agg_cost==0)
                                    <li class="list-group-item route-result justify-content-between">
                                        <a href="#route-{{$edge->path_id}}" data-toggle="collapse"
                                           data-parent="#accordion"
                                           aria-expanded="false" aria-controls="route-{{$edge->path_id}}">
                                    <span class="node">
                                        {{$source->name}}
                                    </span>
                                            <i class="icon ion-chevron-right" aria-hidden="true"></i>
                                            <span class="node">
                                        {{$target->name}}
                                    </span>
                                            @endif
                                            @if ($edge->edge===-1)
                                        </a>
                                        <div>{{$edge->agg_cost}} Km</div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach ($routes as $edge)
                                @if ($edge->agg_cost==0)
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-{{$edge->path_id}}">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#route-{{$edge->path_id}}" aria-expanded="false"
                                                   aria-controls="route-{{$edge->path_id}}">
                                                    Route {{$edge->path_id}}
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="route-{{$edge->path_id}}" class="collapse @if ($edge->path_id==1) show @endif " role="tabpanel" aria-labelledby="heading-{{$edge->path_id}}">
                                            <div class="card-block route-list">
                                                @endif
                                                <div class="route-item clearfix @if ($edge->edge==-1) last @endif ">
                                                    <div class="route-item-source">
                                                        <div class="circle"><i class="icon ion-location"></i></div> {{$edge->source_name}}</div>

                                                    @if ($edge->cost!=0)
                                                        <div class="route-item-name">{{$edge->route_name}}
                                                            ({{$edge->cost}}Km)
                                                        </div>
                                                    @endif
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
        </div>
    </div>
@endsection