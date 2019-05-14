<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\GroupCompany;

class GroupCompanyController extends Controller
{
    /**
     * ? return View index
     */

     public function index(){

        $companies  = GroupCompany::get();

        return view('admin.companies.index', ['companies'=>$companies]);
     }

    /**
     * ?return view Form  Edit Or Create
     */
    public function form(Request $req){

        $action = $req->action;

        if($action === 'edit'){
            $id      = $req->id;
            $company = GroupCompany::findOrFail($id);
        }

        $dataCompany = isset($company) ? ['company'=>$company] : [];
        $dataView    = isset($company) ? ['action'=>'Edit']    : ['action'=>'Create'];
        
        return view('admin.companies.form',$dataCompany,$dataView);
    } 

    /**
     * ? Store data to Db
     */

     public function store(Request $req, $id=null){

        $req->validate([
            'company_name'   => 'required',
            'web_url'        => 'required',
            'logo'           => 'required'
        ]);

        $company = New GroupCompany;

        if($id != null){
            
            $company = GroupCompany::findOrFail($id);
        }

        $company->name          = $req->company_name;
        $company->website_url   = $req->web_url;
        $company->logo          = $req->logo;


        if($company->save()){

            return redirect('icw_admin/group_companies')->with('status','Sukses');
        }
      
     }

    public function destroy(Request $req){

        $id = $req->id;
        
        $company = GroupCompany::findOrFail($id);
        $company->delete();

        return redirect('icw_admin/group_companies')->with('status','Company Has been Deleted');
    }

}
