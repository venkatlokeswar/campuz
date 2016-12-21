var academics=angular.module("academics",['ngRoute']);

academics.config(function($routeProvider){

  $routeProvider
  .when("/exam-timetables",{
    templateUrl:"angular-app/academics/timeTable/timetables.htm",
    controller :"timeTableController"
  })
  .when("/syllabus",{
    templateUrl:"syllabus.htm",
    controller :"syllabusController"
  })
  .when("/topstudents",{
    templateUrl:"topstudents.htm",
    controller :"topStudentsController"
  })
  .when("/activities",{
    templateUrl:"activities.htm",
    controller :"activitiesController"
  })
  .when("/searchstudent",{
    templateUrl:"searchstudent.htm",
    controller :"searchStudentController"
  })
  .when("/searchemployee",{
    templateUrl:"searchemployee.htm",
    controller :"searchEmployeeController"
  })
  .when("/complaint",{
    templateUrl:"complaint.htm",
    controller :"complaintController"
  })
  .when("/branchoverview",{
    templateUrl:"branchOverview.htm",
    controller :"branchOverviewController"
  })
  .when("/circulars",{
    templateUrl:"circulars.htm",
    controller :"circularsController"
  })

});
