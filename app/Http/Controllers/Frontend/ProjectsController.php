<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LandingProjects;
use App\Models\ProContent;
use App\Models\ProjectTab;
use App\Models\MetaData;
use App\Models\Tab;
use App\Models\Contact;
use App\Models\Articles;


use Helper, File, Session, Auth;
use Mail;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {   
        
        $projectList = LandingProjects::orderBy('id', 'desc')->get();
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Dự án";                
        
        $socialImage = "";
        $title = "Dự án";
        return view('frontend.projects.index', compact('title', 'seo', 'socialImage', 'projectList'));
    }
    public function canho(Request $request)
    {   
        
        $projectList = LandingProjects::where('type', 1)->orderBy('id', 'desc')->get();
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Dự án căn hộ";                
        
        $socialImage = "";
        $title = "Căn hộ";
        return view('frontend.projects.index', compact('title', 'seo', 'socialImage', 'projectList'));
    }
    public function dangban(Request $request)
    {   
        
        $projectList = LandingProjects::where('status', 1)->orderBy('id', 'desc')->get();
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Dự án căn hộ";                
        
        $socialImage = "";
        $title = "Dự án đang bán";
        return view('frontend.projects.index', compact('title', 'seo', 'socialImage', 'projectList'));
    }
    public function daban(Request $request)
    {   
        
        $projectList = LandingProjects::where('status', 2)->orderBy('id', 'desc')->get();
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Dự án căn hộ";                
        
        $socialImage = "";
        $title = "Dự án đã bán";
        return view('frontend.projects.index', compact('title', 'seo', 'socialImage', 'projectList'));
    }
    public function datnen(Request $request)
    {   
        
        $projectList = LandingProjects::where('type', 2)->orderBy('id', 'desc')->get();
        $seo['title'] = $seo['description'] = $seo['keywords'] = "Dự án đất nền";                
        
        $socialImage = "";
        $title = "Đất nền";
        return view('frontend.projects.index', compact('title', 'seo', 'socialImage', 'projectList'));
    }
    public function contact(Request $request){
        $dataArr = $request->all();
        $this->validate($request,[
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'email|required',
            'content' => 'required'
        ],
        [            
            'full_name.required' => 'Bạn chưa nhập họ và tên.',
            'email.required' => 'Bạn chưa nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone.required' => 'Bạn chưa nhập số điện thoại.',
            'content.required' => 'Bạn chưa nhập nội dung.'            
        ]); 

        $rs = Contact::create($dataArr);
        if($rs->id > 0){
            $projectsDetail = LandingProjects::find($dataArr['project_id']);
            Mail::send('frontend.projects.email',
                [
                    'projectsDetail'          => $projectsDetail,
                    'dataArr'             => $dataArr
                ],
                function($message) use ($projectsDetail) {
                    $message->subject('Khách hàng liên hệ dự án #'.$projectsDetail->name);
                    $message->to(['nguyenlong0098@gmail.com']);
                    $message->from('web.0917492306@gmail.com', 'Admin Website');
                    $message->sender('web.0917492306@gmail.com', 'Admin Website');
            });
        }
        Session::flash('message', 'Gửi liên hệ thành công.');

        return redirect()->to($request->return_url);
    }
    public function detail(Request $request){

        $slug = $request->slug;        
        $detail = LandingProjects::where('slug', $slug)->first();
        $project_id = $detail->id;
        $tabList = LandingProjects::getListTabProject($project_id); 
        //dd($tabList);
        $tabArr = $articlesDetail = [];
        $i = 0;

        foreach($tabList as $tmp) {
            if($i == 0){
                $tab_id = $tmp->id;
            }
            $tabArr[] = $tmp->id;
            $i++;            
            $articlesDetail[$tmp->id] = Articles::where('project_id', $project_id)->where('tab_id', $tmp->id)->first();
        }
        $detailTab = Articles::where('project_id', $project_id)->where('tab_id', $tab_id)->first();
           
        $socialImage = $detail->image_url;
        if( $detail->meta_id > 0){
           $seo = MetaData::find( $detail->meta_id )->toArray();
           $seo['title'] = $seo['title'] != '' ? $seo['title'] : $detail->name;
           $seo['description'] = $seo['description'] != '' ? $seo['description'] : $detail->name;
           $seo['keywords'] = $seo['keywords'] != '' ? $seo['keywords'] : $detail->name;
        }else{
            $seo['title'] = $seo['description'] = $seo['keywords'] = $detail->name;
        }  
        $tab_id = 1;
		
		$tmpArr = ProjectTab::where('project_id', $project_id)->get();
        
        if( $tmpArr->count() > 0 ){
            foreach ($tmpArr as $value) {
                $tabSelected[] = $value->tab_id;
            }
        }
		
        return view('frontend.projects.detail', compact('seo', 'socialImage', 'detail', 'tabList', 'tabArr', 'detailTab', 'project_id', 'tab_id', 'tabSelected', 'articlesDetail'));
    }
    public function tab(Request $request){

        $slug = $request->slug;        
        $detail = LandingProjects::where('slug', $slug)->first();
		
		
		
        $slugtab = $request->slugtab;
        $rs = Tab::where('slug', $slugtab)->first();
        if($rs){
            $tab_id = $rs->id;
        }else{
            redirect()->route('home');
        }

        $project_id = $detail->id;
		$tmpArr = ProjectTab::where('project_id', $project_id)->get();
        
        if( $tmpArr->count() > 0 ){
            foreach ($tmpArr as $value) {
                $tabSelected[] = $value->tab_id;
            }
        }
        $tabList = LandingProjects::getListTabProject($project_id); 

        $tabArr = [];
        foreach($tabList as $tmp) {
            $tabArr[] = $tmp->id;
        }
       
        $detailTab = Articles::where('project_id', $project_id)->where('tab_id', $tab_id)->first();
        
        $socialImage = $detail->image_url;
        if($detailTab &&  $detailTab->meta_id > 0){
           $seo = MetaData::find( $detailTab->meta_id )->toArray();
           $seo['title'] = $seo['title'] != '' ? $seo['title'] : $detail->name;
           $seo['description'] = $seo['description'] != '' ? $seo['description'] : $detail->name;
           $seo['keywords'] = $seo['keywords'] != '' ? $seo['keywords'] : $detail->name;
        }else{
            $seo['title'] = $seo['description'] = $seo['keywords'] = $detail->name;
        }        
        return view('frontend.projects.detail', compact('seo', 'socialImage', 'detail', 'tabList', 'tabArr', 'detailTab', 'project_id', 'tab_id', 'tabSelected'));
    }

}

