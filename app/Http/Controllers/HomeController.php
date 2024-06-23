<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

use App\Models\Header;
use App\Models\Slider;
use App\Models\Footer;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\AboutContent;
use App\Models\ServiceContent;
use App\Models\Service;
use App\Models\AboutPage;
use App\Models\Team;
use App\Models\Banner;
use App\Models\News;
use App\Models\Video;
use App\Models\Notice;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectCategory;

class HomeController extends Controller
{
    public function index()
    {
        // Retrieve the header data from the database
        $header = Header::first();
        $footer = Footer::first();

        $banner = Banner::all();

        $slider1 = Slider::findOrNew(1);
        $slider2 = Slider::findOrNew(2);
        $slider3 = Slider::findOrNew(3);
        $slider4 = Slider::findOrNew(4);

        // Retrieve all brands from the database
        $brands = Brand::all();
        $aboutContent = AboutContent::firstOrNew();
        $serviceContent = ServiceContent::firstOrNew();
        $services = Service::all();
        $categories = Category::all();
        $pcategories = ProjectCategory::all();
        $projects = Project::all();
        $ongoingProjects = Project::whereHas('category', function ($query) {
            $query->where('id', 2); // Category ID for ongoing projects
        })->get();
        $completedProjects = Project::whereHas('category', function ($query) {
            $query->where('id', 3); // Category ID for completed projects
        })->get();

        // Pass the header, footer, sliders, and brands data to the view
        return view('frontend.index', [
            'header' => $header,
            'footer' => $footer,
            'banner' => $banner,
            'slider1' => $slider1,
            'slider2' => $slider2,
            'slider3' => $slider3,
            'slider4' => $slider4,
            'brands' => $brands,
            'aboutContent' => $aboutContent,
            'serviceContent' => $serviceContent,
            'services' => $services,
            'categories' => $categories,
            'pcategories' => $pcategories,
            'projects' => $projects,
            'ongoingProjects'=> $ongoingProjects,
            'completedProjects'=> $completedProjects,
        ]);
    }

    public function about()
    {
        $header = Header::first();
        $footer = Footer::first();
        $aboutPage = AboutPage::firstOrNew();
        $teams = Team::all();
        $categories = Category::all();
        return view('frontend.about', [
            'header' => $header,
            'footer' => $footer,
            'aboutPage' => $aboutPage,
            'teams' => $teams,
            'categories' => $categories,
        ]);
    }

    public function projects()
    {
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();
        $pcategories = ProjectCategory::all();
        $projects = Project::all();
        $ongoingProjects = Project::whereHas('category', function ($query) {
            $query->where('id', 2); // Category ID for ongoing projects
        })->get();
        $completedProjects = Project::whereHas('category', function ($query) {
            $query->where('id', 3); // Category ID for completed projects
        })->get();

        return view('frontend.projects', [
            'categories' => $categories,
            'header' => $header,
            'footer' => $footer,
            'pcategories' => $pcategories,
            'projects' => $projects,
            'ongoingProjects'=> $ongoingProjects,
            'completedProjects'=> $completedProjects,
            ]);
    }

    public function firedetectionalarm()
    {
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();
        return view('frontend.fire-detection-as', ['categories' => $categories, 'header' => $header, 'footer' => $footer,]);
    }

    public function fireprotectionsystem()
    {
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();
        return view('frontend.fire-protection-system', ['categories' => $categories, 'header' => $header, 'footer' => $footer,]);
    }

    public function catindex()
    {
        $categories = Category::all();
        $header = Header::first();
        $footer = Footer::first();
        return view('frontend.categories.index', compact('categories', 'header', 'footer'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $services = $category->services;
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();

        return view('frontend.categories.show', compact('categories', 'category', 'services', 'header', 'footer'));
    }

    public function details($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();

        return view('frontend.services.details', compact('categories', 'service', 'header', 'footer'));
    }

    public function pcatindex()
    {
        $categories = Category::all();
        $header = Header::first();
        $footer = Footer::first();
        return view('frontend.pcategories.index', compact('categories', 'header', 'footer'));
    }

    public function pshow($slug)
    {
        $pcategory = ProjectCategory::where('slug', $slug)->firstOrFail();
        $projects = $pcategory->projects; // Fix the typo here
        $header = Header::first();
        $footer = Footer::first();
        $pcategories = ProjectCategory::all();

        return view('frontend.categories.pshow', compact('pcategories', 'pcategory', 'projects', 'header', 'footer'));
    }

    public function pdetails($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();

        return view('frontend.projects.pdetails', compact('categories', 'project', 'header', 'footer'));
    }

    public function contact()
    {
        $header = Header::first();
        $footer = Footer::first();
        $categories = Category::all();
        return view('frontend.contact', ['categories' => $categories, 'header' => $header, 'footer' => $footer]);
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        // Get the contact email dynamically
        $contactEmail = Header::getContactEmail();

        // Send email
        Mail::to($contactEmail)->send(new ContactMessage($request->all()));

        session()->flash('success', 'Your message has been submitted successfully!');

        return redirect()->back();
    }


    public function termscondition()
    {
        $header = Header::first();
        $footer = Footer::first();
        return view('frontend.terms-condition', ['header' => $header, 'footer' => $footer,]);
    }

    public function privacypolicy()
    {
        $header = Header::first();
        $footer = Footer::first();
        return view('frontend.privacy-policy', ['header' => $header, 'footer' => $footer,]);
    }

    public function medianews()
    {
        $header = Header::first();
        $footer = Footer::first();
        $news = News::all();
        $videos = Video::all();
        $notice = Notice::all();
        $categories = Category::all();
        return view('frontend.media-news', 
        [
        'categories' => $categories,
        'header' => $header,
        'footer' => $footer,
        'news' => $news,
        'videos' => $videos,
        'notice' => $notice,
        ]);
    }

    public function newsshow($id)
    {
        $header = Header::first();
        $footer = Footer::first();
        $notice = Notice::all();
        $categories = Category::all();
        $news = News::findOrFail($id);

        return view('frontend.news.show', compact('news', 'header', 'footer', 'notice', 'categories'));
    }
}