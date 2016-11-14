@extends('layout.header')
@include('resources.highcharts')
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
              <h5 class="bg-color-emerald display-block display-card-top">
                <span class="glyphicon glyphicon-ok-circle">
                  <!-- <img src="/images/active.png" alt="" class="img-responsive" width="50"/> -->
                </span> Active Students<span><h6 class="pull-right font-color-white">2645</h6></span></h5>
                <span><div class="progress no-border-radius">
                  <div class="progress-bar" style="width: 90%;"><span>90%</span></div>
                </div>
              </span>
            </div>
            <div class="col-lg-12 bg-color-nephritess padding-top-1">
              <h5 class=" display-block display-card-bottom"><span class="glyphicon glyphicon-remove-circle">
              </span> Detained Students<span><h6 class="pull-right font-color-white">156</h6></span></h5>
              <span><div class="progress no-border-radius">
                <div class="progress-bar" style="width: 10%;"><span>10%</span></div>
              </div>
            </span>
            </div
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('dashboard.barchart-academic')
  <div class="col-lg-12">
    <div class="col-lg-8">
      @include('dashboard.attendence')
    </div>
    <div class="col-lg-4">
          @include('dashboard.todo-list')
    </div>
  </div>
  @stop
