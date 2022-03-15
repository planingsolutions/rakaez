<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view("front.home");
// });

Route::get('', 'Adminn\Logicall@headerhome');

Route::get("/adminpanal", function(){
    return view("admin.adminpanalpage");
});

Route::prefix('message')-> group(function () {

    Route::get('contact-us', 'Adminn\Logicall@contactinfo')->name('message.contact-us') ;


});

Route::get('/socialmediaShow','Adminn\Logicall@socialmediaShow');

Route::prefix('R-dev')->group(function () {
      Route::get('show', 'Adminn\Logicall@headerShow')->name('adminpanal.show');
      Route::get('editheader/{id}', 'Adminn\Logicall@headerEdit')->name('adminpanal.editheader');
      Route::post('update/{id}', 'Adminn\Logicall@headerUpdate')-> name('adminpanal.updateheader') ;


      Route::get('aboutshow', 'Adminn\Logicall@aboutshow')->name('adminpanal.aboutshow');
      Route::get('aboutEdit/{id}', 'Adminn\Logicall@aboutEdit')->name('admainpanal.aboutusEdit1');
      Route::post('aboutUpdate/{id}', 'Adminn\Logicall@aboutUpdate')->name('admainpanal.aboutUpdate1');

      Route::get('aboutshow2', 'Adminn\Logicall@aboutshow2')->name('adminpanal.aboutshow2');
      Route::get('aboutEdit2/{id}', 'Adminn\Logicall@aboutEdit2')->name('admainpanal.aboutusEdit2');
      Route::post('aboutUpdate2/{id}', 'Adminn\Logicall@aboutUpdate2')->name('admainpanal.aboutUpdate2');

      Route::get('serviveshow1', 'Adminn\Logicall@serviveshow1')->name('adminpanal.serviveshow1');
      Route::get('serviceEdit/{id}', 'Adminn\Logicall@serviceEdit')->name('admainpanal.serviceEdit');
      Route::post('serviceupdate/{id}', 'Adminn\Logicall@serviceupdate')->name('admainpanal.serviceupdate');
  

      Route::get('login', 'Adminn\Logicall@getLogin') ;
      Route::post('login', 'Adminn\Logicall@postLogin') -> name('adminpanal.login');
      Route::get('logout', 'Adminn\Logicall@Logout') -> name('adminpanal.logout') ;

    Route::get('contactinfo', 'Adminn\Logicall@getcontactinfo') -> name('adminpanal.contactinfo') ;
    Route::get('delete/{email}', 'Adminn\Logicall@deleterecord') -> name('adminpanal.delete') ;

    Route::get('socialmediarEdit/{id}','Adminn\Logicall@socialmediarEdit')->name('adminpanal.socialmediarEdit');
    Route::post('socialmediaUpdate/{id}' ,'Adminn\Logicall@socialmediaUpdate')->name('adminpanal.socialmediaUpdate');

    Route::get('Projects', 'Adminn\Logicall@projectsshow')->name('adminpanal.projectsshow');
    Route::get('ProjectEdit/{id}','Adminn\Logicall@projectEdit')->name('adminpanal.projectEdit');
    Route::post('ProjectUpdate/{id}' ,'Adminn\Logicall@projectUpdate')->name('adminpanal.projectUpdate');

    Route::get('categoriesshow', 'Adminn\Logicall@categoriesshow')->name('adminpanal.categoriesshow');
    Route::get('categoriesEdit/{id}','Adminn\Logicall@categoriesEdit')->name('adminpanal.categoriesEdit');
    Route::post('categoriesUpdate/{id}' ,'Adminn\Logicall@categoriesUpdate')->name('adminpanal.categoriesUpdate');

    Route::get('projectoneshow', 'Adminn\Logicall@projectoneshow')->name('adminpanal.projectoneshow');
    Route::get('projectoneEdit/{id}','Adminn\Logicall@projectoneEdit')->name('adminpanal.projectoneEdit');
    Route::post('projectonUpdate/{id}' ,'Adminn\Logicall@projectonUpdate')->name('adminpanal.projectoneUpdate');


    Route::get('projecttwoshow', 'Adminn\Logicall@projecttwoshow')->name('adminpanal.projecttwoshow');
    Route::get('projecttwoEdit/{id}','Adminn\Logicall@projecttwoEdit')->name('adminpanal.projecttwoEdit');
    Route::post('projecttwoUpdate/{id}' ,'Adminn\Logicall@projecttwoUpdate')->name('adminpanal.projecttwoUpdate');

    Route::get('projecthreeshow', 'Adminn\Logicall@projecthreeshow')->name('adminpanal.projecthreeshow');
    Route::get('projecthreeEdit/{id}','Adminn\Logicall@projecthreeEdit')->name('adminpanal.projecthreeEdit');
    Route::post('projecthreeUpdate/{id}' ,'Adminn\Logicall@projecthreeUpdate')->name('adminpanal.projecthreeUpdate');


    Route::get('projectfourshow', 'Adminn\Logicall@projectfourshow')->name('adminpanal.projectfourshow');
    Route::get('projectfourEdit/{id}','Adminn\Logicall@projectfourEdit')->name('adminpanal.projectfourEdit');
    Route::post('projectfourUpdate/{id}' ,'Adminn\Logicall@projectfourUpdate')->name('adminpanal.projectfourUpdate');



    Route::get('projectfiveshow', 'Adminn\Logicall@projectfiveshow')->name('adminpanal.projectfiveshow');
    Route::get('projectfiveEdit/{id}','Adminn\Logicall@projectfiveEdit')->name('adminpanal.projectfiveEdit');
    Route::post('projectfiveUpdate/{id}' ,'Adminn\Logicall@projectfiveUpdate')->name('adminpanal.projectfiveUpdate');



    
    Route::get('chnagepasswordAdmin', 'Adminn\Logicall@changepass') -> name('changePass.admin') ;
    Route::post('changePassword', 'Adminn\Logicall@changePasswordPost')->name('changePasswordPost.admin');
















});
