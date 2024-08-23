@component('admin.master')

<div class="row">
    <div class="col-lg-12">
        @include('admin.layaut.errors')
    <div class="card ">
              <div class="card-header">
                <h3 class="card-title">ایجاد محصول</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('admin_PRODUCT.store')}}" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">قیمت</label>
                  <div class="col-sm-10">
                      <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="قیمت را وارد کنید">
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>

                    <div class="col-sm-10">
                        <textarea name="discription"  class="form-control" placeholder="توضیحات را وارد کنید" id="discription" cols="30" rows="10"></textarea>
                      <!-- <input type="text-eria" name="discription" id="discription" placeholder="توضیحات را وارد کنید" > -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">ستاره ها</label>

                    <div class="col-sm-10">
                      <input type="number" max="5" min="0" name="stars" class="form-control" id="inputEmail3" placeholder="ستاره را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">طول</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="with" class="form-control" id="inputEmail3" placeholder="طول را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">عرض</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" name="length" class="form-control" id="inputEmail3" placeholder="عرض را وارد کنید">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">تخفیف</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="discust" class="form-control" id="inputEmail3" placeholder="تخفیف را وارد کنید">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="form-check">
                        <input name="garant" type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">گارانتی دارد</label>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">ایجاد محصول</button>
                  <button type="submit" class="btn btn-default float-left">لغو</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
    </div>
</div>

@endcomponent
