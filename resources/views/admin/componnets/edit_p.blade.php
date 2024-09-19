@component('admin.master')

<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">ویرایش کاربر</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('admin_PRODUCT.update', ['admin_PRODUCT'=>$cat->id])}}" enctype="multipart/form-data" method="post">
                @method('PATCH')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید"  value="{{$cat->name}}">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">قیمت</label>
                  <div class="col-sm-10">
                      <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="قیمت را وارد کنید" value="{{$cat->price}}">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>

                    <div class="col-sm-10">
                        <textarea name="discription"  class="form-control" placeholder="توضیحات را وارد کنید" id="discription" cols="30" rows="10"  >{{$cat->discription}}</textarea>
                      <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نقد و بررسی</label>

                    <div class="col-sm-10">
                        <textarea name="Criticism"  class="form-control" placeholder="نقد را وارد کنید" id="discription" cols="30" rows="10"  >{{$cat->Criticism}}</textarea>
                      <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ستاره ها</label>

                    <div class="col-sm-10">
                      <input type="number" max="5" min="0" name="stars" class="form-control" id="inputEmail3" placeholder="ستاره را وارد کنید" value="{{$cat->stars}}">
                    </div>
                </div>



                      <!-- <input type="file" name="cfc" class="form-control" > -->


                  </div>
                  <!-- <div class="form-group col-sm-10">
                    <textarea id="my-editor" name="image" class="form-control">{!! old('content', '') !!}</textarea>
                    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                    <script>
                    var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                    };
                    CKEDITOR.replace('my-editor', options);
                    </script></div> -->
<!--

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">تصویر شاخص</label>
                  <div class="col-sm-7">
                  <img class="form-control" id="imageadmin" src="{{$cat->image}}" alt="{{$cat->image}}">
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">طول</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="with" class="form-control" id="inputEmail3" placeholder="طول را وارد کنید" value="{{$cat->with}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی</label>
                    <div class="col-sm-10">
                    <select  class="form-control" name="categories[]" id="categories" multiple>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                        @endforeach

                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عرض</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="length" class="form-control" id="inputEmail3" placeholder="عرض را وارد کنید" value="{{$cat->length}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">تخفیف</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="discust" class="form-control" id="inputEmail3" placeholder="تخفیف را وارد کنید" value="{{$cat->discust}}">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">

                          <label class="form-check-label" for="exampleCheck2">گارانتی </label>
                        <select name="garant" id="input" class="form-control col-md-5" required="required">
                            <option   value="بدون گارانتی"  >   بدون گارانتی</option>
                            <option  value="6 ماهه گارانتی">  6 ماهه</option>
                            <option  value="12 ماهه گارانتی">  یک ساله</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                  <div class="form-check">


                      <input  name="Chosen" type="checkbox"
                      @if ($cat->Chosen)
                        checked
                      @endif
                      id="exampleCheck2" >
                      <label   class="form-check-label" for="exampleCheck2">  فروش ویژه یا منتخب </label>

                  </div>

                  </div></div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ویرایش</button>
                  <a href="{{route('admin_PRODUCT.index')}}" class="btn btn-default float-left">لغو<a/>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
