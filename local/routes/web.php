<?php

use App\Models\Media;
use App\Models\Video;
use App\Http\Livewire\Allmedia;
use App\Http\Livewire\ShowFeed;
use App\Http\Livewire\Allmedias;
use App\Http\Livewire\Allvideos;
use App\Http\Livewire\DirectBox;
use App\Http\Livewire\EditMedia;
use App\Http\Livewire\Findvideo;
use App\Http\Livewire\SettingHub;
use App\Http\Livewire\Watchmedia;
use App\Http\Livewire\Createmedia;
use App\Models\Hubs as ModelsHubs;
use App\Http\Controllers\dashboard;
use App\Http\Livewire\WatchHubWall;
use App\Http\Livewire\Explorer\Hubs;
use App\Http\Livewire\Explorer\Wall;
use App\Http\Livewire\ListFollowers;
use App\Http\Livewire\WatchHubMedia;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\ManagamentHubs;
use App\Http\Livewire\ManagementUser;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pagemore\Marked;
use App\Http\Livewire\Video\EditVideo;
use App\Http\Livewire\Explorer\Profiles;
use App\Http\Livewire\Hubs\Media\Create;
use App\Http\Livewire\Hubs\Wall\Listwall;
use App\Http\Livewire\Profile\ProfileUSer;
use App\Http\Livewire\Hubs\Media\ListMedia;
use App\Http\Livewire\Setting\Profile\Edit;
use App\Http\Livewire\Hubs\Bulltien\Display;
use App\Http\Controllers\hubs\HubsController;
use App\Http\Controllers\messageUserController;
use App\Http\Livewire\Admin\Auth\LoginComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\Hub\AllHubsComponent;
use App\Http\Livewire\Admin\Hub\HubBulletinsComponent;
use App\Http\Livewire\Admin\Hub\HubMediaComponent;
use App\Http\Livewire\Admin\Hub\HubWallsComponent;
use App\Http\Livewire\Admin\Setting\WebsiteSetupComponent;
use App\Http\Livewire\Admin\User\AllUsersComponent;
use App\Http\Livewire\Admin\Wall\AllWallsComponent;
use App\Http\Livewire\Hubs\Wall\Edit as WallEdit;
use App\Http\Livewire\Hubs\Media\Edit as MediaEdit;
use App\Http\Livewire\Hubs\Wall\Create as WallCreate;
use App\Http\Livewire\Hubs\Bulltien\Create as BulltienCreate;
use App\Http\Livewire\MessageUser;

Route::get('/', function () {
    if(Auth::check()){
        $show_data = Media::latest()->take(18)->get();
        $show_data_section = Media::orderBy('created_at', 'desc')->take(5)->get();
        $wall_data = Video::where('status',0)->where('visibility', 'public')->orWhere('user_id', Auth::user()->id)->latest()->take(20)->get();
        $hubs_data = ModelsHubs::latest()->take(4)->get();
        $showlastmedia = Media::latest()->take(5)->get();
        $show_data_latest = Media::orderBy('created_at', 'desc')->whereDay('created_at', '15')->get();
        return view('index', compact('show_data','show_data_section','showlastmedia','hubs_data','wall_data','show_data_latest'));
    }else{
        return redirect()->route('login');
    }
})->name('home');
Route::get('/media', Allmedias::class)->name('gu.media')->middleware('auth', 'verified');
Route::get('/media/wall', Wall::class)->name('gu.wall')->middleware('auth', 'verified');
Route::get('/media/hubs', Hubs::class)->name('gu.ehubs')->middleware('auth', 'verified');
Route::get('/media/profiles', Profiles::class)->name('gu.profiles')->middleware('auth', 'verified');
Route::name('gu.')->group(function () {
    Route::get('/profile/{name:id}', ProfileUSer::class)->name('profile.show');
    Route::get('/latest', Findvideo::class)->name('find')->middleware('auth', 'verified');
    Route::get('/hubs', [HubsController::class, 'display'])->name('hubs');
});

Route::get('wall/{video}/', ShowFeed::class)->middleware(['auth'])->name('show.wall.feed');
Route::get('watch/{media}/', Watchmedia::class)->middleware(['auth'])->name('watch.media');
Route::get('hubs/{media}/media', WatchHubMedia::class)->middleware(['auth'])->name('watch.hubs.media');
Route::get('hubs/{wall}/wall', WatchHubWall::class)->middleware(['auth'])->name('watch.hubs.wall');
Route::get('/hubs/{uid}/', [HubsController::class, 'show'])->middleware(['auth'])->name('show.hubs');

//  Dashboard
Route::prefix('/dashboard')->middleware(['auth','verified'])->name('dash.')->group(function () {
    Route::get('/wall/{video}/edit', EditVideo::class)->name('edit.video');
    Route::get('/wall/list', Allvideos::class)->name('list.video');
    Route::get('/media/{media}/edit', EditMedia::class)->name('edit.media');
    Route::get('/media/list', Allmedia::class)->name('list.media');
    Route::get('/setting/profile/', Edit::class)->name('setting.profile');
    Route::get('/more/marked', Marked::class)->name('page.marked');
    Route::get('/', [dashboard::class, 'index'])->name('index');
    Route::get('/list-followers', ListFollowers::class)->name('list_followers');
    Route::get('/wall', function () {
        return view('dashboard.create');
    })->name('createwall');

    // Router Hubs
    Route::get('/create-hubs', [HubsController::class, 'index'])->name('create.hubs');
    Route::post('/create-hubs', [HubsController::class, 'store'])->name('create.hubs.store');
    Route::get('/list-hubs', [HubsController::class, 'list_hubs'])->name('list.hubs');
    Route::delete('/list-hubs/{hubs:uid}/', [HubsController::class, 'destroy'])->name('destroy.hubs');
    Route::get('/list-hubs/{uid}/edit', [HubsController::class, 'edit'])->name('edit.hubs');
    Route::patch('/list-hubs/{hubs}/edit', [HubsController::class, 'update'])->name('update.hubs');

    // Hubs Media
    Route::get('/media', Createmedia::class)->name('createmedia');
    Route::get('hubs/media/{hubs_id}/', Create::class)->name('create.media.hubs');
    Route::get('hubs/wall/{hubs_id}/', WallCreate::class)->name('create.wall.hubs');
    Route::get('/hubs/media/{hubmedia}/edit/', MediaEdit::class)->name('update.media.hubs');
    Route::get('/hubs/wall/{hubmedia}/edit/', WallEdit::class)->name('update.wall.hubs');
    Route::get('/hubs/list-media', ListMedia::class)->name('list.media.hubs');
    Route::get('/hubs/list-wall', Listwall::class)->name('list.wall.hubs');
    Route::get('/hubs/setting/{hub_id}', SettingHub::class)->name('hubs.setting');
    Route::post('/hubs/setting/post', [SettingHub::class, 'storeData'])->name('hubs.settingPost');

    // bulletin

    Route::get('/hubs/bulletin/{hubs_id}/', BulltienCreate::class)->name('create.bulletin.hubs');
    Route::get('/hubs/list-bulletin', Display::class)->name('list.bulletin.hubs');

    // Message Direct
    Route::get('/direct/box',DirectBox::class)->name('show.message');
    Route::get('/direct/messages/{id}', MessageUser::class)->name('show.message.user');

    Route::post('/support/post', [messageUserController::class, 'sendSupportMessage'])->name('sendSupportMsg');
});

//Admin Routes
Route::get('/admin/login', LoginComponent::class)->name('adminLogin');

// Admin Panel
Route::prefix('/admin')->middleware(['auth','verified', 'authAdmin'])->name('admin.')->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

    //Users
    Route::get('/user/all-users', AllUsersComponent::class)->name('allUsers');

    //Walls
    Route::get('/walls', AllWallsComponent::class)->name('allWalls');

    //Hubs
    Route::get('/hubs', AllHubsComponent::class)->name('allHubs');
    Route::get('/hubs/medias/{hub_id}', HubMediaComponent::class)->name('allHubMedias');
    Route::get('/hubs/walls/{hub_id}', HubWallsComponent::class)->name('allHubWalls');
    Route::get('/hubs/bulletins/{hub_id}', HubBulletinsComponent::class)->name('allHubBulletins');

    //settings
    Route::get('/setting/website-setup', WebsiteSetupComponent::class)->name('websiteSetup');
    
});

Route::get('dashboard/admin/users/list', ManagementUser::class)->middleware(['auth','admin'])->name('dash.admin.user.list');
Route::get('dashboard/admin/hubs/list', ManagamentHubs::class)->middleware(['auth','admin'])->name('dash.admin.hubs.list');


Route::get('/privacy', [messageUserController::class, 'privacy'])->name('privacy');
Route::get('/terms', [messageUserController::class, 'terms'])->name('terms');

require __DIR__ . '/auth.php';
