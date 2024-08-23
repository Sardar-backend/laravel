

@component('admin.master')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex">
                <h3 class="card-title">فهرست محصولات</h3>

                <div class="card-tools d-flex"><form action="">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                    </form>
                    <div class="btn-group-sm mr-2"></div>
                    <a href="{{ route('admin_PRODUCT.create') }}" class="btn btn-info">ایجاد محصول</a>
                    </div>
                </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>آیدی</th>
                    <th>نام</th>
                    <th>قیمت</th>
                    <th>ستاره</th>
                    <th>عرض</th>
                    <th>طول</th>
                    <th>تخفیف</th>
                    <th>گارانتی</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->price}}</td>
                    <td>{{$user->stars}}</td>
                    <td>{{$user->length}}</td>
                    <td>{{$user->with}}</td>
                    <td>{{$user->discust}}</td>
                    <td>{{$user->garant}}</td>
                    <td class="d-flex"><a href="{{route('edit_post', ['id'=>$user->id])}}"><button class="btn btn-primary"><span class="badge badge-primary">ویرایش</span></button></a>
                    <form action="{{route('admin_PRODUCT.destroy', ['admin_PRODUCT'=>$user->id])}}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><span class="badge badge-danger">حذف</span></button>
                    </form></td>
                  @endforeach

                </tbody></table>

              <!-- /.card-body -->
            </div>
            <!-- <div class="card-footer d-flex">
                <div class="cart ">
                    {{$users->render()}}
                </div>

              </div> -->
            </div></div>

            <!-- /.card -->
          </div>
        </div>
@endcomponent
