<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

// Define authentication routes using Auth::routes()
Auth::routes();

// Routes that require authentication
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/fire-detection-alarm', [App\Http\Controllers\HomeController::class, 'firedetectionalarm'])->name('firedetectionalarm');
Route::get('/fire-protection-system', [App\Http\Controllers\HomeController::class, 'fireprotectionsystem'])->name('fireprotectionsystem');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\HomeController::class, 'storeContact'])->name('contact.store');
Route::get('/terms-condition', [App\Http\Controllers\HomeController::class, 'termscondition'])->name('termscondition');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacypolicy'])->name('privacypolicy');

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
Route::any('admin/header', [App\Http\Controllers\AdminController::class, 'header'])->name('header');
Route::any('admin/slider', [App\Http\Controllers\AdminController::class, 'slider'])->name('slider');
Route::any('admin/footer', [App\Http\Controllers\AdminController::class, 'footer'])->name('footer');

Route::any('admin/banners', [App\Http\Controllers\AdminController::class, 'banners'])->name('banners');
Route::any('admin/addnewbanner', [App\Http\Controllers\AdminController::class, 'addnewbanner'])->name('addnewbanner');
Route::any('admin/editbanner/{id}', [App\Http\Controllers\AdminController::class, 'editbanner'])->name('editbanner');
Route::any('admin/removebanner/{id}', [App\Http\Controllers\AdminController::class, 'removebanner'])->name('removebanner');

Route::any('admin/brands', [App\Http\Controllers\AdminController::class, 'brands'])->name('brands');
Route::any('admin/addnewbrandlogo', [App\Http\Controllers\AdminController::class, 'addnewbrandlogo'])->name('addnewbrandlogo');
Route::any('admin/editBrandLogo/{id}', [App\Http\Controllers\AdminController::class, 'editBrandLogo'])->name('editBrandLogo');
Route::get('admin/removeBrandLogo/{id}', [App\Http\Controllers\AdminController::class, 'removeBrandLogo'])->name('removeBrandLogo');

Route::any('admin/services', [App\Http\Controllers\AdminController::class, 'services'])->name('services');
Route::any('admin/addservice', [App\Http\Controllers\AdminController::class, 'addservice'])->name('addservice');
Route::any('admin/editservice/{id}', [App\Http\Controllers\AdminController::class, 'editservice'])->name('editservice');
Route::any('admin/removeservice/{id}', [App\Http\Controllers\AdminController::class, 'removeservice'])->name('removeservice');
Route::any('admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('categories');
Route::any('admin/addcategory', [App\Http\Controllers\AdminController::class, 'addcategory'])->name('addcategory');
Route::any('admin/editcategory/{id}', [App\Http\Controllers\AdminController::class, 'editcategory'])->name('editcategory');
Route::any('admin/removecategory/{id}', [App\Http\Controllers\AdminController::class, 'removecategory'])->name('removecategory');

Route::any('admin/products', [App\Http\Controllers\AdminController::class, 'products'])->name('products');
Route::any('admin/addproduct', [App\Http\Controllers\AdminController::class, 'addproduct'])->name('addproduct');
Route::any('admin/editproduct/{id}', [App\Http\Controllers\AdminController::class, 'editproduct'])->name('editproduct');
Route::any('admin/removeproduct/{id}', [App\Http\Controllers\AdminController::class, 'removeproduct'])->name('removeproduct');
Route::any('admin/productcategories', [App\Http\Controllers\AdminController::class, 'productcategories'])->name('productcategories');
Route::any('admin/addproductcategory', [App\Http\Controllers\AdminController::class, 'addproductcategory'])->name('addproductcategory');
Route::any('admin/editproductcategory/{id}', [App\Http\Controllers\AdminController::class, 'editproductcategory'])->name('editproductcategory');
Route::any('admin/removeproductcategory/{id}', [App\Http\Controllers\AdminController::class, 'removeproductcategory'])->name('removeproductcategory');

Route::any('admin/producttypes', [App\Http\Controllers\AdminController::class, 'producttypes'])->name('producttypes');
Route::any('admin/addproducttype', [App\Http\Controllers\AdminController::class, 'addproducttype'])->name('addproducttype');
Route::any('admin/editproducttype/{id}', [App\Http\Controllers\AdminController::class, 'editproducttype'])->name('editproducttype');
Route::any('admin/removeproducttype/{id}', [App\Http\Controllers\AdminController::class, 'removeproducttype'])->name('removeproducttype');


Route::any('admin/projects', [App\Http\Controllers\AdminController::class, 'projects'])->name('projects');
Route::any('admin/addproject', [App\Http\Controllers\AdminController::class, 'addproject'])->name('addproject');
Route::any('admin/editproject/{id}', [App\Http\Controllers\AdminController::class, 'editproject'])->name('editproject');
Route::any('admin/removeproject/{id}', [App\Http\Controllers\AdminController::class, 'removeproject'])->name('removeproject');
Route::any('admin/projectcategories', [App\Http\Controllers\AdminController::class, 'projectcategories'])->name('projectcategories');
Route::any('admin/addprojectcategory', [App\Http\Controllers\AdminController::class, 'addprojectcategory'])->name('addprojectcategory');
Route::any('admin/editprojectcategory/{id}', [App\Http\Controllers\AdminController::class, 'editprojectcategory'])->name('editprojectcategory');
Route::any('admin/removeprojectcategory/{id}', [App\Http\Controllers\AdminController::class, 'removeprojectcategory'])->name('removeprojectcategory');

Route::get('/medianews', [App\Http\Controllers\HomeController::class, 'medianews'])->name('medianews');
Route::get('/news/{id}', [App\Http\Controllers\HomeController::class, 'newsshow'])->name('news.newsshow');

Route::get('/categories', [App\Http\Controllers\HomeController::class, 'catindex'])->name('categories.catindex');
Route::get('/categories/{slug}', [App\Http\Controllers\HomeController::class, 'show'])->name('categories.show');
Route::get('service/{slug}', [App\Http\Controllers\HomeController::class, 'details'])->name('service.details');

Route::get('/projectcategories', [App\Http\Controllers\HomeController::class, 'pcatindex'])->name('projectcategories.catindex');
Route::get('/projectcategories/{slug}', [App\Http\Controllers\HomeController::class, 'pshow'])->name('projectcategories.pshow');
Route::get('project/{slug}', [App\Http\Controllers\HomeController::class, 'pdetails'])->name('project.pdetails');


Route::any('admin/menu', [App\Http\Controllers\AdminController::class, 'showMenu'])->name('showMenu');
// Route::any('admin/aboutcontent', [App\Http\Controllers\AdminController::class, 'aboutcontent'])->name('aboutcontent');
Route::any('admin/contacts', [App\Http\Controllers\AdminController::class, 'contacts'])->name('contacts');
Route::get('admin/contacts/remove/{id}', [App\Http\Controllers\AdminController::class, 'removeContact'])->name('admin.contact.remove');
Route::any('admin/addmail', [App\Http\Controllers\AdminController::class, 'addmail'])->name('addmail');

Route::any('admin/aboutcontent', [App\Http\Controllers\AdminController::class, 'aboutcontent'])->name('aboutcontent');
Route::any('admin/aboutpage', [App\Http\Controllers\AdminController::class, 'aboutpage'])->name('aboutpage');
Route::post('admin/saveAboutPage', [App\Http\Controllers\AdminController::class, 'saveAboutPage'])->name('saveAboutPage');
Route::post('admin/saveAboutContent', [App\Http\Controllers\AdminController::class, 'saveAboutContent'])->name('saveAboutContent');
Route::any('admin/servicecontent', [App\Http\Controllers\AdminController::class, 'serviceContent'])->name('serviceContent');
Route::post('admin/saveServiceContent', [App\Http\Controllers\AdminController::class, 'saveServiceContent'])->name('saveServiceContent');

Route::any('admin/teams', [App\Http\Controllers\AdminController::class, 'teams'])->name('teams');
Route::any('admin/addnewteam', [App\Http\Controllers\AdminController::class, 'addnewteam'])->name('addnewteam');
Route::any('admin/editteam/{id}', [App\Http\Controllers\AdminController::class, 'editteam'])->name('editteam');
Route::any('admin/removeteam/{id}', [App\Http\Controllers\AdminController::class, 'removeteam'])->name('removeteam');

Route::any('admin/newses', [App\Http\Controllers\AdminController::class, 'newses'])->name('newses');
Route::any('admin/addnewnews', [App\Http\Controllers\AdminController::class, 'addnewnews'])->name('addnewnews');
Route::any('admin/editnews/{id}', [App\Http\Controllers\AdminController::class, 'editnews'])->name('editnews');
Route::any('admin/removenews/{id}', [App\Http\Controllers\AdminController::class, 'removenews'])->name('removenews');

Route::any('admin/videos', [App\Http\Controllers\AdminController::class, 'videos'])->name('videos');
Route::any('admin/addnewvideo', [App\Http\Controllers\AdminController::class, 'addnewvideo'])->name('addnewvideo');
Route::any('admin/editvideo/{id}', [App\Http\Controllers\AdminController::class, 'editvideo'])->name('editvideo');
Route::any('admin/removevideo/{id}', [App\Http\Controllers\AdminController::class, 'removevideo'])->name('removevideo');

Route::any('admin/notices', [App\Http\Controllers\AdminController::class, 'notices'])->name('notices');
Route::any('admin/addnewnotice', [App\Http\Controllers\AdminController::class, 'addnewnotice'])->name('addnewnotice');
Route::any('admin/editnotice/{id}', [App\Http\Controllers\AdminController::class, 'editnotice'])->name('editnotice');
Route::any('admin/removenotice/{id}', [App\Http\Controllers\AdminController::class, 'removenotice'])->name('removenotice');

Route::get('admin/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('settings');
Route::post('admin/settings', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('profile.update');

Route::get('admin/backup-database', [App\Http\Controllers\AdminController::class, 'backupDatabase'])->name('admin.backup.database');

Route::get('admin/users/{user}/delete', [UserController::class,'destroy'])->name('users.delete');
Route::resource('admin/users', UserController::class);

Route::get('/create-storage-link', function () {
    // Run the storage:link command
    Artisan::call('storage:link');

    // Display a success message
    return 'Storage link created successfully!';
});

// Logout route
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

