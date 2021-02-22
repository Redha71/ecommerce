@extends('admin.admin_layouts')



@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">


 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">New Product ADD
 <a href="{{ route('all.product')}}" class="btn btn-success btn-sm pull-right"> All Product</a>
          </h6>
          <p class="mg-b-20 mg-sm-b-30">New Prodcut Add From</p>

       <form method="post" action="{{ route('store.product')}}" enctype="multipart/form-data">
        @csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_name" required
                    placeholder="Enter Product Name" oninvalid="this.setCustomValidity('Enter Product Name')"
                  oninput="this.setCustomValidity('')" >
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_code"   required
                  placeholder="Product Code" oninvalid="this.setCustomValidity('Enter Product Code')"
                oninput="this.setCustomValidity('')">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_quantity"  placeholder="Quantity" required
                   oninvalid="this.setCustomValidity('Enter Quantity')"
                oninput="this.setCustomValidity('')">
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="discount_price"  placeholder="Discount Price" >
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="category_id" required
        oninvalid="this.setCustomValidity('Select Category')"
     oninput="this.setCustomValidity('')">
                    <option label="Choose Category"></option>
                    @foreach($category as $row)
                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                    @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="subcategory_id" required
        oninvalid="this.setCustomValidity('Select Sub Category')"
     oninput="this.setCustomValidity('')">

                  </select>
                </div>
              </div><!-- col-4 -->



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
       <select class="form-control select2" data-placeholder="Choose country" name="brand_id" >
                    <option label="Choose Brand"></option>

                    @foreach($brand as $br)
                    <option value="{{ $br->id }}">{{ $br->brand_name }}</option>
                     @endforeach
                  </select>
                </div>
              </div><!-- col-4 -->


<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_size" id="size" data-role="tagsinput" required
                  placeholder="Product Size" oninvalid="this.setCustomValidity('Enter Product Size')"
                oninput="this.setCustomValidity('')">
                </div>
              </div><!-- col-4 -->

<div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Color: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="product_color" id="color" data-role="tagsinput"  required
                  placeholder="Product Color" oninvalid="this.setCustomValidity('Enter Product Color')"
                oninput="this.setCustomValidity('')">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="selling_price" placeholder="Selling Price" required
                  placeholder="Selling Price" oninvalid="this.setCustomValidity('Enter Selling Price')"
                oninput="this.setCustomValidity('')">
                </div>
              </div><!-- col-4 -->


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>

            <textarea class="form-control" id="summernote"  name="product_details" required
            placeholder="Product Details" oninvalid="this.setCustomValidity('Enter Product Details')"
          oninput="this.setCustomValidity('')">

             </textarea>

                </div>
              </div><!-- col-4 -->

                <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Video Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" name="video_link" placeholder="Video Link" >
                </div>
              </div><!-- col-4 -->



 <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Image One ( Main Thumbnali): <span class="tx-danger">*</span></label></br>
                 <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="image_one" onchange="readURL(this);"
          placeholder="Image One"   required oninvalid="this.setCustomValidity('Select Thumbnali Image')"
        oninput="this.setCustomValidity('')">
          <span class="custom-file-control"></span>
        <img src="#" id="one" style="display:none;" >
            </label>

                </div>
              </div><!-- col-4 -->


               <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label>
                 <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="image_two" onchange="readURL2(this);" required
          oninvalid="this.setCustomValidity(' Image 2')"
          oninput="this.setCustomValidity('')">
          <span class="custom-file-control"></span>
          <img src="#" id="two" style="display:none;">
            </label>

                </div>
              </div><!-- col-4 -->




         <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label>
                 <label class="custom-file">
          <input type="file" id="file" class="custom-file-input" name="image_three" onchange="readURL3(this);" required
           oninvalid="this.setCustomValidity(' Image 3')"
          oninput="this.setCustomValidity('')">
          <span class="custom-file-control"></span>
          <img src="#" id="three" style="display:none;">
            </label>

                </div>
              </div><!-- col-4 -->

            </div><!-- row -->

  <hr>
  <br><br>

          <div class="row">

        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="main_slider" value="1">
          <span>Main Slider</span>
        </label>

        </div> <!-- col-4 -->

         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="hot_deal" value="1">
          <span>Hot Deal</span>
        </label>

        </div> <!-- col-4 -->



         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="best_rated" value="1">
          <span>Best Rated</span>
        </label>

        </div> <!-- col-4 -->


         <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="trend" value="1">
          <span>Trend Product </span>
        </label>

        </div> <!-- col-4 -->

 <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="mid_slider" value="1">
          <span>Mid Slider</span>
        </label>

        </div> <!-- col-4 -->

<div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="hot_new" value="1">
          <span>Hot New </span>
        </label>

        </div> <!-- col-4 -->


        <div class="col-lg-4">
        <label class="ckbox">
          <input type="checkbox" name="buyone_getone" value="1">
          <span>Buyone Getone</span>
        </label>

        </div> <!-- col-4 -->


          </div><!-- end row -->
<br><br>


            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->

        </form>




        </div><!-- row -->


    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

 <script type="text/javascript">
      $(document).ready(function(){
     $('select[name="category_id"]').on('change',function(){
          var category_id = $(this).val();
          if (category_id) {

            $.ajax({
              url: "{{ url('/get/subcategory/') }}/"+category_id,
              type:"GET",
              dataType:"json",
              success:function(data) {
              var d =$('select[name="subcategory_id"]').empty();
              $.each(data, function(key, value){

              $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

              });
              },
            });

          }else{
            alert('danger');
          }

            });
      });

 </script>


 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')

        .attr('src', e.target.result)
        .width(80)
        .height(80)
        .css('display','inline');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

 <script type="text/javascript">
  function readURL2(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#two')
        .attr('src', e.target.result)
        .width(80)
        .height(80)
        .css('display','inline');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>



 <script type="text/javascript">
  function readURL3(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#three')
        .attr('src', e.target.result)
        .width(80)
        .height(80)
        .css('display','inline');
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

@endsection
