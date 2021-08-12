<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = Config::orderByDesc('config_id')->paginate();
        return view('admin.config.ListConfig',  compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $config = Config::findOrFail($id);
        return view('admin.config.EditConfig', compact('config'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $config = Config::findOrFail($id);
        $config->config_contact = $request->config_contact;
        $config->config_phone = $request->config_phone;
        $config->config_address = $request->config_address;
        $config->config_url_fb = $request->config_url_fb;

//        $fileLogo = $request->inputFileLogo;
//        $config_old_logo = $config->config_logo;
//        if ($request->hasFile('inputFileLogo')) {
//            $imageLogo = $config->config_logo;
//            if ($imageLogo)
//            {
//                Storage::delete('/public/storage/images/' . $imageLogo);
//            }
//            $fileNameLogo = $fileLogo->getClientOriginalName();
//            $newFileNameLogo = date('d-m-Y-H-i') . "_$fileNameLogo";
//            $request->file('inputFileLogo')->storeAs('public/storage/images', $newFileNameLogo);
//            $config->config_logo = $newFileNameLogo;
//        }
//        else
//        {
//            $config->config_logo = $config_old_logo;
//        }
        $config_old_logo = $config->config_logo;
        $config->config_logo = $config_old_logo;

        $fileBanner = $request->inputFileBanner;
        $config_old_banner = $config->config_banner;
        if ($request->hasFile('inputFileBanner')) {
            $imageBanner = $config->config_banner;
            if ($imageBanner)
            {
                //unlink(storage_path('../public/storage/images/'.$imageBanner));
            }
            $fileNameBanner = $fileBanner->getClientOriginalName();
            $newFileNameBanner = date('d-m-Y-H-i') . "_$fileNameBanner";
            $request->file('inputFileBanner')->storeAs('public/storage/images', $newFileNameBanner);
            $config->config_banner = $newFileNameBanner;
        }
        else
        {
            $config->config_banner = $config_old_banner;
        }
        $config->save();
        return redirect()->route('config.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
