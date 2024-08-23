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
              <form class="form-horizontal" action="{{route('edituser', ['id'=>$user->id])}}" method="post">
                @method('PATCH')
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام کاربر</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام کاربر را وارد کنید" value="{{$user->name}}">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">شماره تلفن</label>
                  <div class="col-sm-10">
                      <input type="text" name="phonenumber" class="form-control" id="inputEmail3" placeholder="شماره را وارد کنید" value="0{{$user->phonenumber}}">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ایمیل</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="ایمیل را وارد کنید" value="{{$user->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">پسورد</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">تکرار پسورد</label>

                    <div class="col-sm-10">
                      <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="پسورد را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">مرا به خاطر بسپار</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ویرایش</button>
                  <button type="submit" class="btn btn-default float-left">لغو</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
