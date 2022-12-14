<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\studentController;
use App\Models\User;
use App\Models\Library;
use App\Models\totalMembers;
use App\Models\bookIssue;
use App\Models\IssuedHistory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        return view('/Auth/login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

//////////////////////////////////
//Super Admin Route
//Documentation
Route::get('/documentation/Setup' , [HomeController::class, 'documentationPage']) -> name('documentation');
Route::get('/documentation/getAuthor' , [HomeController::class, 'getAuthor']) -> name('getAuthor');
Route::get('/documentation/AuthorById' , [HomeController::class , 'AuthorById']) -> name('AuthorById');
Route::get('/documentation/filterAuthor' , [HomeController::class , 'filterAuthor']) -> name('filterAuthor');
Route::get('/documentation/addAuthor' , [HomeController::class, 'addAuthor']) -> name('addAuthor');
Route::get('/documentation/updateAuthor', [HomeController::class , 'updateAuthor'])->name('updateAuthor');
Route::get('/documentation/deleteAuthor' , [HomeController::class , 'deleteAuthorApi'])->name('deleteAuthorApi');
Route::get('/documentation/getBook' , [HomeController::class , 'getBook']) -> name('getBook');
Route::get('/documentation/getBookById' , [HomeController::class , 'getBookById']) -> name('getBookById');
Route::get('/documentation/bookFilter' , [HomeController::class , 'bookFilter']) -> name('bookFilter');
Route::get('/documentation/addBookApi' , [HomeController::class , 'addBookApi']) -> name('addBookApi');
Route::get('/documentation/updateBookApi' , [HomeController::class , 'updateBookApi']) -> name('updateBookApi');
Route::get('/documentation/deleteBookApi' , [HomeController::class , 'deleteBookApi']) -> name('deleteBookApi');

//Profile Page
Route::get('/profile/{id}' , [HomeController::class , "profilePage"]) -> name('Profile Page');
Route::post('/updateInfo/{id}' , [HomeController::class, "updateInfo"]) -> name('update personal info');
Route::post('/change-password', [ChangePasswordController::class, 'store']) -> name('change-password');
Route::get('/registerBook' , [HomeController::class , 'registerBook']) -> name('registerbook');
//Book Management 
Route::get('/totalBook' , [HomeController::class , "totalBook"]) -> name("totalBook");
Route::get('/updateBookView/{id}',[HomeController::class,'updateBookView']);
Route::post('/delete/{id}' , [HomeController::class , 'delete']);
Route::post('/upload',[HomeController::class,'upload']);
Route::post('/updateBook/{id}',[HomeController::class,'updateBook']);
//Membership
Route::post('/registerNewMember' , [HomeController::class , 'registerNewMember']) -> name('registerNewMember');
Route::get('/registerMember' , [HomeController::class , "registerMember"]) -> name("registerMember");
Route::get('/totalMember' , [HomeController::class , "totalMember"]) -> name("totalMember");
Route::post('/deleteMembers/{id}' , [HomeController::class , 'deleteMembers']);
Route::post('/updateMembersPage/{id}' , [HomeController::class , 'updateMembersPage']);
Route::post('/updateMember/{id}',[HomeController::class,'updateMembership']);
Route::post('/revokeMember/{id}' , [HomeController::class , 'revokeMember']) -> name('revokeMember');
Route::post('/searchByUUID' , [HomeController::class , 'searchByUUID']) -> name('searchByUUID');
//Issue
Route::post('/registerNewIssue' , [HomeController::class, 'registerNewIssue']) -> name('registerNewIssue');
Route::get('/Issue' , [HomeController::class , "Issue"]) -> name("Issue");
Route::get('/issues' , [HomeController::class , "registerissues"]) -> name("registerissues");
Route::post('/issueReturned/{id}' , [HomeController::class , 'issueReturned']) -> name('issueReturned');
//Lost Book
Route::get('/LostBook' , [HomeController::class , 'LostBook']) -> name('LostBook');
Route::post('/Lost/{id}' , [HomeController::class , 'declareLost']);
Route::get('/issueHistory' , [HomeController::class , 'issueHistory'])->name('/issueHistory');
//Author
Route::get('/registerAuthor' , [HomeController::class , 'registerAuthorSuperAdmin']) -> name('registerAuthorSuperAdmin');
Route::post('/registerAuthorNew' , [HomeController::class , 'registerAuthorNew']) -> name('registerAuthorNew');
Route::get('/authorList' , [HomeController::class , 'authorList']) -> name('authorList');
Route::post('/deleteAuthor/{id}' , [HomeController::class , 'deleteAuthor']) -> name('deleteAuthor');
Route::get('/authorUpdate/{id}' , [HomeController::class , 'authorUpdate']) -> name('authorUpdate');
Route::post('/AuthorUpdateDetails/{id}' , [HomeController::class , 'AuthorUpdateDetails']) -> name('AuthorUpdateDetails');
Route::get('ViewBook/{id}' , [HomeController::class , 'ViewBook']) ->name('ViewBook');

//User Management
Route::post('/recoverBook/{id}' , [HomeController::class , 'recoverBook'])-> name('recoverBook');
Route::get('/userManagement' , [HomeController::class , 'userManagement']) -> name('userManagement');
Route::post('/revokeAuth/{id}' , [HomeController::class , 'revokeAuth']) -> name('revokeAuth');
Route::post('/promote/{id}' , [HomeController::class , 'promote']) -> name('promote');
Route::post('/promoteMember/{id}' , [HomeController::class , 'promoteMember']) -> name('promoteMember');

//////////////////////////////////
//Student Route
Route::get('/User/Profile' , [studentController::class , 'userProfile']) -> name('userProfile');
Route::get('/User/BookIssued/{id}' , [studentController::class , "userBookIssued"]) -> name('userBookIssued');
Route::get('/User/History/{id}' , [studentController::class , "userHistory"]) -> name('userHistory');
Route::post('/User/updateInfoStudent/{id}' , [studentController::class , "updateInfoStudent"]) -> name('updateInfoStudent');

//////////////////////////////////
//Student Admin Route
//Membership List
Route::get('/student/StudentMember' , [AdminStudentController::class , 'StudMember']) -> name("StudentMember");
Route::post('/student/StudentUpdateView/{id}',[AdminStudentController::class,'StudentUpdateView']);
Route::post('/student/StudentUpdate/{id}',[AdminStudentController::class,'StudentUpdateMembership']);
Route::post('/student/StudentrevokeMember/{id}' , [AdminStudentController::class , 'StudentrevokeMember']) -> name('StudentrevokeMember');
Route::post('/student/StudentDelete/{id}' , [AdminStudentController::class , 'StudentDelete']);
Route::get('/student/StudentSearch' , [AdminStudentController::class , 'StudentSearch']);

//Register Issue, Issued List, Lost Book
Route::get('/student/StudentRegIssue' , [AdminStudentController::class , "StudentRegIssue"]) -> name("StudRegIssue");
Route::post('/student/UploadNewIssue' , [AdminStudentController::class, 'UploadNewIssue']) -> name('UploadNewIssue');
Route::get('/student/StudentIssueList' , [AdminStudentController::class , "StudentIssueList"]) -> name("StudentIssueList");
Route::get('/student/StudentLost' , [AdminStudentController::class , 'StudentLostBook']) -> name("StudentLostBook");
Route::post('/student/StudentRecoverBook/{id}' , [AdminStudentController::class , 'StudentRecoverBook'])-> name('StudentRecoverBook');
Route::post('/student/StudentIssueReturned/{id}' , [AdminStudentController::class , 'StudentIssueReturned']) -> name('StudentIssueReturned');
Route::post('/student/StudentDeclareLost/{id}' , [AdminStudentController::class , 'StudentDeclareLost']);
Route::get('/student/StudentIssuedHistory' , [AdminStudentController::class , 'StudentIssuedHistory'])->name('StudentIssuedHistory');

//Book Admin
Route::post('/Book/uploadBook',[AuthorController::class,'uploadBook']) -> name("uploadBook");
Route::get('/Book/BookTotal' , [AuthorController::class , "BookTotal"]) -> name("BookTotal");
Route::get('/Book/BookRegister' , [AuthorController::class , 'BookRegister']) -> name('BookRegister');
Route::get('/Book/BookUpdateView/{id}',[AuthorController::class,'BookUpdateView']);
Route::post('/Book/BookUpdate/{id}',[AuthorController::class,'BookUpdate']);
Route::get('/Book/registerAuthor' , [AuthorController::class , 'registerAuthor']) -> name('registerAuthor');
Route::post('/Book/registerNewAuthor' , [AuthorController::class , 'registerNewAuthor']) -> name('registerNewAuthor');
Route::get('/Book/AuthorList' , [AuthorController::class , 'AuthorList']) -> name('AuthorList');
Route::post('/Book/deleteBook/{id}' , [AuthorController::class , 'deleteBook']);
Route::post('/Book/deleteAuthor/{id}' , [AuthorController::class , 'deleteAuthor']);
Route::get('/Book/AuthorUpdateView/{id}',[AuthorController::class,'AuthorUpdateView']) -> name('AuthorUpdateView');
Route::post('/Book/AuthorUpdate/{id}',[AuthorController::class,'AuthorUpdate']) -> name('AuthorUpdate');
Route::get('/Book/BookProfile/{id}' , [AuthorController::class , "BookProfile"]) -> name('BookProfile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class , 'redirectInit'])->name('dashboard');
});


