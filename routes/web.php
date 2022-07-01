<?php

use App\Http\Livewire\Blog;
use App\Http\Livewire\Agents;
use Illuminate\Http\Response;
use App\Http\Livewire\Gallery;
use App\Http\Livewire\Investors;
use App\Http\Livewire\BlogSingle;
use App\Http\Livewire\Prequalify;
use App\Http\Livewire\ViewSingle;
use App\Http\Livewire\Admin\Estate;
use App\Http\Livewire\AgentDetails;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\Contacts;
use App\Http\Livewire\Admin\EditBlog;
use App\Http\Livewire\Admin\ViewBlog;
use App\Http\Livewire\EstateListings;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\ViewSales;
use App\Http\Livewire\Admin\AdminAgent;
use App\Http\Livewire\Admin\AdminStaff;
use App\Http\Livewire\Admin\CreateBlog;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ListingComponent;
use App\Http\Livewire\Admin\CreateStaff;
use App\Http\Livewire\Admin\Subscribers;
use App\Http\Livewire\Admin\UpdateAgent;
use App\Http\Livewire\Admin\ViewListing;
use App\Http\Livewire\RealtorsComponent;
use App\Http\Livewire\Admin\AdminListing;
use App\Http\Livewire\Admin\ImageUploads;
use App\Http\Livewire\Admin\InvestorList;
use App\Http\Livewire\Admin\CreateListing;
use App\Http\Livewire\Admin\EstateListing;
use App\Http\Livewire\Admin\UpdateListing;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\SalesComponent;
use App\Http\Livewire\Admin\EstateComponent;
use App\Http\Livewire\Admin\SaleSingle;
use App\Http\Livewire\Admin\UpdateStaff;
use App\Http\Livewire\Doyouknow;
use App\Http\Livewire\Faq;

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
Route::get('/prequalify', Prequalify::class)->name('prequalify');//
Route::get('/blogSingle/{blogid}', BlogSingle::class)->name('blogSingle');//
Route::get('/blog', Blog::class)->name('blog');//Investors
Route::get('/invest', Investors::class)->name('invest');//
Route::get('/gallery', Gallery::class)->name('gallery');//
Route::get('/doyouknow', Doyouknow::class)->name('doyouknow');//
Route::get('/faq', Faq::class)->name('faq');//


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
    Route::get('/subscribers', Subscribers::class)->name('subscribers');//
    Route::get('/contacts', Contacts::class)->name('contacts');//
    Route::get('/staff', AdminStaff::class)->name('staff');//
    Route::get('/create-staff', CreateStaff::class)->name('create-staff'); //
    Route::get('/create-blog', CreateBlog::class)->name('create-blog'); //
    Route::get('/view-blog', ViewBlog::class)->name('view-blog'); //
    Route::get('/edit-blog/{blogID}', EditBlog::class)->name('edit-blog'); //
    Route::get('/sales', SalesComponent::class)->name('sales'); //
    Route::get('/viewSales', ViewSales::class)->name('viewSales'); //
    Route::get('/investors', InvestorList::class)->name('investors'); //
    Route::get('/sale-single/{code}', SaleSingle::class)->name('sale-single'); //
    Route::get('/staff-edit/{code}', UpdateStaff::class)->name('staff-edit'); //
});
