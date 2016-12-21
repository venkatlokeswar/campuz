@extends('layout.header')
@include('resources.highcharts')
@include('resources.angular')
@section('content')
<div ng-app="academics" class="col-lg-12">
    <div class="col-lg-4">
      <div class="col-lg-12 option-list">
          <ul class="nav">
            <li class="active"><a href="#exam-timetables">Exam Timetables</a></li>
            <li><a href="#syllabus">Syllabus Coverage</a></li>
            <li><a href="#topstudents">Top Students</a></li>
            <li><a href="#activities">Activities Timetables</a></li>
            <li><a href="#searchstudent">Search Student</a></li>
            <li><a href="#searchemployee">Search Employee</a></li>
            <li><a href="#complaint">Complaints</a></li>
            <li><a href="#branchoverview">Branch overview</a></li>
            <li><a href="#circulars">Circulars</a></li>
          </ul>
      </div>
    </div>
    <div class="col-lg-8 ng-view">
      
    </div>
</div>
@stop
