@extends("layouts.base")
@section("title","اضافة عقار جديد")
@section("content")
<div class="container">
    <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row justify-content-center">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">إضافة عقار جديد</h4>
                  <form action="{{ route("store") }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="width">عرض</label>
                      <input type="text" class="form-control" name="width" id="width" placeholder="عرض">
                    </div>
                    <div class="form-group">
                      <label for="length">الطول</label>
                      <input type="text" class="form-control" id="length" name="length" placeholder="الطول">
                    </div>
                    <div class="form-group">
                      <label for="storey">رقم الطابق</label>
                      <input type="text" class="form-control" id="storey" name="storey" placeholder="رقم الطابق">
                    </div>
                    <div class="form-group">
                        <label for="city">المدينة</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="المدينة">
                    </div>
                    <div class="form-group">
                      <label for="amunt">سعر العقار</label>
                      <input type="text" class="form-control" id="amunt" name="amunt" placeholder="سعر العقار">
                    </div>
                    <div class="form-group">
                      <label for="address">عنوان العقار</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="سعر العقار">
                    </div>
                      <div class="form-group">
                        <label for="image">الصورة</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="الصورة">
                      </div>
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection