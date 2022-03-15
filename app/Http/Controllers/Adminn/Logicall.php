<?php

namespace App\Http\Controllers\Adminn;

use App\Models\Content;
use App\Models\Imgcontent;
use App\Models\User;
use App\Models\Contactus;
use App\Models\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class Logicall extends Controller
{

    public function headerhome(){
        $post=Imgcontent::select('id','img','pargraph1')->where('section_id', 1)->get();
        $dataa=Content::select('id','pargraph1','pargraph2','pargraph3','pargraph4')->where('section', 2)->get();
        $service =Imgcontent::select('id','img', 'pargraph1', 'pargraph2')->where('section_id', 3)->where('id','=',9)->get();
        $service1 =Imgcontent::select('id','img', 'pargraph1', 'pargraph2')->where('section_id', 3)->where('id','=',10)->get();
        $service2 =Imgcontent::select('id','img', 'pargraph1', 'pargraph2')->where('section_id', 3)->where('id','=',11)->get();
        $project=Imgcontent::select('id','img', 'pargraph1', 'pargraph2')->where('section_id', 4)->get();
        $categories=Imgcontent::select('id','img', 'pargraph1')->where('section_id', 5)->get();
        $project1=Imgcontent::select('img')->where('section_id', 6)->get();
        $project2=Imgcontent::select('img')->where('section_id', 7)->get();
        $project3=Imgcontent::select('img')->where('section_id', 8)->get();
        $project4=Imgcontent::select('img')->where('section_id', 9)->get();
        $project5=Imgcontent::select('img')->where('section_id', 10)->get();




        $footer=Footer::select('logo','facebook','instgram','twitter','phonenumber')->get();

        return view('front.home',compact('post','dataa','service', 'service1' , 'service2','project','categories','footer','project1','project2','project3','project4','project5'));
    }
    public function headerShow()
    {
        
        $post = Imgcontent::select('id', 'section_id', 'img','updated_at')->where('section_id', 1)->get();
        return view('admin.headerchange', compact('post'));
    }
    public function headerEdit($id)
    {
        $data=Imgcontent::find($id);
        return view('admin.editformH', compact('data'));
    }
    public function headerUpdate(Request $re, $id)
    {

        $rule = [
            'img' => ['required'],
        ];

        $messages = [
            'img.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        } 

        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;
            $data->save();


        }

        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }
    // ------------------------------------------------------------
    public function aboutshow()
    {
        
        $post =content::select('id','section', 'pargraph1','updated_at')->where('section', 2)->get();

        return view('admin.aboutusshow', compact('post'));
    }
    public function aboutEdit($id)
    {
        $data = content::find($id)->where('section', 2)->first();
        return view('admin.aboutusEdit1', compact('data'));

    }
    public function aboutUpdate(Request $re, $id)
    {

        $rule = [
            'pargraph1' => ['required'],
            

        ];

        $messages = [
            'pargraph1.required' => 'هذا الحقل مطلوب',
            
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  

        $data=content::find($id);
        $data->pargraph1 =$re->pargraph1;

        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }


    public function aboutshow2()
    {
        
        $post =content::select('id','pargraph2', 'pargraph3', 'pargraph4','updated_at')->where('section', 2)->get();

        return view('admin.aboutusshow2', compact('post'));
    }
    public function aboutEdit2($id)
    {
        $data = content::find($id)->where('section', 2)->first();
        return view('admin.aboutusEdit2', compact('data'));

    }
    public function aboutUpdate2(Request $re, $id)
    {

        $rule = [
            'pargraph2' => ['required'],
            'pargraph3' => ['required'],
            'pargraph4' => ['required'],
            

        ];

        $messages = [
            'pargraph2.required' => 'هذا الحقل مطلوب',
            'pargraph3.required' => 'هذا الحقل مطلوب',
            'pargraph4.required' => 'هذا الحقل مطلوب',
            
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  

        $data=content::find($id);
        $data->pargraph2 =$re->pargraph2;
        $data->pargraph3 =$re->pargraph3;
        $data->pargraph4 =$re->pargraph4;


        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }
    public function serviveshow1()
    {
        

        $post =Imgcontent::select('id','img', 'pargraph1', 'pargraph2','updated_at')->where('section_id', 3)->get();

        
        return view('admin.serviceshow', compact('post'));
    }
    public function serviceEdit($id)
    {
        
        $data = Imgcontent::find($id);
        return view('admin.serviceEditForm', compact('data'));

    }
    public function serviceupdate(Request $re, $id)
    {

        $rule = [
            'pargraph1' => ['required'],
            'pargraph2' => ['required'],


        ];

        $messages = [
            'pargraph1.required' => 'هذا الحقل مطلوب',
            'pargraph2.required' => 'هذا الحقل مطلوب',
            'pargraph3.required' => 'هذا الحقل مطلوب',


        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  

       if ($re -> hasFile('img1'))
        {
            $file =$re->file('img1');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;
            $data->pargraph1=$re->pargraph1;
            $data->pargraph2=$re->pargraph2;
            $data->save();

        }
    
        $data=Imgcontent::find($id);
        $data->pargraph1=$re->pargraph1;
        $data->pargraph2=$re->pargraph2;
        
        
                $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }

    public function getLogin(){
        return view('admin.adminlogin');
    }
    public function postLogin(Request $request){

        $id=18;
        $pass=User::find($id);
        $pass2=$request->input('password');
        

        $rules= [
            'name' => ['required','max:50', 'email'],
            'password' => ['required', Password::min(10)->letters()->mixedCase()->numbers()->symbols()]

        ];
        $message=[
            'name.required'=> 'البريد الالكتروني مطلوب',
            'password.required' => 'كلمة السر مطلوبة',
            'password.min' =>'يجب ان تحتوي كلمة السر علي 10 أحروف علي الاقل وتشمل :حروف ,أرقام ,رموز',
            'password.min' => 'يجب أن تحتوي كلمة السر علي أحروف كبير وأحرف صغيرة',
            'password.numbers' => 'يجب أن تحتوي علي أرقام',
            'password.symbols' => 'يجب أن تحتوي علي رموز ',
        ];  
        $user = User::where('name', '=', $request->input('name'))->first();
        if ( $user)
        { 
             if ((Hash::check($pass2,$pass->password)))
             {

                return redirect('/adminpanal');

            }
             
            else{
                $validator= Validator::make( $request -> all(),$rules,$message);
                if ($validator -> fails()){
                    return redirect()->back()->withErrors($validator)->withInputs( $request -> all());
                }
                else{

                    return redirect()->back()->with(['success' => ' كلمة المرور غير صحيحة']);

                }


            }
            
        }
        else{

            
        $validator= Validator::make( $request -> all(),$rules,$message);
        if ($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs( $request -> all());
        }
        else{
            return redirect()->back()->with(['success' => ' البريد الالكتروني  غير صحيحة']);


        }


        }

        $User = User::create([
            'name' => $request -> name,
            'password' => hash::make($request -> password),

        ]);



    }
    public function Logout(){
        return view('admin.adminlogin');
        // return redirect('/');
    }
    public function contactinfo(Request $req){
        $rule= [
            'name' => ['required'],
            'phone' => ['required','numeric'],
            'email' => ['required','unique:contactus,email'],
            'text' =>['required'],

        ];

        $messages=[
            'name.required'=> 'الرجاء ادخال الاسم الاول',
            'phone.required'=> ' رقم الهاتف مطلوب للتواصل',
            'phone.numeric'=> ' رقم الهاتف يجب ان يكون أرقام',
            'email.unique'=> 'البريد الالكتروني موجود بالفعل سيتم التواصل معكم في اقرب وقت',
            'email.required'=> 'البريد الالكتروني مطلوب',
            'text.requied'=>'يجب كتابة رسالتك',
        ];
        $validator= Validator::make( $req -> all(),$rule,$messages);
        if ($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs( $req -> all());
        }


        $User = Contactus::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'phonenumber'=>$req->phone,
            'message'=>$req->text,

        ]);
        return redirect()->back()->with(['success' => ' سيتم التواصل معكم للرد علي استفسارتكم']);

    }

    public function getcontactinfo(){
        $data=Contactus::all();
        return view('admin.admincontact',compact('data'));
    }
    public function deleterecord($email)
    {
        $post =Contactus::where('email',$email)->first();

    if ($post != null) {
        $post->delete();
        return redirect()->back()->with(['succ'=> 'تم الحذف بنجاح']);
    }

    return redirect()->back()->with(['fail'=> 'هذا الحقل غير موجود بالفعل']);



    }


    public function socialmediaShow(){
        $data=footer::select('id','logo','facebook','instgram','twitter','phonenumber')->get();
        return view('admin.scoialmediashow',compact('data'));

    }

    public function socialmediarEdit($id){
        $data=footer::find($id);
        return view('admin.socialmediaEdit-editform' ,compact('data'));

    }

    public function socialmediaUpdate(Request $re,$id){
        $rule= [
            'facebook' => ['required','url'],
            'instgram' => ['required','url'],
            'twitter' => ['required','url'],
            'phonenumber' =>['digits:12']
        ];

        $messages=[
            'facebook.required'=> 'الحقل مطلوب',
            'instgram.required'=> 'الحقل مطلوب',
            'twitter.required'=> 'الحقل مطلوب',


            'facebook.url'=> 'يجب أن يكون رابط',
            'instgram.url'=> 'يجب أن يكون رابط',
            'twitter.url'=> 'يجب أن يكون رابط',
            'phonenumber.digits'=>'يجب أن يكون عدد الارقام 12 رقم'
            
        ];
        $validator= Validator::make( $re -> all(),$rule,$messages);
        if ($validator -> fails()){
            return redirect()->back()->withErrors($validator)->withInputs( $re -> all());
        }  
        if ($re->hasFile('img'))
        {
            $file =$re->file('img');
            $text =time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=footer::find($id);
            $data->logo =$text;
            $data->facebook = $re->facebook;
            $data->instgram = $re->instgram;
            $data->twitter = $re->twitter;
            $data->phonenumber = $re->phonenumber;

            

            
                        
        }
        else{
            $data=footer::find($id);
            $data->facebook = $re->facebook;
            $data->instgram = $re->instgram;
            $data->twitter = $re->twitter;
            $data->phonenumber = $re->phonenumber;

        }

        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }


    public function projectsshow()
    {
        

        $post =Imgcontent::select('id','img', 'pargraph1', 'pargraph2','updated_at')->where('section_id', 4)->get();

        
        return view('admin.projectshow', compact('post'));
    }


    public function projectEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.projectEdit-form' ,compact('data'));

    }


    public function projectUpdate(Request $re, $id)
    {

        $rule = [
            'pargraph1' => ['required'],
            'pargraph2' => ['required'],


        ];

        $messages = [
            'pargraph1.required' => 'هذا الحقل مطلوب',
            'pargraph2.required' => 'هذا الحقل مطلوب',
            'pargraph3.required' => 'هذا الحقل مطلوب',


        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  

        
        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;
            $data->pargraph1 =$re->pargraph1;
            $data->pargraph2=$re->pargraph2;

        }
        else{
            $data=Imgcontent::find($id);
            $data->pargraph1 =$re->pargraph1;
            $data->pargraph2=$re->pargraph2;
        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }

    public function categoriesshow()
    {
        
        $post =Imgcontent::select('id','img','updated_at')->where('section_id', 5)->get();      
        return view('admin.categoriesshow', compact('post'));
    }

    public function categoriesEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.categoriesEdit-form' ,compact('data'));

    }


    public function categoriesUpdate(Request $re, $id)
    {

        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;
           

        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }



    //project1 show

    public function projectoneshow()
    {
        $post=Imgcontent::select('id','img','updated_at')->where('section_id', 6)->get();      
        return view('admin.projectoneshow', compact('post'));
    }


    public function projectoneEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.projectoneEdit-form',compact('data'));

    }


    public function projectonUpdate(Request $re, $id)
    {

        $rule = [
            'img' => ['required'],


        ];

        $messages = [
            'img.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  
        
        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;

        }
        else{
            return redirect()->back()->with(['fail'=> 'الصورة ليست متوفرة ']);
        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }


    //project2


    
    public function projecttwoshow()
    {
        $post=Imgcontent::select('id','img','updated_at')->where('section_id', 7)->get();      
        return view('admin.projecttwoshow', compact('post'));
    }


    public function projecttwoEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.projecttwoEdit-form',compact('data'));

    }


    public function projecttwoUpdate(Request $re, $id)
    {

        $rule = [
            'img' => ['required'],


        ];

        $messages = [
            'img.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  
        
        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;

        }
        else{
            return redirect()->back()->with(['fail'=> 'الصورة ليست متوفرة ']);
        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }


    //--------------------------------------------------Project 3-4

    
    public function projecthreeshow()
    {
        $post=Imgcontent::select('id','img','updated_at')->where('section_id', 8)->get();      
        return view('admin.projectthreeshow', compact('post'));
    }


    public function projecthreeEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.projectthreeEdit-form',compact('data'));

    }


    public function projecthreeUpdate(Request $re, $id)
    {

        $rule = [
            'img' => ['required'],


        ];

        $messages = [
            'img.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  
        
        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;

        }
        else{
            return redirect()->back()->with(['fail'=> 'الصورة ليست متوفرة ']);
        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }


    //------------------------------ project4
    
    public function projectfourshow()
    {
        $post=Imgcontent::select('id','img','updated_at')->where('section_id', 9)->get();      
        return view('admin.projectfourshow', compact('post'));
    }


    public function projectfourEdit($id){
        $data=Imgcontent::find($id);
        return view('admin.projectfourEdit-form',compact('data'));

    }


    public function projectfourUpdate(Request $re, $id)
    {

        $rule = [
            'img' => ['required'],


        ];

        $messages = [
            'img.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  
        
        if ($re -> hasFile('img'))
       {
            $file =$re->file('img');
            $text = time().".".$file->clientExtension();
            $file ->storeAs('public',$text);
            $data=Imgcontent::find($id);
            $data->img=$text;

        }
        else{
            return redirect()->back()->with(['fail'=> 'الصورة ليست متوفرة ']);
        }
        $data->save();
        return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
    }

     //------------------------------ project5
    
     public function projectfiveshow()
     {
         $post=Imgcontent::select('id','img','updated_at')->where('section_id', 10)->get();      
         return view('admin.projectfivehow', compact('post'));
     }
 
 
     public function projectfiveEdit($id){
         $data=Imgcontent::find($id);
         return view('admin.projectfiveEdit-form',compact('data'));
 
     }
 
 
     public function projectfiveUpdate(Request $re, $id)
     {
 
         $rule = [
             'img' => ['required'],
 
 
         ];
 
         $messages = [
             'img.required' => 'هذا الحقل مطلوب',
         ];
         $validator = Validator::make($re->all(), $rule, $messages);
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInputs($re->all());
         }  
         
         if ($re -> hasFile('img'))
        {
             $file =$re->file('img');
             $text = time().".".$file->clientExtension();
             $file ->storeAs('public',$text);
             $data=Imgcontent::find($id);
             $data->img=$text;
 
         }
         else{
             return redirect()->back()->with(['fail'=> 'الصورة ليست متوفرة ']);
         }
         $data->save();
         return redirect()->back()->with(['succ'=> 'تم التعديل بنجاح']);
     }
     
     
      public function changepass(){


        return view('admin.changepass');

  }
  
  
  public function changePasswordPost(Request $re) {


        $rule = [
            'currentpassword' => ['required'],
            'newpassword' => ['required',Password::min(10)->letters()->mixedCase()->numbers()->symbols()],
            'newpasswordconfirmation' => ['required'],
        ];

        $messages = [
            'currentpassword.required' => 'هذا الحقل مطلوب',
            'newpassword.required' => 'هذا الحقل مطلوب',
            'newpassword.confirmed' => ' يجب أن تحتوي كلمة المرور الخاصة بك علي 8 أحروف علي الاقل وتشمل : حروف ,أرقام ,رموز',
            'newpasswordconfirmation.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($re->all(), $rule, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($re->all());
        }  

        $oldpass=Hash::make('Ad123456789?');
        $id=18;
        $user=User::find($id);
        // $oldpass2= $user->password;
        $currentpass=$re->currentpassword;
        $newpass=$re->newpassword;
        $confpass=$re->newpasswordconfirmation;

        if (!(Hash::check($currentpass,$user->password))) {
            return redirect()->back()->with("error","كلمة المرور الحالية ليست متطايفة");
        }
        if($currentpass == $newpass)
        {
            return redirect()->back()->with("error","كلمة المرور الجديدة يجب أن تكون مختلفة");
        }
       
        if ($newpass == $confpass)
        {  
            $id=18;
             $user = User::find($id);
            $user->password =hash::make($newpass);;
            $user->save();
            return redirect()->back()->with("success","لقد تم تغير كلمة المرور بنجاح");
        }
        else
        {
            return redirect()->back()->with("error","كلمة المرور ليست صحيحة");
        }

      

        // else
        // {
        //     if($currentpass == $newpass)
        //     {
        //         return redirect()->back()->with("error","كلمة المرور الجديدة يجب أن تكون مختلفة");

        //     }
           

        // }

        // if(strcmp($re->get('currentpassword'), $re->get('newpassword')) == 0){
        //     // Current password and new password same
        //     return redirect()->back()->with("error","كلمة المرور الجديدة يجب أن تكون مختلفة");
        // }
        // if(!($newpass == $confpass))
        // {
        //     return redirect()->back()->with("error","كلمة المرور ليست صحيحة");

        // }

        // $id=17;
        // $user = User::find('$id');
        // $user->password =hash::make($re -> newpassword);;
        // $user->save();

        // return redirect()->back()->with("success","لقد تم تغير كلمة المرور بنجاح");

    }

}

