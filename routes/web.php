<?php

    Route::get('/','nejahController@home')->name('home');
    Route::get('/home/scan3d','nejahController@homeScan3d')->name('home.scan3d');
    Route::get('/home/VR','nejahController@homeVR')->name('home.VR');
    Route::get('/home/AR','nejahController@homeAR')->name('home.AR');
    Route::get('/home/CourseContent','nejahController@homeCourseContent')->name('home.CourseContent');
    Route::get('/home/SeriousGames','nejahController@homeSeriousGames')->name('home.SeriousGames');
    Route::get('/home/Broadcast','nejahController@homeBroadcast')->name('home.Broadcast');
    Route::get('/home/Web3d','nejahController@homeWeb3d')->name('home.Web3d');
    Route::get('/home/Holo','nejahController@HoloGraphics')->name('home.HoloGraphics');
    Route::get('/home/contactUs','nejahController@homeContactUs')->name('home.contactUs');
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::get('/index', 'DashboardController@index')->name('index');
    Route::get('/home', 'HomeController@index');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::post('users', 'operator\UsersController@store')->name('users.store');
    Route::get('users', 'operator\UsersController@create')->name('users.create');
    Route::get('users/index/manager', 'operator\UsersController@indexManager')->name('users.indexmanager');
    Route::get('users/index/student', 'operator\UsersController@indexStudent')->name('users.indexstudent');
    Route::get('users/index/prof', 'operator\UsersController@indexProf')->name('users.indexprof');
    Route::get('users/index/employee', 'operator\UsersController@indexEmployee')->name('users.indexemployee');
    Route::get('users/index/operator', 'operator\UsersController@indexOperator')->name('users.indexoperator');
    Route::get('users/edit/{id}','operator\UsersController@edit')->name('userEdit');
    Route::post('users/update/{id}','operator\UsersController@update')->name('userUpdate');
    Route::delete('users/deleteManager/{id}','operator\UsersController@deleteManager')->name('users.deleteManager');
    Route::delete('users/deleteStudent/{id}','operator\UsersController@deleteStudent')->name('users.deleteStudent');
    Route::delete('users/deleteProf/{id}','operator\UsersController@deleteProf')->name('users.deleteProf');
    Route::delete('users/deleteEmployee/{id}','operator\UsersController@deleteEmployee')->name('users.deleteEmployee');
    Route::delete('users/deleteOperator/{id}','operator\UsersController@deleteOperator')->name('users.deleteOperator');

    Route::post('assignedcourses/store','operator\AssignedcoursesController@store')->name('assignedCourses.store');
    Route::get('assignedcourses/index','operator\AssignedcoursesController@index')->name('assignedcourses.index');
    Route::get('assignedcourses/create','operator\AssignedcoursesController@create')->name('assignedcourses.create');
    Route::delete('assignedcourses/delete/{id}','operator\AssignedcoursesController@delete')->name('assignedcourses.delete');
    Route::get('assignedcourses/edit/{id}','operator\AssignedcoursesController@edit')->name('assignedcourses.edit');
    Route::post('assignedcourses/update/{id}','operator\AssignedcoursesController@update')->name('assignedCoursesUpdate');

    Route::get('selectTerm/index','operator\SelectcoursesController@index')->name('selectTerm.index');
    Route::get('selectTerm/create/{id}','operator\SelectcoursesController@create')->name('selectTerm.create');
    Route::post('selectTerm/store','operator\SelectcoursesController@store')->name('selectTerm.store');
    Route::get('selectTerm/show/{id}','operator\SelectcoursesController@show')->name('selectTerm.show');
    Route::delete('selectTerm/delete/{id}','operator\SelectcoursesController@delete')->name('selectTerm.delete');
    Route::get('selectTerm/edit/{id}','operator\SelectcoursesController@edit')->name('selectTerm.edit');
    Route::post('selectTerm/update/{id}','operator\SelectcoursesController@update')->name('selectTerm.update');

   // Route::get('selectCourses/student/indexShow','operator\SelectcoursesController@index')->name('selectCourses.index');
  //  Route::post('selectCourses/student/show','operator\SelectcoursesController@show')->name('selectCourses.show');
   // Route::get('selectCourses/student/{id}','operator\SelectcoursesController@showById')->name('selectCourses.showById');
   // Route::delete('studentInfo/delete/{id}','operator\SelectcoursesController@delete_create')->name('studentInfo.delete');
  //  Route::get('studentInfo/edit/{id}','operator\SelectcoursesController@edit')->name('studentInfo.edit');
   // Route::post('studentInfo/update/{id}','operator\SelectcoursesController@update')->name('studentInfo.update');

    Route::get('selectCourse','operator\SelectCourseStudentController@index')->name('selectCourseIndex');
    Route::get('selectCourse/term/{id}','operator\SelectCourseStudentController@getTerm_id')->name('selectCourse.getTerm_id');
    Route::get('selectCourse/{id}','operator\SelectCourseStudentController@term_id')->name('selectCourse.term_id');
    Route::post('selectCourse/store','operator\SelectCourseStudentController@store')->name('selectCourse.store');
    Route::delete('selectCourse/delete/{id}/{id2}','operator\SelectCourseStudentController@delete')->name('selectCourse.delete');






    Route::get('listClass','operator\ListProfClassController@index')->name('listClass.index');
    Route::post('listClass/show','operator\ListProfClassController@getPost_id')->name('listClass.getPost_id');
    Route::get('listClass/show/{id}/','operator\ListProfClassController@listStudentClass')->name('listClass.Students');

    Route::get('content/create','operator\ContentController@create')->name('content.create');
    Route::post('content/store','operator\ContentController@store')->name('content.store');
    Route::get('content/show','operator\ContentController@showCourse')->name('content.showContent');
    Route::get('content/showTitle/{id}','operator\ContentController@showContent')->name('content.showContentTitle');


