@component('admin.master')


    <div class="row">
        <div class="col-lg-12">
        @include('admin.layaut.errors')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ثبت تصویر</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('product.gallery.store' , ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div id="father">
                     <!-- card -->
                    <div class="card-body">
                    <div class="form-group"><div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">تصویر</label>
                    <textarea id="my-editor" name="image" class="form-control">{!! old('content', '') !!}</textarea>
                    </div>
                    <br>
                    <div class="col-sm-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                    <div class="col-sm-10">
                      <input type="text" name="alt" class="form-control" id="inputEmail3" placeholder="توضیحات را وارد کنید">
                    </div>
                    </div><hr></div>
                    </div>

                    <!-- card -->
                    </div>
                        <!-- <button class="btn btn-sm btn-danger" type="button" id="add_product_image">تصویر جدید</button>
                    </div> -->
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت تصاویر</button>
                        <a href="{{ route('product.gallery.index' , ['product' => $product->id]) }}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor', options);
    </script>


@endcomponent
