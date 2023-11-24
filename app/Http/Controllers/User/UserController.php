<?php

namespace App\Http\Controllers\User;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class UserController extends Controller
{

    protected $commonHelper;

    public function __construct(CommonHelper $commonHelper)
    {
        $this->commonHelper = $commonHelper;
    }
    public function loadKycForm()
    {
        $states = $this->commonHelper->getData('states', 'id,state_title');
        // return view('user.kyc_form', compact('states'));
        return view('user.kyc_form1', compact('states'));
    }

    public function createKyc(Request $request)
    {

        // $request->validate([
        //     'business_name' => 'required|regex:/^[A-Za-z\s]+$/',
        //     'mobile' => 'required|digits:10|integer',
        //     'email' => 'required|email',
        //     'business_type' => 'required',
        //     'business_entity' => 'required',
        //     'business_category' => 'required',
        //     'gstin_no' => 'required',
        //     'business_desc' => 'required',
        //     'udyog_aadhar' => 'required',
        //     'shop_no' => 'required',
        //     'website_url' => 'required|url',
        //     'street_no' => 'required',
        //     'pincode' => 'required|integer',
        //     'states' => 'required',
        //     'district' => 'required',
        //     'city' => 'required',
        //     'pan_img' => 'required|mimes:jpeg,png,jpg|max:4096',
        //     'certification_incorporation' => 'required|mimes:pdf|max:4096',
        //     'gst_reg_img' => 'required',
        //     'director_name' => 'required',
        //     'authority_mobile' => 'required',
        //     'authority_email' => 'required',
        //     'partner_pan' => 'required|mimes:jpeg,png,jpg|max:4096',
        //     'address_proof' => 'required|mimes:jpeg,png,jpg|max:4096',
        //     // 'other_business_cat' => 'sometimes|required',
        //     // 'address_proof_front' => 'sometimes|required|mimes:jpeg,png,jpg|max:4096',
        //     // 'address_proof_back' => 'sometimes|required|mimes:jpeg,png,jpg|max:4096',
        // ]);

        try {

            if ($request->hasFile('pan_img')) {
                $pan_new_image = $request->file('pan_img');
                $orgextension = $pan_new_image->getClientOriginalExtension();
                // $pan_filename = time() . '.' . $orgextension;
                  // $pan_filename = 'pan_' . uniqid() . '.' . $orgextension;
                $pan_filename = 'pan_' . time() . '.' . $orgextension;
                $pan_img = 'verification_documents/' . $pan_filename;
            }
            if ($request->hasFile('certification_incorporation')) {
                $incorporation_new_pdf = $request->file('certification_incorporation');
                $orgextension = $incorporation_new_pdf->getClientOriginalExtension();
                $incorporation_filename = 'incorp_' . time() . '.' . $orgextension;
                $incorp_certificate_pdf = 'verification_documents/' . $incorporation_filename;
            }


            if ($request->hasFile('gst_reg_img')) {
                $get_reg_new_img = $request->file('gst_reg_img');
                $orgextension = $get_reg_new_img->getClientOriginalExtension();
                $gst_filename = 'gst_' . time() . '.' . $orgextension;
                $gst_reg_img = 'verification_documents/' . $gst_filename;
            }

            if ($request->hasFile('partner_pan')) {
                $partner_pan_new_img = $request->file('partner_pan');
                $orgextension = $partner_pan_new_img->getClientOriginalExtension();
                $partner_pan_filename = 'ppan_' . time() . '.' . $orgextension;
                $partner_pan_img = 'verification_documents/' . $partner_pan_filename;
            }

            if ($request->hasFile('address_proof_front')) {
                $address_proof_f_newimg = $request->file('address_proof_front');
                $orgextension = $address_proof_f_newimg->getClientOriginalExtension();
                $address_proof_f_filename = 'addrf_' . time() . '.' . $orgextension;
                $address_proof_f_img = 'verification_documents/' . $address_proof_f_filename;
            }

            if ($request->hasFile('address_proof_back')) {
                $address_proof_b_newimg = $request->file('address_proof_back');
                $orgextension = $address_proof_b_newimg->getClientOriginalExtension();
                $address_proof_b_filename =  'addrb_' . time() . '.' . $orgextension;
                $address_proof_b_img = 'verification_documents/' . $address_proof_b_filename;
            }

            $user_id = !empty(Auth::user()->id) ? Auth::user()->id : '';
            $insertArr = [
                'business_name' => !empty($request->business_name) ? $request->business_name : '',
                'business_mobile' => !empty($request->mobile) ? $request->mobile : '',
                'business_email' => !empty($request->email) ? $request->email : '',
                'business_type' => !empty($request->business_type) ? $request->business_type : '',
                'business_entity' => !empty($request->business_entity) ? $request->business_entity : '',
                'business_category' => !empty($request->business_category) ? $request->business_category : NULL,
                'gst_no' => !empty($request->gstin_no) ? $request->gstin_no : '',
                'business_desc' => !empty($request->business_desc) ? $request->business_desc : '',
                'udyog_aadhar' => !empty($request->udyog_aadhar) ? $request->udyog_aadhar : '',
                'shop_no' => !empty($request->shop_no) ? $request->shop_no : '',
                'website_url' => !empty($request->website_url) ? $request->website_url : '',
                'street_no' => !empty($request->street_no) ? $request->street_no : '',
                'pincode' => !empty($request->pincode) ? $request->pincode : '',
                'states' => !empty($request->states) ? $request->states : '',
                'district' => !empty($request->district) ? $request->district : '',
                'city' => !empty($request->city) ? $request->city : '',
                'pan_img' => !empty($pan_img) ? $pan_img : '',
                'certification_incorporation' => !empty($incorp_certificate_pdf) ? $incorp_certificate_pdf : '',
                'gst_reg_img' => !empty($gst_reg_img) ? $gst_reg_img : '',
                'director_name' => !empty($request->director_name) ? $request->director_name : '',
                'authority_mobile' => !empty($request->authority_mobile) ? $request->authority_mobile : '',
                'authority_email' => !empty($request->authority_email) ? $request->authority_email : '',
                'partner_pan' => !empty($partner_pan_img) ? $partner_pan_img : '',
                'address_proof' => !empty($request->address_proof) ? $request->address_proof : '',
                'other_business_cat' => !empty($request->other_business_cat) ? $request->other_business_cat : NULL,
                'address_proof_front' => !empty($address_proof_f_img) ? $address_proof_f_img : '',
                'address_proof_back' => !empty($address_proof_b_img) ? $address_proof_b_img : NULL,
                'approval_status' => 1,
            ];


            // $save_kyc = $this->commonHelper->insert('user_kycs', $insertArr);
            $save_kyc = $this->commonHelper->updateData('user_kycs', $insertArr,'user_id', $user_id);

            if (!empty($save_kyc)) {


                if ($request->hasFile('pan_img') && !empty($pan_filename)) {
                    $pan_new_image->move(public_path('/verification_documents'), $pan_filename);
                }
                if ($request->hasFile('certification_incorporation') && !empty($incorporation_filename)) {
                    $incorporation_new_pdf->move(public_path('/verification_documents'), $incorporation_filename);
                }
                if ($request->hasFile('gst_reg_img') && !empty($gst_filename)) {
                    $get_reg_new_img->move(public_path('/verification_documents'), $gst_filename);
                }
                if ($request->hasFile('partner_pan') && !empty($partner_pan_filename)) {
                    $partner_pan_new_img->move(public_path('/verification_documents'), $partner_pan_filename);
                }
                if ($request->hasFile('address_proof_front') && !empty($address_proof_f_filename)) {
                    $address_proof_f_newimg->move(public_path('/verification_documents'), $address_proof_f_filename);
                }
                if ($request->hasFile('address_proof_back') && !empty($address_proof_b_filename)) {
                    $address_proof_b_newimg->move(public_path('/verification_documents'), $address_proof_b_filename);
                }
                return redirect()->route('auth.index')->with('info', 'Kyc request send, please wait for admin approval !!.');
            } else {
                return redirect()->route('auth.index')->with('error', 'Something went wrong, please contact support team !!.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**Need to get  payout */
    public function getPayout()
    {
        return view('user.payouts');
    }

    public function getUpiPayout()
    {
        return view('user.Upi_payouts');
    }

    public function getLedgerReport()
    {
        return view('user.ledger_reports');
    }

    public function getInvoice()
    {
        return view('user.invoice');
    }

    public function getDistrict(Request $request)
    {

        if (!empty($request->state_id)) {
            $district = $this->commonHelper->getData('districts', 'id,name', ['where' => ['state_id' => $request->state_id]]);
            return response()->json(['status' => 'success', 'districts' => $district]);
        } else {
            return response()->json(['status' => 'failed']);
        }
    }

    public function getCity(Request $request)
    {
        if (!empty($request->district_id)) {
            $cities = $this->commonHelper->getData('cities', 'id,name', ['where' => ['districtid' => $request->district_id]]);
            return response()->json(['status' => 'success', 'cities' => $cities]);
        } else {
            return response()->json(['status' => 'failed']);
        }
    }
}
