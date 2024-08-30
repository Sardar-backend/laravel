@component('admin.master')

<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">ایجاد مقاله</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('admin_blog.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عنوان مقاله</label>
                  <div class="col-sm-10">
                      <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="عنوان مقاله را وارد کنید">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">متن مقاله</label>
                  <div class="col-sm-10">
                  <textarea name="content"  class="form-control" placeholder="متن را وارد کنید" id="discription" cols="30" rows="10"></textarea>
                  </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ایجاد مقاله</button>
                  <button type="submit" class="btn btn-default float-left">لغو</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
