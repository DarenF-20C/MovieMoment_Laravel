@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dear {{ Auth::user()->name }},</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1 class="title">Create Rewards</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">  
            <a class="admin-btn" href="{{ route('admin.rewardList') }}">Rewards list</a>
        </div>
        <div class="col-md-8 offset-md-2">
        <form action="{{ route('admin.addReward') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="form-group mt-2">
                    <label for="rewardName" class="form-label">Reward Name:</label>
                    <input type="text" class="form-control" id="rewardName" name="rewardName">
                </div>
                <div class="form-group">
                    <label for="rewardImage" class="form-label">Reward Images:</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="rewardImage" name="rewardImage" onchange="showPreview(event);">
                            <label class="custom-file-label" id="custom-file-label" for="customFile">Choose file</label>
                        </div>
                </div>
                <div class="col-sm-10 upload-image" id="display-image" class="" style="display:none">
                <img id="previewImage" src="" alt=""/>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardDescription" class="form-label">Description:</label>
                    <textarea class="form-control" id="rewardDescription" name="rewardDescription"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="pointsValue" class="form-label">Points: </label>
                    <select class="form-select" aria-label="Default select example" id="pointsValue" name="pointsValue">
                        <option selected>Select the point:</option>
                        <option value="5000">5,000</option>
                        <option value="10000">10,000</option>
                        <option value="15000">15,000</option>
                        <option value="20000">20,000</option>
                        <option value="25000">25,000</option>
                        <option value="30000">30,000</option>
                        <option value="35000">35,000</option>
                        <option value="40000">40,000</option>
                        <option value="45000">45,000</option>
                        <option value="50000">50,000</option>
                        <option value="55000">55,000</option>
                        <option value="60000">60,000</option>
                        <option value="65000">65,000</option>
                        <option value="70000">70,000</option>
                        <option value="75000">75,000</option>
                        <option value="80000">80,000</option>
                        <option value="85000">85,000</option>
                        <option value="90000">90,000</option>
                        <option value="95000">95,000</option>
                        <option value="100000">100,000</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="250000">250,000</option>
                        <option value="300000">300,000</option>
                        <option value="350000">350,000</option>
                        <option value="400000">400,000</option>
                        <option value="450000">450,000</option>
                        <option value="500000">500,000(Max Points)</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardQuantity" class="form-label">Quantity:</label>
                    <input type="number" class="form-control" id="rewardQuantity" name="rewardQuantity" min="1" max="999">
                </div>
                <div class="form-group mt-2">
                    <label for="rewardCode" class="form-label">Redeem Code:</label>
                    <input type="text" class="form-control" id="rewardCode" name="rewardCode" maxlength="20">
                </div>
                <button class="btn btn-primary" type="submit" style="height:50px;">Add Reward</button>
            </form>
            <br>
        </div>
    </div>
</div>

<script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("rewardImage").files[0].name;
        var src = URL.createObjectURL(event.target.files[0]);
        var nextSibling = e.target.nextElementSibling;
        var previewImage = document.getElementById("previewImage");
        nextSibling.innerText = fileName;
        var displayImage = document.getElementById("display-image");
        previewImage.src = src;
        displayImage.style.display = "block";
    });
</script>


<style>
#previewImage{
    width:auto;
    height:auto;
    border: none;
    max-width:500px;
    max-height:450px;
  }

.rewardImage {
 width:400px;
}

.form-label {
    font-size:23px;
}

.title {
    font-size:55px;
}

.btn.btn-secondary {
   background-color:blue;
}

.btn.btn-secondary:hover {
   background-color:black;

}
</style>

@endsection

<!-- <script>
//    function showPreview(event){
//    if(event.target.files.length > 0){
//       var src = URL.createObjectURL(event.target.files[0]);
//       var previewImage = document.getElementById("previewImage");
//       var displayImage = document.getElementById("display-image");
//    
//       var icon = document.getElementById("upload-icon");
//       previewImage.src = src;
//       displayImage.style.display = "block";
//    }
//    }

</script> -->



