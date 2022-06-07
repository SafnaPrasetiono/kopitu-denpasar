<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\categories_sub;
use App\Models\District;
use App\Models\members;
use App\Models\members_address;
use App\Models\members_categories;
use App\Models\members_documents;
use App\Models\members_permission;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class memberController extends Controller
{
    public function member()
    {
        return view('pages.members.index');
    }
    public function register()
    {
        return view('pages.members.register');
    }
    public function store(Request $request)
    {
        // dd($request->ud);
        // dd($request);

        $validate = Validator::make($request->all(), [
            'username'      => 'required',
            'email'         => 'required',
            'born'          => 'required',
            'gender'        => 'required',
            'phone'         => 'required',
            'photos'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'province_id'   => 'required',
            'city_id'       => 'required',
            'district_id'   => 'required',
            'village_id'    => 'required',
            'postal_code'   => 'required',
            'country'       => 'required',
            'address'       => 'required',

            'categories_id'      => 'required',
            'categories_subs_id' => 'required',
            'description'        => 'required',
            'class'              => 'required',

            'nik'   => 'required',
            'ktp'   => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        } else {
            $provinces = Province::find($request->province_id);
            $cities = Regency::find($request->city_id);
            $districts = District::find($request->district_id);
            $villages = Village::find($request->village_id);
            $categories = categories::find($request->categories_id);
            $categories_sub = categories_sub::find($request->categories_subs_id);

            try {
                $members = new members();
                $members->username = $request->username;
                $members->email = $request->email;
                $members->born = $request->born;
                $members->gender = $request->gender;
                $members->phone = $request->phone;
                $members->class = $request->class;
                $members->description = $request->description;
                $members->validate = 0;
                $members->save();
                
                $image = $request->photos;
                $nameImg = "IMG-". $members->id_members . date('YmdHis') . "." .  $image->getClientOriginalExtension();
                $updatePhotos = members::find($members->id_members);
                $updatePhotos->avatar = $nameImg;
                $updatePhotos->save();
                $image->move(public_path() . "/images/members/avatar/", $nameImg);
    
                $address = new members_address();
                $address->country = $request->country;
                $address->province = $provinces->name;
                $address->city = $cities->name;
                $address->district = $districts->name;
                $address->village = $villages->name;
                $address->postal_code = $request->postal_code;
                $address->address = $request->address;
                $address->members_id = $members->id_members;
                $address->id_province = $provinces->id;
                $address->id_regency = $cities->id;
                $address->id_district = $districts->id;
                $address->id_village = $villages->id;
                $address->save();
    
                $date_images = date('YmdHis');
                $imageKtp = $request->ktp;
                $nameKtp = "KTP-" . $members->id_members . $date_images . "." .  $imageKtp->getClientOriginalExtension();
    
                $document = new members_documents();
                $document->nik = $request->nik;
                $document->ktp = $nameKtp;
                $document->members_id = $members->id_members;
                $document->save();
                $imageKtp->move(public_path() . "/images/members/ktp/", $nameKtp);
    
                $ctg = new members_categories();
                $ctg->categories = $categories->categories;
                $ctg->categories_subs = $categories_sub->categories_subs;
                $ctg->categories_id = $categories->id_categories;
                $ctg->categories_subs_id = $categories_sub->id_categories_subs;
                $ctg->members_id = $members->id_members;
                $ctg->save();
    
                $permission = new members_permission();
                $permission->ud = $request->ud;
                $permission->siup = $request->siup;
                $permission->halal = $request->halal;
                $permission->bpom = $request->bpom;
                $permission->pirt = $request->pirt;
                $permission->nib = $request->nib;
                $permission->sku = $request->sku;
                $permission->izin = $request->izin;
                $permission->members_id = $members->id_members;
                $permission->save();
                return redirect()->route('member.register')->with('success', 'Pendaftaran kamu berhasil tunggu validasi dari pihak kami.');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->route('member.register')->with('error', 'Oops, maaf database desang sibuk, ulangi nanti!');
            }
        }
    }
}
