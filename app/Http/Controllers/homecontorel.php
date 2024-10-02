<?php

namespace App\Http\Controllers;

use App\Helpers\CalculatorClassFacade\CalculatorClassFacade;
use App\Helpers\Cart\Cart;
use App\Helpers\Cart\CartService;
use App\Helpers\Zand;
use App\Models\blog;
use App\Models\Product;
use App\Notifications\notificationCode;
use App\Models\activecode;
use App\Models\adresse;
use App\Models\blogcategory;
use App\Models\comment;
use App\Models\contacts;
use App\Models\permission;
use App\Models\Product as ModelsProduct;
use App\Models\productcategory;
use App\Models\User;
use Artesaos\SEOTools\Facades\SEOTools;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;













class homecontorel extends Controller
{

    public function index(Request $request){
        $this->seo()->setTitle('صفحه اصلی')
        ->setDescription('به صفحه اصلی سایت خوش آمدید')
        ->opengraph()->setTitle('صفحه اصلی')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        // Auth::loginUsingId(1);
        // Auth::logout();
        $categorys=productcategory::all()->where('parent','LIKE',0);
        $blogs =blog::orderBy('failed_at')->limit(3)->get();



        if (Gate::allows('edit')) {
            return 'Home';
        };
        $count_view=Product::orderBy('count_view')->limit(4)->get();
        $pro = Product::where('Chosen',1)->limit(4)->get();
        $Special_sale = Product::where('Special_sale',1)->limit(2)->get();
        $disusted = Product::where('discust','>',20)->limit(4)->get();
        // dd($disusted);
        return view('index',compact('pro','categorys','blogs','disusted','count_view','Special_sale'));
    }
    public function about(){
        $this->seo()->setTitle('درباره ما')
        ->setDescription('درباره ما بیشتر بدانید')
        ->opengraph()->setTitle('درباره ما')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('about');
    }

    public function blog_list(){
        $this->seo()->setTitle('آرشیو مقالات')
        ->setDescription('آرشیو مقالات مشاهده کنید')
        ->opengraph()->setTitle('آرشیو مقالات')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $blogs=blog::orderBy('failed_at')->paginate(6);
        return view('blog',compact('blogs'))->with('last_blog',Zand::ttt()[0])->with('last_products',Zand::ttt()[1]);
    }

    public function contact(){
        Auth::loginUsingId(1);
        $this->seo()->setTitle('تماس با ما')
        ->setDescription('پیشنهادات ، انتقادات و پیام های دیگر به ما بفرستید')
        ->opengraph()->setTitle('تماس با ما')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('contact');
    }


    public function contact_post(Request $request){
        $data = $request->validate([
            'name' => ['required','string'],
            'email' =>['required','email'],
            'number_phone' => ['required'],
            'subject' => ['required','string'],
            'content' => ['required','string']
        ]
        , [
            'name.required' => 'لطفاً نام خود را وارد کنید.',
            'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
            'email.email' => 'ایمیل وارد شده صحیح نیست.',
            'number_phone.required' => 'لطفاً شماره تماس خود را وارد کنید.',
            'subject.required' => 'لطفاً موضوع پیام خود را وارد کنید.',
            'content.required' => 'لطفاً محتوای پیام خود را وارد کنید.'
        ]
    );

        $con=contacts::create($data);
        Alert::success('ارسال موفیت آمیز بود','پیغام شما ارسال شد');
        return back();
    }



    public function faq(){
        $this->seo()->setTitle('سوالات متداول')
        ->setDescription('پاسخ سوالات خود را اینجا بیابید')
        ->opengraph()->setTitle('سوالات متداول')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        // return session()->get('cart');
        $this->seo()->setTitle('سوالات متداول');
        return view('faq');


    }





    public function blog_single(int $id){
        $blog=blog::find($id);
        $this->seo()->setTitle($blog->title)
        ->setDescription($blog->content)
        ->opengraph()->setTitle($blog->title)
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $view=$blog->count_view + 1 ;
        $blog->update(['count_view' => $view]);
        $comments=$blog->comment()->where('status','LIKE',true)->where('parent_id','LIKE',0)->get();

        return view('blog-post',compact('blog','comments'))->with('last_blog',Zand::ttt()[0])->with('last_products',Zand::ttt()[1]);
    }

    public function product(int $id){
        $product = Product::find($id);
        $blog=blog::find($id);
        $this->seo()->setTitle($product->name)
        ->setDescription($product->discription)
        ->opengraph()->setTitle($product->name)
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        if (is_null($product)) {
            return view('404');
        }
        $view=$product->count_view + 1 ;
        $product->update(['count_view' => $view]);
        $category = $product->category()->get()->first();
        $category=$category->products()->get();

        $comments = $product->comment()->where('status','LIKE',true)->where('parent_id','LIKE',0)->get();
        // foreach ($product->attribute()->where('name','رنگ')->get() as $attribute) {
        //     var_dump($attribute->pivot->value->value );
        // }
        //dd($product->attribute()->where('name','رنگ')->first()->pivot->value->value );

        $user =request()->user()  ;
        return view('product',compact('product','comments','category'));
    }
    public function edit_user (){
        $this->seo()->setTitle('ویرایش اطلاعات')
        ->setDescription('اینجا میتوانید اطلاعت خود را ویرایش کنید')
        ->opengraph()->setTitle('ویرایش اطلاعات')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('edit');
    }
    public function selectadresses(int $id)
    {
        $address = adresse::where('id', $id)->where('user_id', auth()->id())->first();

        if ($address) {
            $address->selectAsPrimary();

            return redirect()->back();
        }
        else {

            return redirect()->back();
        }

    }
    public function edit_user_post (Request $request , int $id ){
        $user= User::find($id);
        //dd($user);
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required' ,'max:13'],
            'meli_code' => ['required', 'max:10'],
            'image' => ['required'],
            'cart_number' => ['required',  'max:255'],
            'home_number' => ['required'  , 'max:11'],
            'email' => ['required',  'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'birthday' => ['required'],
        ], [
            'name.required' => 'لطفاً نام خود را وارد کنید.',
            'name.string' => 'نام باید یک رشته متنی باشد.',
            'name.max' => 'نام نباید بیش از ۲۵۵ کاراکتر باشد.',

            'phonenumber.required' => 'لطفاً شماره تلفن خود را وارد کنید.',
            'phonenumber.max' => 'شماره تلفن نباید بیش از 13 کاراکتر باشد.',

            'meli_code.required' => 'لطفاً کد ملی خود را وارد کنید.',
            'meli_code.max' => 'کد ملی نباید بیش از 10 کاراکتر باشد.',

            'image.required' => 'لطفاً تصویر خود را بارگذاری کنید.',

            'cart_number.required' => 'لطفاً شماره کارت بانکی خود را وارد کنید.',
            'cart_number.max' => 'شماره کارت نباید بیش از 12 کاراکتر باشد.',

            'home_number.required' => 'لطفاً شماره منزل خود را وارد کنید.',
            'home_number.max' => 'شماره منزل نباید بیش از 11 کاراکتر باشد.',

            'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
            'email.email' => 'لطفاً یک آدرس ایمیل معتبر وارد کنید.',
            'email.max' => 'ایمیل نباید بیش از ۲۵۵ کاراکتر باشد.',
            'email.unique' => 'این ایمیل قبلاً ثبت شده است.',

            'birthday.required' => 'لطفاً تاریخ تولد خود را وارد کنید.',
        ]
        );
        $f=Storage::disk('public')->putFile( 'ProfilePhoto', request()->file('image'));
        $data['image']=$f;

        // if ($data['image']) {
        //     $path = $request->file('image')->store('ProfilePhoto', 'public');
        // } else {
        //     return "File not uploaded.";
        // }
        $user->update($data);
        Alert::success('عملیات موفق آمیز بود','اطلاعات کاربری شما با موفق ویرایش شد');
        return redirect()->route('personal');
    }
    public function cart(){
        $this->seo()->setTitle('سبد خرید')
        ->setDescription('سبد خود را اینجا مشاهده کنید')
        ->opengraph()->setTitle('سبد خرید')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('cart');
    }


    public function craete_comment(Request $request){
        $data = $request->validate([
            'parent_id' => 'max:255',
            'user_id' => 'required',
            'commenttable_id' => 'required',
            'commenttable_type' => 'required',
            'content' => 'required',

        ]);
        comment::create($data);
        Alert::success('نظر شما ارسال شد','دیدگاه شما پس از تائید نمایش داده خواهد شد');
        return back();
    }




    // public function getauth2 (){
    //     return view('auth2');
    // }

    // public function postauth2(Request $request){
    //     $data = $request->validate([
    //         'phonenumber' => 'required'
    //     ]);
    //     return $data;
    // }

    // public function tokengetauth2 () {
    //     return view('tokenauth2');
    // }

    // public function activcode(){
    //     User::create([
    //         'code' => 1111 ,
    //         'expired_at'=> now()->addMinutes(10)

    //     ]);
    // }
    public function like_post (Request $request){
        $p=Product::find($request->product_id);
        $request->user()->favorite()->attach($p);
        // Alert::success('عملیات موفق آمیز بود',' محصول به علاقمندی های شما اضافه شد');
        return back();
    }

    public function dislike_post (Request $request){
        $p=Product::find($request->product_id);
        $request->user()->favorite()->detach($p);
        // Alert::success('عملیات موفق آمیز بود',' محصول از علاقمندی های شما حذف شد');
        return back();
    }


    public function download (){
            $filePath = storage_path('app\files\MyResume-314[www.cvbuilder.me].pdf');
            return response()->download($filePath ,'MyResume', [
            'Content-Type' => 'application/pdf', // نوع محتوای فایل
            'Cache-Control' => 'no-cache', // جلوگیری از کش شدن فایل
        ]);
        }


    public function blog_category(string $category){
        $this->seo()->setTitle('مقالات '.' ' .$category)
        ->setDescription($category . ' '.'مقالات دسته بندی')
        ->opengraph()->setTitle($category.' '.'مقالات')
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);

        $blogs = blogcategory::where('name',$category)->first()->blogs()->orderBy('failed_at')->paginate(4);
        // $blogs=blog::where()->orderBy('failed_at')->paginate(2);
        return view('blog',compact('blogs'))->with('last_blog',Zand::ttt()[0])->with('last_products',Zand::ttt()[1]);
    }

}
