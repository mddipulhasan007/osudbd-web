<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\BackupDestination\BackupCollection;

use App\Models\Header;
use App\Models\Slider;
use App\Models\Footer;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Contact;
use App\Models\EmailSetting;
use App\Models\AboutPage;
use App\Models\AboutContent;
use App\Models\ServiceContent;
use App\Models\News;
use App\Models\Video;
use App\Models\Banner;
use App\Models\Notice;
use App\Models\Team;
use App\Models\Project;
use App\Models\ProjectCategory;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aboutPage = AboutPage::firstOrNew();
        return view('admin.index', compact('aboutPage'));
    }

    public function header(Request $request)
    {
        
//        if (!in_array(auth()->user->role_id,[2,3])){
//            abort('403');
//        }

        $header = Header::first();

        if (!$header) {
            // If no header record exists, create a new one
            $header = new Header();
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'email' => 'nullable|email',
                'phone' => 'nullable|string',
                'address' => 'nullable|string',
                'facebook' => 'nullable|url',
                'linkedin' => 'nullable|url',
                'youtube' => 'nullable|url',
                'whatsapp' => 'nullable|string',
                'contact_email' => 'nullable|string',
            ]);

            // Update logo if a new one is uploaded
            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('uploads', 'public');
                $header->logo = $logoPath;
            }

            // Update other fields
            $header->email = $request->input('email');
            $header->phone = $request->input('phone');
            $header->address = $request->input('address');
            $header->facebook = $request->input('facebook');
            $header->linkedin = $request->input('linkedin');
            $header->youtube = $request->input('youtube');
            $header->whatsapp = $request->input('whatsapp');
            $header->contact_email = $request->input('contact_email');

            $header->save();

            return redirect()->route('header')->with('success', 'Header data saved successfully.');
        }

        return view('admin.home.header', ['header' => $header]);
    }

    public function banners(Request $request){
        $banner = Banner::all();
        return view('admin.banner.index', 
            compact('banner')
        );
    }

    public function addnewbanner(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'main_title' => 'required|string',
                'caption_title' => 'required|string',
                'services_url' => 'required|string',
                'contact_url' => 'required|string',
            ]);

            $bannerImagePath = $request->file('banner_image')->store('banner', 'public');

            Banner::create([
                'banner_image' => $bannerImagePath,
                'main_title' => $request->input('main_title'),
                'caption_title' => $request->input('caption_title'),
                'services_url' => $request->input('services_url'),
                'contact_url' => $request->input('contact_url'),
            ]);

            return redirect()->route('banners')->with('success', 'Slider added successfully');
        }

        return view('admin.banner.add-banner-slider');
    }

    public function editbanner(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        if ($request->isMethod('post')) {
            $rules = [
                'main_title' => 'required|string',
                'caption_title' => 'required|string',
                'services_url' => 'required|string',
                'contact_url' => 'required|string',
            ];

            if ($request->hasFile('banner_image')) {
                $rules['banner_image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }

            $request->validate($rules);

            $banner->update([
                'main_title' => $request->input('main_title'),
                'caption_title' => $request->input('caption_title'),
                'services_url' => $request->input('services_url'),
                'contact_url' => $request->input('contact_url'),
            ]);

            if ($request->hasFile('banner_image')) {
                $bannerImagePath = $request->file('banner_image')->store('banner', 'public');
                $banner->update(['banner_image' => $bannerImagePath]);
            }

            return redirect()->route('banners')->with('success', 'Slider updated successfully');
        }

        return view('admin.banner.edit-banner-slider', ['banner' => $banner, 'bannerPath' => $banner->banner_image]);
    }

    public function removebanner($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banners')->with('success', 'Slider removed successfully.');
    }

    public function slider(Request $request)
    {
        $slider1 = Slider::findOrNew(1);
        $slider2 = Slider::findOrNew(2);
        $slider3 = Slider::findOrNew(3);
        $slider4 = Slider::findOrNew(4);

        if ($request->isMethod('post')) {
            $request->validate([
                'slider1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'caption_title1' => 'nullable|string',
                'main_title1' => 'nullable|string',
                'contact_url1' => 'nullable|url',
                'services_url1' => 'nullable|url',

                'slider2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'caption_title2' => 'nullable|string',
                'main_title2' => 'nullable|string',
                'contact_url2' => 'nullable|url',
                'services_url2' => 'nullable|url',

                'slider3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'caption_title3' => 'nullable|string',
                'main_title3' => 'nullable|string',
                'contact_url3' => 'nullable|url',
                'services_url3' => 'nullable|url',

                'slider4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'caption_title4' => 'nullable|string',
                'main_title4' => 'nullable|string',
                'contact_url4' => 'nullable|url',
                'services_url4' => 'nullable|url',
                // Add similar rules for Slider 2, 3, 4
            ]);

            $slider1 = Slider::findOrNew(1);
            $slider2 = Slider::findOrNew(2);
            $slider3 = Slider::findOrNew(3);
            $slider4 = Slider::findOrNew(4);

            // Set the id when creating a new instance
            $slider1->id = 1;
            $slider2->id = 2;
            $slider3->id = 3;
            $slider4->id = 4;

            // Update Slider 1 data
            if ($request->hasFile('slider1')) {
                $slider1Path = $request->file('slider1')->store('slider_images', 'public');
                $slider1->image_path = $slider1Path;
            }
            $slider1->caption_title = $request->input('caption_title1');
            $slider1->main_title = $request->input('main_title1');
            $slider1->contact_url = $request->input('contact_url1');
            $slider1->services_url = $request->input('services_url1');
            $slider1->save();

            if ($request->hasFile('slider2')) {
                $slider2Path = $request->file('slider2')->store('slider_images', 'public');
                $slider2->image_path = $slider2Path;
            }
            $slider2->caption_title = $request->input('caption_title2');
            $slider2->main_title = $request->input('main_title2');
            $slider2->contact_url = $request->input('contact_url2');
            $slider2->services_url = $request->input('services_url2');
            $slider2->save();

            if ($request->hasFile('slider3')) {
                $slider3Path = $request->file('slider3')->store('slider_images', 'public');
                $slider3->image_path = $slider3Path;
            }
            $slider3->caption_title = $request->input('caption_title3');
            $slider3->main_title = $request->input('main_title3');
            $slider3->contact_url = $request->input('contact_url3');
            $slider3->services_url = $request->input('services_url3');
            $slider3->save();

            if ($request->hasFile('slider4')) {
                $slider4Path = $request->file('slider4')->store('slider_images', 'public');
                $slider4->image_path = $slider4Path;
            }
            $slider4->caption_title = $request->input('caption_title4');
            $slider4->main_title = $request->input('main_title4');
            $slider4->contact_url = $request->input('contact_url4');
            $slider4->services_url = $request->input('services_url4');
            $slider4->save();

            return redirect()->route('slider')->with('success', 'Sliders updated successfully.');
        }

        return view('admin.home.sliders', [
            'slider1' => $slider1,
            'slider2' => $slider2,
            'slider3' => $slider3,
            'slider4' => $slider4,
        ]);
    }

    public function footer(Request $request)
    {
        $footer = Footer::first();

        if (!$footer) {
            $footer = new Footer();
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'about_txt' => 'nullable|string',
                's_menu_url1' => 'nullable|url',
                's_menu_url2' => 'nullable|url',
                's_menu_url3' => 'nullable|url',
                's_menu_url4' => 'nullable|url',
                's_menu_url5' => 'nullable|url',
                's_menu_url6' => 'nullable|url',
                'copyright_txt' => 'nullable|string',
                'foo_menu_url1' => 'nullable|url',
                'foo_menu_url2' => 'nullable|url',
                'foo_menu_url3' => 'nullable|url',
                'foo_menu_url4' => 'nullable|url',
            ]);

            // Update logo if a new one is uploaded
            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('uploads', 'public');
                $footer->logo = $logoPath;
            }

            // Update other fields
            $footer->about_txt = $request->input('about_txt');
            $footer->s_menu_url1 = $request->input('s_menu_url1');
            $footer->s_menu_url2 = $request->input('s_menu_url2');
            $footer->s_menu_url3 = $request->input('s_menu_url3');
            $footer->s_menu_url4 = $request->input('s_menu_url4');
            $footer->s_menu_url5 = $request->input('s_menu_url5');
            $footer->s_menu_url6 = $request->input('s_menu_url6');
            $footer->copyright_txt = $request->input('copyright_txt');
            $footer->foo_menu_url1 = $request->input('foo_menu_url1');
            $footer->foo_menu_url2 = $request->input('foo_menu_url2');
            $footer->foo_menu_url3 = $request->input('foo_menu_url3');
            $footer->foo_menu_url4 = $request->input('foo_menu_url4');

            $footer->save();

            return redirect()->route('footer')->with('success', 'Footer data saved successfully.');
        }

        return view('admin.home.footer', ['footer' => $footer]);
    }

    public function aboutpage()
    {
        $aboutPage = AboutPage::firstOrNew();

        return view('admin.about.index', compact('aboutPage'));
    }

    public function saveAboutPage(Request $request)
    {
        $request->validate([
            'about_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bdcmb_banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Add more validation rules as needed
        ]);

        // Retrieve the existing about page or create a new one
        $aboutPage = AboutPage::firstOrNew();

        // Handle file upload for bdcmb_banner_img
        if ($request->hasFile('bdcmb_banner_img')) {
            $aboutPage->bdcmb_banner_img = $request->file('bdcmb_banner_img')->store('uploads', 'public');
        }

        // Update the fields with the form data
        $aboutPage->bdcmb_show_hide = $request->input('bdcmb_show_hide');
        $aboutPage->teams_show_hide = $request->input('teams_show_hide');
        $aboutPage->left_about_txt = $request->input('left_about_txt');
        $aboutPage->total_projects_count = $request->input('total_projects_count');
        $aboutPage->staff_members_count = $request->input('staff_members_count');
        $aboutPage->running_project_count = $request->input('running_project_count');
        $aboutPage->dist_exp_count = $request->input('dist_exp_count');

        // Handle file upload for about_img
        if ($request->hasFile('about_img')) {
            $aboutPage->about_img = $request->file('about_img')->store('uploads', 'public');
        }

        $aboutPage->integrity_txt = $request->input('integrity_txt');

        // Save the updated about page
        $aboutPage->save();

        return redirect()->back()->with('success', 'About page content saved successfully.');
    }

    public function teams(Request $request){
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    public function addnewteam(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string',
                'qualification' => 'required|string',
                'short_content' => 'nullable|string', // Allow NULL or non-empty string
            ]);

            // Upload feature image and save to the database
            $profileImagePath = $request->file('profile_image')->store('teams', 'public');

            // Set short_content to null if it's not provided
            $shortContent = $request->filled('short_content') ? $request->input('short_content') : null;

            Team::create([
                'profile_image' => $profileImagePath,
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'short_content' => $shortContent,
            ]);

            return redirect()->route('teams')->with('success', 'Teams added successfully');
        }

        // Fetch categories to be used in the form

        return view('admin.teams.add-team');
    }

    public function editteam(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string',
                'qualification' => 'required|string',
                'short_content' => 'required|string',
            ]);

            // Update team data
            $team->update([
                'name' => $request->input('name'),
                'qualification' => $request->input('qualification'),
                'short_content' => $request->input('short_content'),
            ]);

            // Update profile image if a new one is provided
            if ($request->hasFile('profile_image')) {
                $profileImagePath = $request->file('profile_image')->store('teams', 'public');
                $team->update(['profile_image' => $profileImagePath]);
            }

            return redirect()->route('teams')->with('success', 'Team updated successfully');
        }

        return view('admin.teams.edit-team', ['team' => $team, 'profilePath' => $team->profile_image]);
    }

    public function removeteam($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams')->with('success', 'Team removed successfully.');
    }

    public function newses(Request $request){
        $news = News::all();
        return view('admin.news.index', 
            compact('news')
        );
    }

    public function addnewnews(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'news_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'news_gallery_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string',
            ]);

            $newsImagePath = $request->file('news_image')->store('news', 'public');
            $galleryImages = $request->file('news_gallery_image');

            $galleryImagePaths = [];
            foreach ($galleryImages as $image) {
                $imagePath = $image->store('news', 'public');
                $galleryImagePaths[] = $imagePath;
            }

            // Convert array to JSON before saving
            $galleryImagesJson = json_encode($galleryImagePaths);

            News::create([
                'title' => $request->input('title'),
                'news_image' => $newsImagePath,
                'news_gallery_image' => $galleryImagesJson,
            ]);

            return redirect()->route('newses')->with('success', 'News added successfully');
        }

        return view('admin.news.add-news');
    }

    public function editnews(Request $request, $id)
    {
        $news = News::findOrFail($id);

        if ($request->isMethod('post')) {
            $rules = [
                'title' => 'required|string',
            ];

            if ($request->hasFile('news_image')) {
                $rules['news_image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }

            if ($request->hasFile('news_gallery_image')) {
                $rules['news_gallery_image.*'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048';
            }

            $request->validate($rules);

            $data = [
                'title' => $request->input('title'),
            ];

            // Update thumbnail image if uploaded
            if ($request->hasFile('news_image')) {
                $newsImagePath = $request->file('news_image')->store('news', 'public');
                $data['news_image'] = $newsImagePath;
                // Delete old thumbnail image if it exists
                Storage::disk('public')->delete($request->input('current_image'));
            }

            // Update gallery images if uploaded
            if ($request->hasFile('news_gallery_image')) {
                $galleryImagePaths = [];
                foreach ($request->file('news_gallery_image') as $galleryImage) {
                    $galleryImagePath = $galleryImage->store('news/gallery', 'public');
                    $galleryImagePaths[] = $galleryImagePath;
                }
                $data['news_gallery_image'] = $galleryImagePaths;
                // Delete old gallery images if they exist
                $currentGallery = json_decode($request->input('current_gallery'), true);
                foreach ($currentGallery as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            // Update the news data
            $news->update($data);

            return redirect()->route('newses')->with('success', 'News updated successfully');
        }

        return view('admin.news.edit-news', ['news' => $news, 'newsPath' => $news->news_image]);
    }

    public function removenews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('newses')->with('success', 'News removed successfully.');
    }

    public function videos()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    public function addnewvideo(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'video_title' => 'required|string',
                'video_iframe' => 'required|string',
            ]);

            Video::create([
                'video_title' => $request->input('video_title'),
                'video_iframe' => $request->input('video_iframe'),
            ]);

            return redirect()->route('videos')->with('success', 'Video added successfully');
        }
        return view('admin.videos.add-video');    
    }

    public function editvideo(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'video_title' => 'required|string',
                'video_iframe' => 'required|string',
            ]);

            $video = Video::findOrFail($id);

            $video->update([
                'video_title' => $request->input('video_title'),
                'video_iframe' => $request->input('video_iframe'),
            ]);

            return redirect()->route('videos')->with('success', 'Video updated successfully');
        }

        // Load the video to edit
        $video = Video::findOrFail($id);

        return view('admin.videos.edit-video', compact('video'));
    }


    public function removevideo($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('videos')->with('success', 'Video removed successfully');
    }

    
    public function notices(Request $request){
        $notice = Notice::all();
        return view('admin.notice.index', 
            compact('notice')
        );
    }

    public function addnewnotice(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required|string',
                'pdf_url' => 'required|string',
            ]);

            Notice::create([
                'title' => $request->input('title'),
                'pdf_url' => $request->input('pdf_url'),
            ]);

            return redirect()->route('notices')->with('success', 'Notice added successfully');
        }

        return view('admin.notice.add-notice');
    }

    public function editnotice(Request $request, $id)
    {
        $notice = Notice::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'title' => 'required|string',
                'pdf_url' => 'required|string',
            ]);

            $notice->update([
                'title' => $request->input('title'),
                'pdf_url' => $request->input('pdf_url'),
            ]);

            return redirect()->route('notices')->with('success', 'Notice updated successfully');
        }

        return view('admin.notice.edit-notice', ['notice' => $notice]);
    }

    public function removenotice($id)
    {
        $notice = Notice::findOrFail($id);
        $notice->delete();

        return redirect()->route('notices')->with('success', 'Notice removed successfully.');
    }



    public function aboutcontent()
    {
        // Retrieve the existing about content from the database
        $aboutContent = AboutContent::firstOrNew();

        return view('admin.home.aboutcontent', compact('aboutContent'));
    }

    public function saveAboutContent(Request $request)
    {
        // Validate the form data
        $request->validate([
            // Add validation rules as needed
        ]);

        // Save the form data to the database
        AboutContent::updateOrCreate([], $request->all());

        return redirect()->back()->with('success', 'About content saved successfully.');
    }

    public function serviceContent()
    {
        // Retrieve the existing service content from the database
        $serviceContent = ServiceContent::firstOrNew();

        return view('admin.home.servicecontent', compact('serviceContent'));
    }

    public function saveServiceContent(Request $request)
    {
        $request->validate([
            'service_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Add more validation rules as needed
        ]);

        // Retrieve the existing service content or create a new one
        $serviceContent = ServiceContent::firstOrNew();

        // Update the fields with the form data
        $serviceContent->fire_protect_system = $request->input('fire_protect_system');
        $serviceContent->hvac_system = $request->input('hvac_system');
        $serviceContent->electrical_solu = $request->input('electrical_solu');
        $serviceContent->middle_title_txt = $request->input('middle_title_txt');
        $serviceContent->plumbing_service = $request->input('plumbing_service');
        $serviceContent->elevator_escalator = $request->input('elevator_escalator');
        $serviceContent->safety_consult = $request->input('safety_consult');

        // Handle file upload for service_img
        if ($request->hasFile('service_img')) {
            $service_imgPath = $request->file('service_img')->store('uploads', 'public');
            $serviceContent->service_img = $service_imgPath;
        }

        // Save the updated service content
        $serviceContent->save();

        return redirect()->back()->with('success', 'Service content saved successfully.');
    }

    public function brands()
    {
        $brands = Brand::all();
        return view('admin.home.brands', compact('brands'));
    }

    public function addnewbrandlogo(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Upload logo and save to the database
            $logoPath = $request->file('logo')->store('brands', 'public');
            Brand::create(['logo' => $logoPath]);

            return view('admin.home.single-brand', ['logoPath' => $logoPath]);
        }

        return view('admin.home.single-brand');
    }

    public function editBrandLogo(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Update logo if a new one is uploaded
            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('brands', 'public');
                $brand->update(['logo' => $logoPath]);
            }

            return redirect()->route('brands')->with('success', 'Brand logo updated successfully.');
        }

        return view('admin.home.edit-single-brand', ['brand' => $brand]);
    }

    public function removeBrandLogo($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brands')->with('success', 'Brand logo removed successfully.');
    }

    public function services(Request $request){
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function addservice(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string',
                'content' => 'required|string',
                'pdf_url' => 'nullable|url',
                'category_id' => 'required|exists:categories,id',
            ]);

            // Upload feature image and save to the database
            $featureImagePath = $request->file('feature_image')->store('services', 'public');

            Service::create([
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title')),
                'content' => $request->input('content'),
                'pdf_url' => $request->input('pdf_url'),
                'category_id' => $request->input('category_id'),
                'feature_image' => $featureImagePath,
            ]);

            return redirect()->route('services')->with('success', 'Service added successfully');
        }

        // Fetch categories to be used in the form
        $categories = Category::all();

        return view('admin.services.add-service', compact('categories'));
    }

    public function editservice(Request $request, $id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string',
                'content' => 'required|string',
                'pdf_url' => 'nullable|url',
                'category_id' => 'required|exists:categories,id',
            ]);

            // Update service data
            $serviceData = [
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title')),
                'content' => $request->input('content'),
                'pdf_url' => $request->input('pdf_url'),
                'category_id' => $request->input('category_id'),
            ];

            // Update feature image if provided
            if ($request->hasFile('feature_image')) {
                // Upload feature image and save to the database
                $featureImagePath = $request->file('feature_image')->store('services', 'public');
                $serviceData['feature_image'] = $featureImagePath;
            }

            // Update the service
            $service->update($serviceData);

            return redirect()->route('services')->with('success', 'Service updated successfully');
        }

        // Fetch categories to be used in the form
        $categories = Category::all();

        // Pass the existing feature image path to the view
        $featurePath = $service->feature_image;

        return view('admin.services.edit-service', compact('service', 'categories', 'featurePath'));
    }

    public function removeservice($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services')->with('success', 'Service removed successfully.');
    }

    public function categories(Request $request)
    {
        $categories = Category::all();
        return view('admin.services.cat-manage', compact('categories'));
    }

    public function addcategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'cat_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|unique:categories',
            ]);

            $catImagePath = $request->file('cat_image')->store('categories', 'public');

            Category::create([
                'cat_image' => $catImagePath,
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name')),
            ]);

            return redirect()->route('categories')->with('success', 'Category added successfully');
        }

        return view('admin.services.add-category');
    }

    public function editcategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'cat_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|unique:categories,name,' . $category->id,
            ]);

            $catImagePath = $request->file('cat_image')->store('categories', 'public');

            $category->update([
                'cat_image' => $catImagePath,
                'name' => $request->input('name'),  // You can remove this line to keep the original name
                'slug' => Str::slug($request->input('name')),
            ]);

            return redirect()->route('categories')->with('success', 'Category updated successfully');
        }

        return view('admin.services.edit-category', ['category' => $category]);
    }

    public function removecategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories')->with('success', 'Category removed successfully.');
    }

    //project

    public function projects(Request $request){
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function addproject(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'feature_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string',
                'content' => 'required|string',
                'pdf_url' => 'nullable|url',
                'category_id' => 'required|exists:projectcategories,id',
            ]);

            // Upload feature image and save to the database
            $featureImagePath = $request->file('feature_image')->store('projects', 'public');

            Project::create([
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title')),
                'content' => $request->input('content'),
                'pdf_url' => $request->input('pdf_url'),
                'category_id' => $request->input('category_id'),
                'feature_image' => $featureImagePath,
            ]);

            return redirect()->route('projects')->with('success', 'Project added successfully');
        }

        // Fetch categories to be used in the form
        $categories = ProjectCategory::all();

        return view('admin.projects.add-project', compact('categories'));
    }

    public function editproject(Request $request, $id)
    {
        // Find the project by ID
        $project = Project::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'feature_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'title' => 'required|string',
                'content' => 'required|string',
                'pdf_url' => 'nullable|url',
                'category_id' => 'required|exists:projectcategories,id',
            ]);

            // Update project data
            $projectData = [
                'title' => $request->input('title'),
                'slug' => Str::slug($request->input('title')),
                'content' => $request->input('content'),
                'pdf_url' => $request->input('pdf_url'),
                'category_id' => $request->input('category_id'),
            ];

            // Update feature image if provided
            if ($request->hasFile('feature_image')) {
                // Upload feature image and save to the database
                $featureImagePath = $request->file('feature_image')->store('projects', 'public');
                $projectData['feature_image'] = $featureImagePath;
            }

            // Update the project
            $project->update($projectData);

            return redirect()->route('projects')->with('success', 'Project updated successfully');
        }

        // Fetch categories to be used in the form
        $categories = ProjectCategory::all();

        // Pass the existing feature image path to the view
        $featurePath = $project->feature_image;

        return view('admin.projects.edit-project', compact('project', 'categories', 'featurePath'));
    }

    public function removeproject($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects')->with('success', 'Project removed successfully.');
    }

    public function projectcategories(Request $request)
    {
        $categories = ProjectCategory::all();
        return view('admin.projects.cat-manage', compact('categories'));
    }

    public function addprojectcategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'cat_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|unique:projectcategories',
            ]);

            $catImagePath = $request->file('cat_image')->store('projectcategories', 'public');

            ProjectCategory::create([
                'cat_image' => $catImagePath,
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name')),
            ]);

            return redirect()->route('projectcategories')->with('success', 'Category added successfully');
        }

        return view('admin.projects.add-category');
    }

    public function editprojectcategory(Request $request, $id)
    {
        $category = ProjectCategory::findOrFail($id);

        if ($request->isMethod('post')) {
            $request->validate([
                'cat_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|unique:projectcategories,name,' . $category->id,
            ]);

            $catImagePath = $request->file('cat_image')->store('projectcategories', 'public');

            $category->update([
                'cat_image' => $catImagePath,
                'name' => $request->input('name'),
                'slug' => Str::slug($request->input('name')),
            ]);

            return redirect()->route('projectcategories')->with('success', 'Category updated successfully');
        }

        return view('admin.projects.edit-category', ['category' => $category]);
    }

    public function removeprojectcategory($id)
    {
        $category = ProjectCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('projectcategories')->with('success', 'Category removed successfully.');
    }

    public function showMenu(Request $request)
    {
        // Process existing menu items
        foreach ($request->input('menuItems', []) as $menuItemData) {
            // Extract data from the form
            $id = $menuItemData['data-id'];
            $name = $menuItemData['data-name'];
            $slug = $menuItemData['data-slug'];

            // Your logic to insert/update into the database goes here
            // Example:
            MenuItem::updateOrCreate(
                ['id' => $id],
                ['name' => $name, 'slug' => $slug]
                // ... other fields ...
            );
        }

        // Process new menu items
        foreach ($request->input('newMenuItems', []) as $newMenuItemData) {
            // Extract data from the form
            $name = Arr::get($newMenuItemData, 'data-name', null);
            $slug = Arr::get($newMenuItemData, 'data-slug', null);
            $parentId = Arr::get($newMenuItemData, 'parent_id', null);

            // Check if 'name' is not null before creating a new menu item
            if ($name !== null) {
                // Your logic to insert into the database goes here
                // Example:
                MenuItem::create(['name' => $name, 'slug' => $slug, 'parent_id' => $parentId]);
            }
        }

        $menuItems = MenuItem::all();
        return view('admin.home.menu', ['menuItems' => $menuItems]);
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('admin.home.contact-list', compact('contacts'));
    }

    public function removeContact($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect()->route('contacts')->with('error', 'Contact not found.');
        }

        $contact->delete();

        return redirect()->route('contacts')->with('success', 'Contact removed successfully.');
    }

    public function addmail(Request $request)
    {
        $setemail = EmailSetting::first(); // Assuming there's only one record
        return view('admin.set-mail', compact('setemail'));
    }


    public function backupDatabase()
    {
        try {
            // Perform the database backup
            \Artisan::call('backup:run');

            // You can also specify a disk if you're using a custom disk for backups
            // \Artisan::call('backup:run', ['--only-db' => true, '--only-to-disk' => 'custom_disk']);

            return redirect()->route('admin.dashboard')->with('success', 'Database backup created successfully.');
        } catch (\Exception $exception) {
            return redirect()->route('dashboard')->with('error', 'Error creating database backup: ' . $exception->getMessage());

        }
    }

    public function settings()
    {
        $user = auth()->user();
        return view('admin.acc-setting',compact('user'));
    }
    public function update_profile( Request $request)
    {
        $user = User::find(auth()->id());
        if (empty($user)){
            abort('404');
        }
        try {
            $updateData = [
                'name'=>$request->name,
                'email'=>$request->email,
            ];
            if (!empty($request->password)){
                $updateData['password']= Hash::make($request->password);
            }
            $user->update($updateData);
        }catch (\Exception $e){
            dd($e->getMessage());
        }

        return redirect()->route('settings');
    }

}
