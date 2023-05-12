<?php


namespace App\Http\Controllers;
use Validator;
use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;



class CustomerController extends Controller
{
    //direct create page
    public function createPage(){
        return view('Layout.create');
    }

    //create
    public function create(Request $request){
        $this->validationcheck($request,"create");
        // dd($request->all());
        // $validationRule = [
        //     'name' =>'required',
        //     'email' =>'required',
        //     'phone' =>'required|min:6|max:15|',
        //     'address'=>'required',

        // ];
        // \Validator::make($request->all(),$validationRule)->validate();
       $data = [
        'name' =>$request->name,
        'email' =>$request->email,
        'phone' =>$request->phone,
        'address' =>$request->address,
        'created_at'=> Carbon::now(),
        'updated_at'=> Carbon::now()
       ];
       Customer::create($data);
       return redirect()->route('read')->with('createSuccess',"Customer Account ဖန်တီးမှုအောင်မြင်ပါသည်");
    //    dd($data);


    }

    // Public function read(){
    //     return view('Layout.read');
    // }

    public function readPage(){
        $data = Customer::orderBy('created_at','asc')->paginate(3);
        return view('Layout.read',compact('data'));
    }

    //direct update Page
    public function updatePage($id){
        $data = Customer::where("id",$id)->first();
        // dd($data);
        return view('Layout.update',compact('data'));
    }

    //update
    public function update($id,Request $request){
        // dd($request->all());
        $this->validationcheck($request,"update");

        $data = [
            'name' =>$request->name,
            'email' =>$request->email,
            'phone' =>$request->phone,
            'address' =>$request->address,
            'updated_at' => Carbon::now()
           ];
        //    dd($data);
        Customer::where('id',$id)->update($data);
        return redirect()->route('read')->with('updateSuccess',"Customer Account ပြင်ဆင်မှုအောင်မြင်ပါသည်");


    }

    //delete
    public function delete($id){
        Customer::where('id',$id)->delete();
        return back()->with('deleteSuccess','Customer Account တစ်ခုဖျက်လိုက်ပါသည်');
    }

    //validation
    private function validationcheck($request,$format){
        if($format == "create"){
            $validationRule = [
                'name' =>'required',
                'email' =>'required',
                'phone' =>'required|min:6|max:15|unique:customers,phone',
                'address'=>'required'
            ];

        }

        if($format == "update"){
            $validationRule = [
                'name' =>'required',
                'email' =>'required',
                'phone' =>'required|min:6|max:15|unique:customers,phone,'.$request->id,
                'address'=>'required'
            ];
        }



        $validationMessage = [
            "name.required" => "nameဖြည့်ရန်လိုအပ်ပါသည်",
            "email.required" => "emailဖြည့်ရန်လိုအပ်ပါသည်",
            "phone.reuired" => "phone no ဖြည့်ရန်လိုအပ်ပါသည်",
            "phone.min" => "phone noသည် အနည်းဆုံးခြောက်လုံးရှိရပါမည်",
            "phone.max" => "phon no သည် ဆယ့်ငါးလုံးမကျော်ရပါ",
            "phone.unique" => "phone noသည် တူနေပါသည်",
            "address" => "address ဖြည့်ရန်လိုအပ်ပါသည်"
        ];
        Validator::make($request->all(),$validationRule,$validationMessage)->validate();

    }
}


