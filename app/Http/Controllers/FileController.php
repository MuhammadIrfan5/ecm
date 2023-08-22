<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\FileMeta;
use App\Models\FileType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Traits\FileUpload;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use DataTables;
use function PHPUnit\Framework\isEmpty;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = File::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Pages.File.all_files');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        $data['file_type'] = FileType::all();
        $data['policy_no'] = '';
        $data['files'] = collect([]);
        return view('Pages.File.upload_file', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'file.required' => 'File is required',
            'policy_no.required' => 'File is required',
            'file_type.required' => 'File Type is required',
        ];
        $validator = Validator::make($request->all(), [
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,tif,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip,rar',
            'file_type' => 'required|not_in:0',
            'policy_no' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            if ($request->hasFile('file')) {
                $file = FileUpload::UserFileUpload($request->file);
                $file_array = Arr::add($file, 'file_type_id', $request->file_type);
                $file_array['policy_no'] = $request->policy_no;
                $file_array['created_at'] = Carbon::now();
                $create = DB::table('files')->insert($file_array);
                if ($create) {
//                    $meta = new FileMeta();
//                    for($i=0;$i<=4;$i++){
//                        FileMeta::create([
//                            'file_id' => $create->id,
//                            'user_id' => auth()->user()->id,
//                            'meta_key' => 'file_original_name',
//                            'meta_value' => $i['file_original_name'],
//                        ]);
//                    }
                    $noti = array("message" => "File Uploded Successfully!", "alert-type" => "success");
                    return redirect()->back()->with($noti);
                } else {
                    unlink(storage_path($file_array['file_path']));
                    \File::delete($file_array['file_path']);
                    $noti = array("message" => "File not uploaded!", "alert-type" => "warning");
                    return redirect()->back()->with($noti);
                }
            }
            $noti = array("message" => "Please upload any file!", "alert-type" => "warning");
            return redirect()->back()->with($noti);
        }
    }

    public function get_policy_files(Request $request)
    {
//        dd($request->all());
        $messages = [
            'policy_no.required' => 'File is required',
        ];
        $validator = Validator::make($request->all(), [
            'policy_no' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $data = array();
            $data['file_type'] = FileType::all();
            $data['policy_no'] = $request->policy_no;
            $data['files'] = File::where('policy_no', $request->policy_no)->get();
            if ($data['files']->isNotEmpty()) {
//                dd('there');
                $noti = array("message" => "All files!", "alert-type" => "success");
                return view('Pages.File.upload_file', $data);
            } else {
//                dd($data);
                $data['noti'] = array("message" => "No files !", "alert-type" => "success");
                return view('Pages.File.upload_file', $data);
            }
        }
    }

    public function add_meta_view()
    {
        $files  = File::all();
        return view('Pages.File.add_file_meta',compact('files'));
    }

    public function add_meta(Request $request){
        $messages = [
            'file.required' => 'File is required',
            'meta_key.required' => 'Key is required',
            'meta_value.required' => 'Value is required',
        ];
        $validator = Validator::make($request->all(), [
            'file' => 'required',
            'meta_key' => 'required',
            'meta_value' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $meta =new FileMeta();
            $meta->file_id = $request->file;
            $meta->meta_key = $request->meta_key;
            $meta->meta_value = $request->meta_value;
            $meta->user_id = auth()->user()->id;
            $meta->save();
            if($meta){
                $noti = array("message" => "Meta added successfully!", "alert-type" => "success");
                return redirect()->back()->with($noti);
            }else{
                $noti = array("message" => "Something Went Wrong!", "alert-type" => "warning");
                return redirect()->back()->with($noti);
            }
        }
    }

    public function search_view(){
        $files = array();
        return view('Pages.File.search_file',compact('files'));
    }

    public function search_files(Request $request){
        $messages = [
            'search.required' => 'Search Field is required',
        ];
        $validator = Validator::make($request->all(), [
            'search' => 'required'
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
//            $file = File::with('fileMeta')->get();
//            dd($file);
            $files = FileMeta::search($request->search)->get();
            dd($files);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
