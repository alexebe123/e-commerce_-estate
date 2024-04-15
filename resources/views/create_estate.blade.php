@extends("layout.base")
@section("title","اضافة عقار جديد")
@section("content")
<div class="container">
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">إضافة عقار جديد</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">التاجر</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="التاجر">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">عرض</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="عرض">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">الطول</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="الطول">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">رقم الطابق</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" placeholder="رقم الطابق">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">المدينة</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="المدينة">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">الصورة</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="الصورة">
                      </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection