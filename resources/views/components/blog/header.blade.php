<header data-bs-theme="dark" >
    
    <div class="navbar navbar-dark bg-dark shadow-sm ">
      <div class="container">
        <div class="d-flex flex-row justify-content-between">
          <div class="col">
            <a href="/" class="navbar-brand d-flex align-items-center">
              <strong>{{__('Blog')}}</strong>
            </a>
          </div>
          <div class="col-6 d-flex">
            <a href="{{route('news.index')}}" class="navbar-brand d-flex align-items-center">
              {{__('News')}}
            </a>
            <a href="{{route('categories')}}" class="navbar-brand d-flex align-items-center">
              {{__('Categories')}}
            </a>
            <a href="{{route('order.create')}}" class="navbar-brand d-flex align-items-center">
              {{__('Make order')}}
            </a>
            <a href="{{route('feedback.create')}}" class="navbar-brand d-flex align-items-center">
              {{__('Feedback')}}
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </header>