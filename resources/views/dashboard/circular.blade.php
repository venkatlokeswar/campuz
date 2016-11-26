<div class="col-lg-12 background-color-white">
  {!!Form::open(['url'=>'post/circular'])!!}
  <div class="form-group">
    <h5>Post a new circular</h5>
    <div class="input-group">
      {!!Form::text('circular-input','',['placeholder'=>'Post a new Circular',
        'class'=>'form-control no-border-radius'])!!}
        <span class="input-group-btn">
          <button class="btn btn-default inline-button" type="button">Post</button>
        </span>
      </div>
    </div>
    <div class="form-group">
      <h5>Recent circulars</h5>
    </div>
    <div class="form-group circular-list scrollbar" id="style-15">
        <ul class="list-group">
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
          <li class="list-group-item">Hello</li>
        </ul>
    </div>
    {!!Form::close()!!}
  </div>
