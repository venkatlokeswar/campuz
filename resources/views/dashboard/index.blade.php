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
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                      <div class="col-lg-6">
                          <h4 id="clock"></h4>
                      </div>
                      <div class="col-lg-3">
                          <span id="day"></span>
                          <span id="month"></span>
                      </div>
                      <div class="col-lg-3">
                        <h4 id="year"></h4>
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
       @include('dashboard.circular')
    </div>
    <div class="col-lg-3">
      <h4>Tasks and Events</h4>
          @include('dashboard.todo-list')
    </div>
  </div>
  @stop
