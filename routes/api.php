<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Symfony\Component\CssSelector\Node\FunctionNode;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('all',function(){  return json_encode(Student::all());});

Route::get('/show/{id}',function ($id){
    $student = Student::find($id);
    return json_encode($student);
});

Route::post('addStudent', function (Request $request) {
    $student = new Student();

    $student->cne = $request->cne ;
    $student->firstName = $request->firstName ;
    $student->secondName = $request->secondName ;
    $student->age = $request->age ;
    $student->speciality = $request->speciality ;
    $result = $student->save();
    if($result)
    {
        return ['Result' => 'Data has been saved'];
    }
    return ['Result' => 'Operation failed'];

});
Route::post('edit/{id}',function(Request $request, $id){
        $student = Student::find($id) ;
        $student->cne = $request->cne ;
        $student->firstName = $request->firstName ;
        $student->secondName = $request->secondName ;
        $student->age = $request->age ;
        $student->speciality = $request->speciality ;
        $result = $student->save();
        if($result)
        {
            return ['Result' => 'Data has been saved'];
        }
        return ['Result' => 'Operation failed'];

});


Route::get('/testing-api', function () {
    return ['message' => 'hello'];

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
