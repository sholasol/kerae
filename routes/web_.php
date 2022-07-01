<?php

use App\Http\Livewire\Agents;
use App\Http\Livewire\Prequalify;
use App\Http\Livewire\ViewSingle;
use App\Http\Livewire\Admin\Estate;
use App\Http\Livewire\AgentDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\Contacts;
use App\Http\Livewire\EstateListings;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminAgent;
use App\Http\Livewire\Admin\AdminStaff;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ListingComponent;
use App\Http\Livewire\Admin\CreateStaff;
use App\Http\Livewire\Admin\Subscribers;
use App\Http\Livewire\Admin\UpdateAgent;
use App\Http\Livewire\Admin\ViewListing;
use App\Http\Livewire\RealtorsComponent;
use App\Http\Livewire\Admin\AdminListing;
use App\Http\Livewire\Admin\ImageUploads;
use App\Http\Livewire\Admin\CreateListing;
use App\Http\Livewire\Admin\EstateListing;
use App\Http\Livewire\Admin\UpdateListing;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\EstateComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('front');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/home-listing', ListingComponent::class)->name('home-listing');
Route::get('/contact', ContactComponent::class)->name('contact'); //
Route::get('/realtor', RealtorsComponent::class)->name('realtor');
Route::get('/propertySingle/{list}', ViewSingle::class)->name('propertySingle');
Route::get('/our-realtors', Agents::class)->name('our-realtors');
Route::get('/realtorDetails/{user}', AgentDetails::class)->name('realtorDetails'); //
Route::get('/estates/{code}', EstateListings::class)->name('estates'); //



// FOR ADMIN



Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/agents', AdminAgent::class)->name('agents');
    Route::get('/listing', AdminListing::class)->name('listing');
    Route::get('/estate', EstateComponent::class)->name('estate');
    Route::get('/viewListing', ViewListing::class)->name('viewListing');
    Route::get('/updateListing/{list}',UpdateListing::class)->name('updateListing');
    Route::get('/updateAgent/{agent}',UpdateAgent::class)->name('updateAgent');
    Route::get('/create', CreateListing::class)->name('create');//ImageUploads
    Route::get('/upload', ImageUploads::class)->name('upload');//EstateListing
    Route::get('/estate-listing', EstateListing::class)->name('estate-listing');//
    Route::get('/prequalify', Prequalify::class)->name('prequalify');//
    Route::get('/subscribers', Subscribers::class)->name('subscribers');//
    Route::get('/contacts', Contacts::class)->name('contacts');//
    Route::get('/staff', AdminStaff::class)->name('staff');//
    Route::get('/create-staff', CreateStaff::class)->name('create-staff'); //

});
