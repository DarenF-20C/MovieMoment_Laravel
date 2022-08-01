@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1>Edit Reward</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">  
            <a class="admin-btn" href="{{ route('admin.rewardList') }}">Reward list</a>
        </div>
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('admin.updateReward') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach($rewards as $reward)
                <div class="form-group mt-2">
                    <label for="rewardName" class="form-label">Reward name:</label>
                    <input type="text" class="form-control" id="rewardName" name="rewardName" value="{{$reward->name}}">
                    <input type="hidden" class="form-control" id="rewardID" name="rewardID" value="{{$reward->id}}">
                </div>
                <div class="form-group">
                    <label for="rewardImage" class="form-label">Reward Images:</label> <br>
                    <img id="previewImage" src="{{asset('images')}}/{{$reward->image}}" alt="" width="200"> <br><br>
                        <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="rewardImage" name="rewardImage" onchange="showPreview(event);">    
                        <label class="custom-file-label" id="custom-file-label" for="customFile">Choose file</label>    
                        </div>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardDescription" class="form-label">Description:</label>
                    <textarea class="form-control" id="rewardDescription" name="rewardDescription">{!! $reward->description !!}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="pointsValue" class="form-label">Point:</label>
                    <select class="form-select" aria-label="Default select example" id="pointsValue" name="pointsValue">
                        <option value="{{$reward->points}}" selected>Select new point (Original:{{$reward-> points}})</option>
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
                    <input type="number" class="form-control" id="rewardQuantity" name="rewardQuantity" min="1" max="999" value="{{$reward->quantity}}">
                </div>
                <div class="form-group mt-2">
                    <label for="rewardCode" class="form-label">Redeem Code:</label>
                    <input type="text" class="form-control" id="rewardCode" name="rewardCode" maxlength="20" value="{{$reward->code}}">
                </div>
                <button class="btn btn-primary" type="submit" style="height:50px;">Save Reward</button> <br><br>
                @endforeach
            </form>
        </div>
    </div>
</div>
<br>


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
.form-label {
    font-size:23px;
}
</style>
@endsection

