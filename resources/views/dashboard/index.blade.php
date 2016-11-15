@extends('layout.header')
@include('resources.highcharts')
{!!Html::style('calender/monthly.css')!!}
@section('content')
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-8">
        <div id="container" style="min-width: 310px; height: 400px;">

        </div>
      </div>
      <div class=" col-lg-4">
        <div class="col-lg-12 background-color-green font-color-white">
          <div class="row">
            <div class="col-lg-12 ">
              <div class="row">
                <div class="col-lg-12">
                    <h3 id="clock"></h3>
                    <div class="col-lg-12">
                      <div class="col-lg-4">
                          <h6 id="day"></h6>
                      </div>
                      <div class="col-lg-6">
                        <h6 id="month"></h6>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            <div class="col-lg-12 bg-color-emerald padding-top-1">
              <div id="attendence" class="row active-inactive-students">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('dashboard.barchart-academic')
  @include('dashboard.piechart-attendence')
  <div class="col-lg-12">
    <div class="col-lg-8">
      @include('dashboard.attendence')
    </div>
    <div class="col-lg-3">
      <h4>Tasks and Events</h4>
          @include('dashboard.todo-list')
    </div>
  </div>
  @stop
