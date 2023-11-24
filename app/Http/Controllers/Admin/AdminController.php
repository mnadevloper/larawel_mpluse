<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $commonHelper;

    public function __construct(CommonHelper $commonHelper)
    {
        $this->commonHelper = $commonHelper;
    }

    /**Need to load index page */
    public function index() {
        $user_id = !empty(Auth::user()->id) ? Auth::user()->id : '';
        $user_kyc = $this->commonHelper->getFirstData('user_kycs','id,business_name,approval_status,admin_kyc_onboarding',['where' => ['user_id' =>$user_id]]);
        return view('index', compact('user_kyc'));
    }

    //   $this->commonHelper->pr($user_lists);
    /**Need to get userlist  */
    public function loadUserList() {
        $user_lists = $this->commonHelper->getDataPaginated('users', '*', ['where'=> ['role'=> 2], 'limit' => 10]);
        return view('admin.User_list', compact('user_lists'));
    }

    /**Need to load admin login view */
    public function loadAdminLoginView() {
        return view('page-login');
    }

    /**Need to get ip master data */
    public function getIPMaster() {
        return view('ip_Master');
    }

    /**Need to manage services */
    public function manageServices() {
        return view('Manage_Service');
    }

    /**Need to get payouts */
    public function getPayout() {
        return view('payout1');
    }

    /**Need to get upi payouts */
    public function getUPIPayout() {
        return view('Upi_payout');
    }

    /**Need to get dmt payout report */
    public function getDMTReport() {
        return view('Dmt');
    }

    /**Need to get ledger report */
    public function getLedger() {
        return view('lager');
    }

    /**Need to get invoice data*/
    public function getInvoice() {
        return view('invoice');
    }

     /**need to get api key */
     public function getApiKey() {
        return view('api_key');
    }

    /**Need to update user status */
    public function updateUserStatus(Request $request) {

        $userid = !empty($request->userid) ? $request->userid : '';
        $get_user = $this->commonHelper->getFirstData('users', '*', ['where' => ['id' => $userid]]);
        if (!empty($get_user)) {
           $status = isset($request->status) ? $request->status : '';
           $update_status = '';
           $update_status = $this->commonHelper->updateData('users',['status'=>$status],'id',$userid);
           if ($update_status) {
              return response()->json(['status' => 'Status_Updated']);
           } else {
              return response()->json(['status' => 'Error']);
           }
        } else {
           return response()->json(['status' => 'Not_Found']);
        }
    }

    public function removeUser(Request $request) {

        $userid = !empty($request->id) ? $request->id : '';
        $delete_user = $this->commonHelper->getFirstData('users', '*', ['where' => ['id' => $userid]]);
        if (!empty($delete_user)) {
            $del_row = '';
            $del_row = $this->commonHelper->deleteWhere('users',['id' => $userid]);
            if ($del_row) {
                return response()->json(['success' => 'Record deleted successfully.']);
            } else {
                return response()->json(['failed' => 'something went wrong ! please after sometimes']);
            }
        } else {
            return response()->json(['Not_Found' => 'User not found']);
        }
    }

    public function editUser($id) {
        $get_user = $this->commonHelper->getFirstData('users', '*', ['where' => ['id' => $id]]);
        if(!empty($get_user)) {
            return view('admin.edit_user',compact('get_user'));
        } else {
            return redirect()->back()->with('info', 'User not found');
        }
    }

    public function updateUser(Request $request, $id) {

        $request->validate([
            'username' => 'required|regex:/^[A-Za-z\s]+$/',
            'mobile' => 'required|digits:10|integer',
            'email' => 'required|email',
        ]);
        $get_user = $this->commonHelper->getFirstData('users', '*', ['where' => ['id' => $id]]);

        try {

        if(!empty($get_user)) {

            $updation_arr = [
                'name' => $request->username,
                'email' => $request->email,
                'mobile' => $request->mobile,
            ];
            $get_user = $this->commonHelper->updateData('users',$updation_arr,'id',$id);

            if($get_user) {
                return redirect()->route('auth.userlist')->with('success', 'User update successfully');
            } else {
                return redirect()->back()->with('error', 'Something wrong, please try after sometime.');
            }
        } else {
            return redirect()->route('auth.userlist')->with('info', 'User not found');
        }
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function getUserKyc($user_id) {

        $kyc_data = $this->commonHelper->joinTwoTable(
            'user_kycs',
            'users',
            'users.name as username, user_kycs.*',
            'user_kycs.user_id', // Corrected join condition
            'users.id',           // Corrected join condition
            'inner',
            ['where' => ['user_kycs.user_id' => $user_id]]
        );
        $get_userkyc = !empty($kyc_data[0]) ? $kyc_data[0] : '';
       return view('admin.user_kyc', compact('get_userkyc'));
    }

    /**Need to update user kyc status via admin */
    public function updateKycStatus(Request $request) {

        $kyc_id = !empty($request->kyc_id) ? $request->kyc_id : '';
        $get_kyc = $this->commonHelper->getFirstData('user_kycs', '*', ['where' => ['id' => $kyc_id]]);
        if (!empty($get_kyc)) {
           $status = isset($request->status) ? $request->status : '';
           $update_status = '';
           $update_status = $this->commonHelper->updateData('user_kycs',['approval_status' => $status],'id',$kyc_id);
           if ($update_status) {
              return response()->json(['status' => 'Status_Updated']);
           } else {
              return response()->json(['status' => 'Error']);
           }
        } else {
           return response()->json(['status' => 'Not_Found']);
        }
    }
}
